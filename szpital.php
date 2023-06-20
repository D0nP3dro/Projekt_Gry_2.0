<?php
session_start();
$userses = $_SESSION['user'];
$nick = $_SESSION['nick'];

require_once('db.php');
$connect = new mysqli($host, $user, $pass, $db);
$connect->query('SET NAMES UTF8');

if(isset($_GET['lecz'])){
            $sql = "SELECT * FROM postac WHERE nazwa='$nick'";
            $result = $connect->query($sql);
            while ($row = $result->fetch_row()) {



                $exp  = $row[4];
                $zdrowie = $row[6];



            }
            if($exp>0){
                unset($_GET['minexp']);
                $zdrowie=$zdrowie+1200;
                $exp=$exp-60;
                $sqlupdate="UPDATE `postac` SET `zdrowie`='$zdrowie', `ilosc_expa`='$exp' WHERE nazwa='$nick'";
                $connect->query($sqlupdate);
                header('location:game.php');
                exit();
            }else{
                header('location:game.php?minexp=1');

            }
        


}




?>