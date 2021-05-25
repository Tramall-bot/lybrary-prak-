<?php
  session_start();
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<title>ELECTRONIC LIBRARY</title>
</head>

<div class="container-joj" style="">
  <div class="" style="background-color: #413c37; border: 2px solid  #b49a5d; width: 32%; margin: 0 auto; text-align: center; border-top: none; heigh: 30px;">
    <div class="blockquote" style=" color:#b49a5d; font-size:35px; margin:0px; left: 50%; text-align: center;">ОШИБКА ПРИ ВХОДЕ</div>
  </div>
</div>
</div>
<body >
  <div style="background-color: #413c37; width: 32%; color:#b49a5d; float: none;
text-align: center; border: 2px solid  #b49a5d; padding: 30px; margin:20px; margin-left:34%;font-size:20px ">
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
if(isset($_POST['passwordcheck'])){
  $passck=$_POST['passwordcheck'];
  if($passck==''){
      unset($passck);
  }
}
if(isset($_POST['name'])){
  $name=$_POST['name'];
  if($name==''){
      unset($name);
  }
}
if(empty($login) or empty($pass) or empty($name)){
  printError("Вы ввели не всю информацию,вернитесь назад и заполните все поля!");
}
if($passck != $pass){
  printError("Поля пароля и повторения должны быть одинаковы");
}
include "connect.php";
$user = getUserByLogin($login);
if(empty($user['login'])){ 
  saveUser($name, $login, $pass);
  $usr = getUserByLogin($login);
  $_SESSION['login'] = $usr['login'];
  $_SESSION['id'] = $usr['id'];
  $_SESSION['isAdmin'] = $usr['isAdmin'];
  echo "<script>location.replace('index.php');</script>";
}else{
  printError("Представленный Логин уже занят.");
}
function printError($err){
  echo $err;
  exit ("<a href='create_user.php'>Назад</a>");
}
?>
  </div>
  
</body>
</html>

