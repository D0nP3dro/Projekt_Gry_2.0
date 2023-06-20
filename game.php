<?php
    session_start();
    $userses=$_SESSION['user'];
    $nick = $_SESSION['nick'];
    #Jak tam zdrówko? 
    require_once('db.php');
            $connect = new mysqli($host, $user, $pass, $db);
            $connect->query('SET NAMES UTF8');
?>
    <!DOCTYPE html>
    <html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./styleg.css">
        <title>Oblivion</title>
    </head>
    <body>
        <header>
                <nav>
                <a href="./expowiska.php">Expowiska</a>
                <a href="./arena.php">Areny</a>
                <a href="./szpital.php?lecz=1" title="Za każde leczenie pobierana jest opłata wynosząca 60 expa">Szpital</a>
                <a href="./wymienexp.php?wymien=1">Wymień Exp na Poziom</a>
                <a href="./wyloguj.php">Wyloguj</a>
        </nav>
        </header>
        <div id="main">

            <div id="display">
                <div id="imgpostacji">
                    <img src="./img/roan.gif">

                </div>

                <div id="postac">
                <?php
                $sql="SELECT * FROM postac WHERE nazwa='$nick'";
            $result = $connect ->query($sql);
            while ($row =$result -> fetch_row()){
                echo "
                    <br>
                    Nick: $row[2]<br>
                    Poziom: $row[3]<br>  
                    Exp: $row[4]<br>     
                    Klasa: $row[5]<br>   
                    Zdrowie: $row[6]<br>   
                    Sila: $row[7]<br>   
                    SA: $row[8]<br>   
                    Intelekt: $row[9]<br>   
                
                
                ";
                #Wie pan że jeż potrafi przejść 2km pieszo za jedzeniem i to za 1 zamachem

            } 

            if(isset($_GET['minexp'])){
                echo "
                    <br>
                    Masz za mało expa!
                
                
                ";

            }


?>

                </div>



            </div>




        </div>

    </body>
    </html>