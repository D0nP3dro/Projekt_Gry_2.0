<?php 
session_start();
require_once('db.php');
$connect = new mysqli($host, $user, $pass,$db);
$connect->query('SET NAMES UTF8');
$lvl =rand(10, 15);
$sql="SELECT * FROM potwory WHERE id='$lvl'";
$result=$connect -> query($sql);

class danepot{
    public $nazwapott;


}

while($row=$result->fetch_row()){
    $dane = new danepot();
    $dane ->nazwapott=$row[1];
    $wyslij=json_encode($dane);

}

echo $wyslij;



