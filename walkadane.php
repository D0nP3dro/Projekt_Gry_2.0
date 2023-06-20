<?php
session_start();
$userses = $_SESSION['user'];
$nick = $_SESSION['nick'];
#Jak tam zdrówko? 
require_once('db.php');
$connect = new mysqli($host, $user, $pass, $db);
$connect->query('SET NAMES UTF8');



$expowisko = $_GET['expowisko'];
$_SESSION['expowiskoid']=$expowisko;
if(isset($_GET['expowisko'])){


            $sql = "SELECT * FROM postac WHERE nazwa='$nick'";
            $result = $connect->query($sql);
            while ($row = $result->fetch_row()) {



                $_SESSION['lvl'] = $row[3];
                $_SESSION['exp']  = $row[4];
                $_SESSION['zdrowie'] = $row[6];
                $_SESSION['sila'] = $row[7];
                 $_SESSION['sa'] = $row[8];
                 $_SESSION['intelekt'] = $row[9];


            }
            if ($expowisko == 1) {
                $walka = rand(1, 2);
            } else if ($expowisko == 2) {
                $walka = rand(3, 6);

            } else if ($expowisko == 3) {
                $walka = rand(6, 9);

            } else if ($expowisko == 4) {
                $walka = rand(10, 15);

            } else if ($expowisko == 5) {
                $walka = rand(16, 22);

            } else if ($expowisko == 6) {
                $walka = 23;

            }
            if($walka>0){
                
                $sqlpot = "SELECT * FROM potwory WHERE id='$walka'";
                $resultp = $connect->query($sqlpot);
                while ($rowp = $resultp->fetch_row()) {
                    $_SESSION['nazwapot'] = $rowp[1];
                    $_SESSION['zdrowiepot'] = $rowp[2];
                     $_SESSION['silapot'] = $rowp[3];
                     $_SESSION['sapot']=$rowp[4];
                     $_SESSION['intelektpot'] = $rowp[5];
                    $_SESSION['exppot'] = $rowp[6];
    
    
                }

                

            }
            #Wczytywanie danych o potworach


            header('location:walkalicz.php?czytaj=1');
            exit();

}          
            ?>
            