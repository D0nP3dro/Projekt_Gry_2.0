<?php
session_start();
$userses = $_SESSION['user'];
$nick = $_SESSION['nick'];
#Jak tam zdrówko? 


    $nazwapot =$_SESSION['nazwapot'];
    $zdrowie= $_SESSION['zdrowielicz'];
    $zdrowiepot= $_SESSION['zdrowiepotlicz'];
    if(!isset($_SESSION['expowiskoid'])){
        

    }else{
        $expowiskoid= $_SESSION['expowiskoid'];
    }
    if(isset($_GET['koniec'])){
        unset($_SESSION['zdrowielicz']);
        unset($_SESSION['zdrowiepotlicz']);
        unset($_SESSION['expowiskoid']);
        unset($_SESSION['czytaj']);
        unset($_SESSION['nazwapot']);
        unset($_SESSION['zdrowiepot']);
        unset($_SESSION['silapot']);
        unset($_SESSION['sapot']);
        unset($_SESSION['intelektpot']);
        unset($_SESSION['exppot']);
        unset($_SESSION['lvl']);
        unset($_SESSION['exp']);
        unset($_SESSION['zdrowie']);
        unset($_SESSION['zdrowie']);
        unset($_SESSION['sila']);
        unset($_SESSION['sa']);
        unset($_SESSION['intelekt']);
        header('location:expowiska.php');
        exit();
    }
    

   
?>




<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylew.css">
    <title>Oblivion</title>
</head>

<body>
    <div id="main">
        <?php


            echo "
            <div id='walka'>
                <div id='postac'>
                
                    $nick<br>
                   Zdrowie: $zdrowie<br>
                    <br><br>
                    <img src='./img/roan.gif'>


                </div>
                <div id='przeciwnik'>
                    $nazwapot<br>
                   Zdrowie: $zdrowiepot<br>
                    <br><br>
                    <img src='./img/roan.gif'>

                
                </div>
                <br>
                <br>
            
        ";
            if(!isset($_GET['walka'])){
                echo "
                    <a href='walkalicz.php?atakuj=1'>Walcz</a>
                
                ";

            }else if($_GET['walka']==2){
                echo "
                    <br>Koniec walki, przegrałeś lamus jesteś
                    <br>
                    
                    
                
                
                ";

            }else if($_GET['walka']==1){

                echo "
                 <a href='walkadane.php?expowisko='$expowiskoid'>Walcz dalej</a>
                ";

            }
                #Kurcze niechce to działać tak jak chce można powiedzieć że bierze mnie ku***ca 2h majstrowania na g**no
                

            echo "
            <br>
            <a href='walka.php?koniec=1'>Wróc</a>


            </div>
        
        
        
        
        
        
        
        
        ";





        
        ?>
    </div>
</body>

</html>