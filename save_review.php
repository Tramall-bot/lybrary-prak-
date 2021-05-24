<?php
session_start();
if($_SESSION){
  if(isset($_POST['text'])){
    $text =  $_POST['text'];
    }
    if(isset($_POST['date'])){
      $date =  $_POST['date'];
    }
    $user = $_SESSION['id'];
    include "connect.php";
    postReview($user, $text, $date);
    echo "<script>location.replace('reviews.php');</script>";
}else{
  echo "Вы должны войти в аккаунт чтобы оставлять сообщения";
  echo "<a href='reviews.php'>Назад</a>";
}

?>