<?php
session_start();

require_once 'connection.php'; // подключаем скрипт
    
// подключаемся к серверу
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " .mysqli_error($link));

// выполняем операции с базой данных


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="client.css">
    <title>Личный кабинет</title>
</head>
<body>
    <div class="header">
        <div class="header__top">
        <img src="img/sovcombank 1.png" class="sov">

        <form method="POST" action="start.php" >
    <input type="submit" value="выход"class="bt">
</form>  
        </div>
        <div class="header__line">
        <p>Добро пожаловать:<?php echo $_SESSION['f']?></p>
        </div>
    </div>
</body>
</html>