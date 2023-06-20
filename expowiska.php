<?php
session_start();
$userses = $_SESSION['user'];
$nick = $_SESSION['nick'];
#Jak tam zdrówko? 
require_once('db.php');
$connect = new mysqli($host, $user, $pass, $db);
$connect->query('SET NAMES UTF8');
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
    header('location:game.php');
    exit();
}


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylee.css">
    <title>Oblivion</title>
</head>

<body>
    <div id="main">
        <h1>Expowiska</h1>
    <div id="display">
        <div id="lvl1">
            <h4>Lvl 1-2</h4>
            <br>
            <a href="test.php">
            <img src="./img/lvl1.bmp">
</a>
        </div>
                <div id="lvl2">
        <h4>Lvl 3-6</h4>
            <br>
            <a href="walkadane.php?expowisko=2">
            <img src="./img/lvl2.bmp">
</a>
        </div>
        <div id="lvl3">
        <h4>Lvl 6-9</h4>
            <br>
            <a href="walkadane.php?expowisko=3">
            <img src="./img/lvl3.bmp">
</a>
        </div>
        <div id="lvl4">
        <h4>Lvl 10-15</h4>
            <br>
            <a href="walkadane.php?expowisko=4">
            <img src="./img/lvl4.bmp">
</a>
        </div>
        <div id="lvl5">
        <h4>Lvl 16-22</h4>
            <br>
            <a href="walkadane.php?expowisko=5">
            <img src="./img/lvl5.bmp">
</a>
        </div>
        <div id="lvl6">
        <h4>BOSS 25Lvl</h4>
            <br>
            <a href="walkadane.php?expowisko=6">
            <img src="./img/lvl6.bmp">
</a>
</div>
    </div>
<br><br>
<a href='expowiska.php?koniec=1'>Wróc</a>

    </div>
</body>

</html>