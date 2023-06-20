<?php
 session_start();
 if(isset($_POST['user']) && isset ($_POST['pass']) && isset($_POST['passpow'])){
    require_once('db.php');
    $connect = new mysqli($host, $user, $pass, $db);
    $connect ->query('SET NAMES UTF8');
    $login = $connect ->real_escape_string($_POST['user']);
    $pass = $connect ->real_escape_string($_POST['pass']);
    $passpow = $connect ->real_escape_string($_POST['passpow']);
    $sql = "SELECT * FROM uzytkownicy WHERE user = '$login'";


    if($result =$connect ->query($sql)){
        if($result->num_rows ==0){
            if($pass == $passpow){
                $hash1= password_hash($pass, PASSWORD_DEFAULT);
                $sql = "INSERT INTO `uzytkownicy`(`user`,`pass`) VALUES ('$login', '$hash1')";
                $connect ->query($sql);
                header('location:logowanie.php');
                exit();
            }else{
                echo "Hasła nie są takie same!";
            }

        }else{
            echo "Taki użytkownik już istnieje";
        }

    }

 }

 ?>

?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Oblevion</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="main">
        <h1>Zarejestruj się: </h1><br>
        <form action="rejstracja.php" method="post">
            Login: <input type="text" name="user">
            <br><br>
            Hasło: <input type="password" name="pass">
            <br><br>
            Powtórz Hasło: <input type="password" name="passpow">
            <br><br>
            <input type="submit" value="Rejestruj" id="button">
        </form>
        <br><br>
        <a href="./logowanie.php">Logowanie</a>


    </div>

</body>

</html>