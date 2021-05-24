<!DOCTYPE html>
<html lang="en">
<?php
include('header.php')?>
<div class="container-joj" style="">
  <div class="" style="background-color: #413c37; border: 2px solid  #b49a5d; width: 32%; margin: 0 auto; text-align: center; border-top: none; heigh: 30px;">
    <div class="blockquote" style=" color:#b49a5d; font-size:35px; margin:0px; left: 50%; text-align: center;">ОТЗЫВЫ</div>
  </div>
</div>
</div>
<body>

  <?php
  include "connect.php";
  $reviews = getReviewsAll();
  foreach($reviews as &$rev){
    $user = getUserById($rev['user_id']);
    echo "<p> Имя пользователя: ".$user['name']."</p>";
    echo "<p> Текст сообщения: ".$rev['text']."</p>";
  }
  ?>

<?php
include('footer.php')?>

</body>
</html>