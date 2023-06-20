<?php
     session_start();
     $userses=$_SESSION['user'];
     $nick = $_SESSION['nick'];
     #Jak tam zdrówko? 
     require_once('db.php');
             $connect = new mysqli($host, $user, $pass, $db);
             $connect->query('SET NAMES UTF8');
            if(isset($_GET['wymien'])){
                $sql="SELECT * FROM postac WHERE nazwa='$nick'";
                $result = $connect ->query($sql);
                while ($row =$result -> fetch_row()){
   
   
                       $lvl=$row[3];   
                       $exp  = $row[4];                    
                       $sila= $row[7];   
                        $sa= $row[8];   
                    $intelekt= $row[9];
                    
                    
   
                    #Jak do tego doszło nie wiem
                
    
                } 
                if($exp>0){
                    if($lvl<2){
                        $lvl=$lvl+1;
                        $exp=$exp-20;
                        $sila=$sila+2;
                        $sa=$sa+2;
                        $intelek=$intelekt+2;
                        $sqlupdate="UPDATE `postac` SET `lvl`='$lvl', `ilosc_expa`='$exp', `sila`='$sila', `szybkosc_a`='$sa', `intelekt`='$intelekt' WHERE nazwa='$nick'";
                        $connect->query($sqlupdate);
                        header('location:game.php');
                        exit();

                    }else if($lvl>=2 && $lvl<5){
                        $lvl=$lvl+1;
                        $exp=$exp-30;
                        $sila=$sila+5;
                        $sa=$sa+5;
                        $intelek=$intelekt+5;
                        $sqlupdate="UPDATE `postac` SET `lvl`='$lvl', `ilosc_expa`='$exp', `sila`='$sila', `szybkosc_a`='$sa', `intelekt`='$intelekt' WHERE nazwa='$nick'";
                        $connect->query($sqlupdate);
                        header('location:game.php');
                        exit();
                    }else if($lvl>=5 && $lvl<7){
                        $lvl=$lvl+1;
                        $exp=$exp-40;
                        $sila=$sila+7;
                        $sa=$sa+7;
                        $intelek=$intelekt+7;
                        $sqlupdate="UPDATE `postac` SET `lvl`='$lvl', `ilosc_expa`='$exp', `sila`='$sila', `szybkosc_a`='$sa', `intelekt`='$intelekt' WHERE nazwa='$nick'";
                        $connect->query($sqlupdate);
                        header('location:game.php');
                        exit();
                    }else if($lvl>=7 && $lvl<10){
                        $lvl=$lvl+1;
                        $exp=$exp-50;
                        $sila=$sila+10;
                        $sa=$sa+10;
                        $intelek=$intelekt+10;
                        $sqlupdate="UPDATE `postac` SET `lvl`='$lvl', `ilosc_expa`='$exp', `sila`='$sila', `szybkosc_a`='$sa', `intelekt`='$intelekt' WHERE nazwa='$nick'";
                        $connect->query($sqlupdate);
                        header('location:game.php');
                        exit();
                    }else if($lvl>=10 && $lvl<13){
                        $lvl=$lvl+1;
                        $exp=$exp-60;
                        $sila=$sila+13;
                        $sa=$sa+13;
                        $intelek=$intelekt+13;
                        $sqlupdate="UPDATE `postac` SET `lvl`='$lvl', `ilosc_expa`='$exp', `sila`='$sila', `szybkosc_a`='$sa', `intelekt`='$intelekt' WHERE nazwa='$nick'";
                        $connect->query($sqlupdate);
                        header('location:game.php');
                        exit();
                    }else if($lvl>=13 && $lvl<16){
                        $lvl=$lvl+1;
                        $exp=$exp-70;
                        $sila=$sila+16;
                        $sa=$sa+16;
                        $intelek=$intelekt+16;
                        $sqlupdate="UPDATE `postac` SET `lvl`='$lvl', `ilosc_expa`='$exp', `sila`='$sila', `szybkosc_a`='$sa', `intelekt`='$intelekt' WHERE nazwa='$nick'";
                        $connect->query($sqlupdate);
                        header('location:game.php');
                        exit();
                    }
                    else if($lvl>=16 && $lvl<19){
                        $lvl=$lvl+1;
                        $exp=$exp-80;
                        $sila=$sila+19;
                        $sa=$sa+19;
                        $intelek=$intelekt+19;
                        $sqlupdate="UPDATE `postac` SET `lvl`='$lvl', `ilosc_expa`='$exp', `sila`='$sila', `szybkosc_a`='$sa', `intelekt`='$intelekt' WHERE nazwa='$nick'";
                        $connect->query($sqlupdate);
                        header('location:game.php');
                        exit();
                    }
                    else if($lvl>=19 && $lvl<22){
                        $lvl=$lvl+1;
                        $exp=$exp-90;
                        $sila=$sila+22;
                        $sa=$sa+22;
                        $intelek=$intelekt+22;
                        $sqlupdate="UPDATE `postac` SET `lvl`='$lvl', `ilosc_expa`='$exp', `sila`='$sila', `szybkosc_a`='$sa', `intelekt`='$intelekt' WHERE nazwa='$nick'";
                        $connect->query($sqlupdate);
                        header('location:game.php');
                        exit();
                    }else if($lvl>=22){
                        $lvl=$lvl+1;
                        $exp=$exp-100;
                        $sila=$sila+30;
                        $sa=$sa+30;
                        $intelek=$intelekt+30;
                        $sqlupdate="UPDATE `postac` SET `lvl`='$lvl', `ilosc_expa`='$exp', `sila`='$sila', `szybkosc_a`='$sa', `intelekt`='$intelekt' WHERE nazwa='$nick'";
                        $connect->query($sqlupdate);
                        header('location:game.php');
                        exit();
                    }


                    unset($_GET['minexp']);

                }else{
                    header('location:game.php?minexp=1');
    
                }
   



            }



?>