<?php
session_start();

    require_once 'connection.php'; // подключаем скрипт
    
    // подключаемся к серверу
    $link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " .mysqli_error($link));
 
    // выполняем операции с базой данных
     

     
 
 $login=$_POST['login'];
 $pass=$_POST['pass'];



 
 
 $query="SELECT * FROM client WHERE userLogin='$login' and userPassword  ='$pass' LIMIT 1";
 $result = mysqli_query ($link, $query);
//  echo var_dump(mysqli_num_rows($result));
 if (mysqli_num_rows($result)) 
 
 {
    $arr=mysqli_fetch_assoc($result);
    $_SESSION['log']=$arr['userLogin'];
    $_SESSION['f']=$arr['FirstName'];
    $_SESSION['i']=$arr['Name'];
    $_SESSION['o']=$arr['Surname'];
    
    
    $role=$arr['IdClient'];
 
    
    if(isset($_SESSION['log']) && isset($_SESSION['f'])&& isset($_SESSION['i'])&& isset($_SESSION['o']) && ($role==2))
   

{
    
  //  echo "Логин: $userLogin <br /> ФИО: $userFIO";
    header__line('Location: client.php');
}
    
    
    else 
    if(isset($_SESSION['log']) && isset($_SESSION['f'])&& isset($_SESSION['i'])&& isset($_SESSION['o']) && ($role==3))

    header__line("Location:sotrydnik.php");
     
 }
 
 else  echo "not found";

 

    // закрываем подключение
    mysqli_close($link);
 ?>