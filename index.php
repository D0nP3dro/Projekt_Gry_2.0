<?php 

    session_start();
    $userses=$_SESSION['user'];
    if(!isset($_SESSION['log'])){
        header('location:logowanie.php');
        exit();

    }
    if(isset($_GET['graj'])){
        header('location:game.php');
        exit();

    }

?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./stylei.css">
    <title>Oblivion</title>
</head>

<body>
    <div id="main">
        <div id="display">
            <h2>Witaj <?php echo $userses ; ?></h2>
            <br>
            <h4>Twoja postać: </h4>
            <?php
            require_once('db.php');
            $connect = new mysqli($host, $user, $pass, $db);
            $connect->query('SET NAMES UTF8');
            $sql = "SELECT * FROM postac WHERE `nazwa_u` = '$userses'";
            if ($result = $connect->query($sql)) {
                if ($result->num_rows == 0) {
                    echo '
                        <br>Dodaj Postać:
                        <br>
                        <br>
                        <form action="dodaj_postac.php" method="post">
                        Nick: <input type="text" name="nick"><br><br>
                        <select name="postac">
                    ';
                    $sqll = "SELECT * FROM postac_wybor";
                    $resultt = $connect-> query($sqll);
                    while($row = $resultt->fetch_row()){
                        echo "
                            <option value='$row[0]'> $row[1]</option>
                        
                        ";
        
                    }

                    echo '
                        </select>
                        <br><br>
                        <input type="submit" value="Dodaj i graj">

                        </form>

                    
                    
                    
                    ';
                } else {
                    $resultp = $connect ->query($sql);
                    while ($row =$resultp -> fetch_row()){
                        $_SESSION['nick']=$row[2];
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
                            <br>
                            <br>
                            <a href='index.php?graj=graj'>Wbij do gry</a>
                        
                        
                        ";
                        #Wie pan jak rozwiązać problem z głodnymi biegającymi dziećmi  w afryce? Uciąć im nóżki.

                    } 
                }
            }


            ?>
            <br><br>




        </div>
        <div id="menu">



        </div>



    </div>


</body>

</html>