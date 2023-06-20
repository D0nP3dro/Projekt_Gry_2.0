<?php
            session_start();
            $userses=$_SESSION['user'];
            $nick = $_POST['nick'];
            $postacid=$_POST['postac'];
            $lvl=0;
            $ilexp=0;
            require_once('db.php');
            $connect = new mysqli($host, $user, $pass, $db);
            $connect->query('SET NAMES UTF8');
            $sqlwbor="SELECT * FROM postac_wybor WHERE id='$postacid'";
            $postac_wybor=$connect->query($sqlwbor);

            while ($row = $postac_wybor->fetch_row()){
                $klasa = $row[1];
                $zdrowie = $row[2];
                $sila = $row[3];
                $sa = $row[4];
                $intelekt = $row[5];
            }
            $sql = "INSERT INTO `postac`( `nazwa_u`, `nazwa`, `lvl`, `ilosc_expa`, `klasa_postacji`, `zdrowie`, `sila`, `szybkosc_a`, `intelekt`) VALUES ('$userses','$nick', $lvl, $ilexp, '$klasa','$zdrowie','$sila','$sa','$intelekt')";
            $connect->query($sql);
            header('location:index.php');
            exit();