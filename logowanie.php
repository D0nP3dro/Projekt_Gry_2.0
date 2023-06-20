<?php
session_start();
if (isset($_SESSION['log'])) {
    header('location:index.php');
    exit();
}
if (isset($_POST['user']) && isset($_POST['pass'])) {
    require_once('db.php');
    $connect = new mysqli($host, $user, $pass, $db);
    $connect->query('SET NAMES UTF8');
    $login = $connect->real_escape_string($_POST['user']);
    $pass = $connect->real_escape_string($_POST['pass']);
    $sql = "SELECT * FROM uzytkownicy WHERE user = '$login'";
    if ($result = $connect->query($sql)) {
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (password_verify($pass, $row['pass'])) {
                $_SESSION['log'] = true;
                $_SESSION['user'] = $row['user'];
                header('location:index.php');
            } else {
                echo 'Złe Hasło';
            }
        } else {
            echo 'Zły login';
        }
    }

    $connect->close();
}
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Oblivion</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="main">
        <h1>Zaloguj się: </h1><br>
        <form action="logowanie.php" method="post">
            Login: <input type="text" name="user">
            <br><br>
            Hasło: <input type="password" name="pass">
            <br><br>
            <input type="submit" value="Loguj" id="button">
        </form>
        <br><br>
        <a href="./rejstracja.php">Zarejestruj</a>


    </div>

</body>

</html>