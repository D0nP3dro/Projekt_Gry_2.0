<?php
session_start();
$nick = $_SESSION['nick'];

require_once('db.php');
$connect = new mysqli($host, $user, $pass, $db);
$connect->query('SET NAMES UTF8');
$sql= "SELECT * FROM postac WHERE nazwa='$nick'";

$result = $connect -> query($sql);

class danestart{

    public $nazwa, $lvl, $exp, $klasa, $hp, $sila, $sa, $int; 

}

while($row=$result->fetch_row() ){
    $dane =  new danestart();
    $dane->nazwa=$row[2];
    $dane->lvl=$row[3];
    $dane->exp=$row[4];
    $dane->klasa=$row[5];
    $dane->hp=$row[6];
    $dane->sila=$row[7];
    $dane->sa=$row[8];
    $dane->int=$row[9];
    $wyslij = json_encode($dane);

}

echo $wyslij;


?>