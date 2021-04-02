<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="enter.css">
    <title>Регистрация</title>
</head>
<body>
<script>
        function changeSecurityPassword() {
            document.querySelector('#submitGo').disabled = (pass_1.value == pass_2.value ? false : true);
        }
    </script>
    <style>
        .btn:disabled {
            background-color: #ccc;
        }
    </style>
    <title>Регистрация</title>
</head>
<body>

    
<?php

    if(isset($loginError)){
        
echo'<p>Логин' . $_SESSION['loginError'].'занят </p>';
}
?>
<form method="POST" action="registr.php" class="form">
    <h1>Регистрация</h1>
    <input type="text" class='fio'  onchange='validateReg()' name='f' placeholder="Введите фамилию"  required >
    <input type="text"class="fio" onchange='validateReg()' name='i' placeholder="Введите имя"  required >
    <input type="text"class="fio" onchange='validateReg()' name='o' placeholder="Введите отчество"  required >
        <input type="text" class='log' onchange='validateReg()' name="login" placeholder="Введите логин" required>
        <input type="password" id='pass_1' onchange='validateReg()' name="pass" placeholder="Введите пароль" required>
        <input type="password" id='pass_2' onchange='validateReg()' name="pass1" placeholder="Повторите пароль" required>
        <input type="submit" value="Регистрация" id='submitGo' class="btn" >
    </form>
    <?php
    require_once 'connection.php'; // подключаем скрипт
    
    // подключаемся к серверу
    $link = mysqli_connect($host, $user, $password, $database)    or die("Ошибка " . mysqli_error($link));

    // выполняем операции с базой данных

    // закрываем подключение
    mysqli_close($link);
    ?>
<script>

const Login = document.querySelector('.log');
const Password = document.querySelector('#pass_1');
const RepeatPassword = document.querySelector('#pass_2');
const F = document.querySelector('.f');
const Y = document.querySelector('.i');
const O = document.querySelector('.o');
const btn = document.querySelector('#submitGo');


//console.log(FIO.value.trim().lenght);
function validateReg(){
let flag = true;

//console.log("Login: ",Login.value.length,"// Password: ",Password.value.length,"// RepeatPassword: ",RepeatPassword.value,"// FIO: ",FIO.value);

if (Password.value.trim().length >= 6 && Password.value.trim().length < 30){
console.log("1й шаг выполнен")
if (Password.value.trim() == RepeatPassword.value.trim()){
console.log("2й шаг выполнен")
if (Login.value.trim().length != 0 && F.value.trim().length != 0 && Y.value.trim().length != 0 && O.value.trim().length != 0){
flag = false;
btn.disabled = flag;
return flag;
}
}
}
}


addEventListener('onchange', validateReg);
</script>
</body>
</html>