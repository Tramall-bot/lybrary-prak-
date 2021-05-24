<?php
  session_start();
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<style>

body{background:url(https://proprikol.ru/wp-content/uploads/2020/03/kartinki-biblioteka-4.jpg);
color:#fff;
background-attachment:fixed;
background-repeat: no-repeat;
background-size:100% 100%;
}

TABLE {
    background: #000000; /* Цвет фона таблицы */
    color: yellow;  border:2px solid  #b49a5d;
   }
   TD {
    background: #000000; /* Цвет фона ячеек */
  border:2px solid #b49a5d;;
   }
   .carousel-inner .carousel-item.active,.carousel-inner .carousel-item-next,.carousel-inner .carousel-item-prev{display:flex}
.carousel-inner .carousel-item-right.active,.carousel-inner .carousel-item-next{transform:translateX(25%)}
.carousel-inner .carousel-item-left.active,.carousel-inner .carousel-item-prev{transform:translateX(-25%)}
.carousel-inner .carousel-item-right,.carousel-inner .carousel-item-left{transform:translateX(0)}
.hide_qt{
  display:none;
}
</style>
<title>ELECTRONIC LIBRARY</title>
</head>

<nav class="navbar navbar-expand-lg navbar-dark navbar-fixed-top" style="background-color: #413c37; width: 32%; color:#b49a5d; float: none;
text-align: center; margin-left:35%; border: 2px solid  #b49a5d; border-top: none;" >
<div style="margin-left:35%;"class="navbar-nav" ><blockquote class="blockquote" style="font-size:2em; margin:0px; text-align: center;">
  ОШИБКА ПРИ ВХОДЕ
</blockquote>
</div>
</nav>
<body >
  <div style="background-color: #413c37; width: 32%; color:#b49a5d; float: none;
text-align: center; border: 2px solid  #b49a5d; padding: 30px; margin:20px; margin-left:35%;font-size:20px ">
  <?php
  if(isset($_POST['login'])){
    $login=$_POST['login'];
    if($login==''){
        unset($login);
    }
}
if(isset($_POST['password'])){
    $pass=$_POST['password'];
    if($pass==''){
        unset($pass);
    }
}
if(empty($login) or empty($pass)){
  exit("Вы ввели не всю информацию,вернитесь назад и заполните все поля!");
}
include "connect.php";
$user = getUserByLogin($login, $pass);
if(empty($user['login'])){ 
  exit("Введённый вами login или пароль неверный.");
}else{
  if($user['password'] == $pass){ 
    $_SESSION['login'] = $user['login'];
    $_SESSION['id'] = $user['id'];
    $_SESSION['isAdmin'] = $user['isAdmin'];
    echo "<script>location.replace('index.php');</script>";
}
else{
    exit("Введённый вами login или пароль неверный.");
}
}
?>
  </div>
  
</body>
</html>

