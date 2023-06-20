<?php
session_start();
$nick=$_SESSION['nick'];
if(isset($_GET['czytaj'])){
    
    $nazwapot=$_SESSION['nazwapot'];
    $zdrowiepot =$_SESSION['zdrowiepot'];
    $silapot =$_SESSION['silapot'];
    $sapot = $_SESSION['sapot'];
    $intelektpot = $_SESSION['intelektpot'];
    $exppot = $_SESSION['exppot'];
    $lvl = $_SESSION['lvl'];
    $exp = $_SESSION['exp'];
    $zdrowie = $_SESSION['zdrowie'];
    $zdrowiespr =$_SESSION['zdrowie'];
    $sila = $_SESSION['sila'];
    $sa = $_SESSION['sa'];
    $intelekt = $_SESSION['intelekt'];
    $_SESSION['zdrowiepotlicz']=$zdrowiepot;
    $_SESSION['zdrowielicz']=$zdrowie;
    header('location:walka.php');
    exit();

}



 if(isset($_GET['atakuj']) && $_SESSION['zdrowiepotlicz']>0 && $_SESSION['zdrowielicz']){
    if(isset($_GET['czytaj'])){
      unset($_GET['czytaj']);
    }else{

    }
    #KOMBINACJI ALPEJSKICH DZIEŃ 14


    $_SESSION['zdrowiepotlicz']=$_SESSION['zdrowiepotlicz']-($_SESSION['sila']*$_SESSION['sa']+$_SESSION['intelekt']);
    $_SESSION['zdrowielicz']=$_SESSION['zdrowielicz']-($_SESSION['silapot']*$_SESSION['sapot']+$_SESSION['intelektpot']);

    header('location:walka.php');
    exit();

 }
 if($_SESSION['zdrowiepotlicz']<=0){
    require_once('db.php');
    $zdrowiebaza=$_SESSION['zdrowielicz'];
    $expbaza =$_SESSION['exp']+$_SESSION['exppot'];
    $connect = new mysqli($host, $user, $pass, $db);
    $connect->query('SET NAMES UTF8');
    $sql="UPDATE `postac` SET `zdrowie`='$zdrowiebaza', `ilosc_expa`='$expbaza' WHERE nazwa='$nick'";
    $connect->query($sql);
    unset($_GET['expowisko']);
  header('location:walka.php?walka=1');
  exit();
  
 }else if($_SESSION['zdrowielicz']<=0){
   require_once('db.php');
   $zdrowiebaza=$_SESSION['zdrowielicz'];
   $connect = new mysqli($host, $user, $pass, $db);
   $connect->query('SET NAMES UTF8');
   $sql="UPDATE `postac` SET `zdrowie`='$zdrowiebaza' WHERE nazwa='$nick'";
   $connect->query($sql);
   unset($_GET['expowisko']);
    header('location:walka.php?walka=2');
    exit();
 }
 


?>