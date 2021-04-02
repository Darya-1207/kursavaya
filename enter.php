<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link rel="stylesheet" href="enter.css">
</head>
<body>
    
    <form method="POST" action="client.php" class="form">
        <h1>Авторизация</h1>
        <label for ='login'> Логин </label> 
        <label for ='pass'> Пароль </label>
        <input type="text" class="login" name="login" placeholder="Введите логин" required>
        <input type="password" class="pass" name="pass" placeholder="Введите пароль" required>
        <input type="submit" value="Вход" class="btn" >
    </form>
    

    <?php
    require_once 'connection.php'; // подключаем скрипт
    
    // подключаемся к серверу
    $link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link));

    // выполняем операции с базой данных

    // закрываем подключение
    mysqli_close($link);
    ?>
</body>
</html>