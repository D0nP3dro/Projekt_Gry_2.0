<?php
session_start();
$userses=$_SESSION['user']; // user nie wiem po co ale jest 
$nick=$_SESSION['nick']; // postać
$expowisko=0;

require_once('db.php'); // Baza danych 
$connect = new mysqli($host, $user, $pass, $db);
$connect -> query('SET NAMES UTF8');

class danepostac{

    public $hp, $sila, $sa, $int, $exp, $lvl;

}

class danepot{
    public $nazwap, $hpp, $silap, $sap, $intp, $expp; 

}





    $sql = "SELECT * FROM postac WHERE nazwa='$nick'";
    $result = $connect -> query($sql);
    while($row =$result-> fetch_row()){
        $danepostac = new danepostac();
        $danepostac ->lvl = 1;
        $danepostac ->exp = 2;
        $danepostac ->hp = $row[6];
        $danepostac ->sila = $row[7];
        $danepostac ->sa = $row[8];
        $danepostac ->int = $row[9];
        $wyslij= json_encode($danepostac);


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

   // if($walka>0){
                
      // $sqlp = "SELECT * FROM potwory WHERE id='$walka'";
       // $resultp = $connect->query($sqlp);
      //  while ($rowp = $resultp->fetch_row()) {
     //       $danep = new danepot();
      //      $danep ->nazwap = $rowp[1];
      //      $danep ->hpp = $rowp[2];
      //      $danep ->silap = $rowp[3];
      //      $danep ->sap = $rowp[4];
      //      $danep ->intp = $rowp[5];
      //      $danep ->expp = $rowp[6];
            //$wyslij = json_encode($danep);

        //}

   // }
   // echo $wyslij;
   echo $wyslij;








?>