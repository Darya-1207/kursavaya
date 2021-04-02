<?php
session_start();

require_once 'connection.php';

$link = mysqli_connect($host, $user, $password, $database)
or die('Error' . mysqli_error($link));


//получаем данные из формы
$login = $_POST['login'];
$password = $_POST['pass'];
$F=$_POST['f'];
$I=$_POST['i'];
$O=$_POST['o'];


$query="SELECT userLogin FROM client WHERE userLogin='$login' LIMIT 1";

$result = mysqli_query($link, $query) or die('Ошибка: '. mysqli_error($link));

if (mysqli_num_rows($result)){
    $_SESSION['loginError']=$login;
}

else{
    
unset($_SESSION['loginError']);



//создаём запрос на вставку значений в БД
$query = "INSERT INTO client VALUES(NULL, '$F','$I','$O', NULL, NULL, NULL,'$login', '$password')";

//создаём переменную с результатом
$result = mysqli_query($link, $query) or die('Ошибка: '. mysqli_error($link));

//Если переменная result = true вывести на экран сообщение ДАННЫЕ НА МЕСТЕ
if($result)
{
echo "ДАННЫЕ ЗАПИСАНЫ";
}
}

//Закрываем подключение
mysqli_close($link);
?>