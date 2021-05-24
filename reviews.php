<!DOCTYPE html>
<html lang="en">
<?php
include('header.php')?>
<nav class="navbar navbar-expand-lg navbar-dark navbar-fixed-top" style="background-color: #413c37; width: 32%; color:#b49a5d; float: none;
text-align: center; margin-left:35%; border: 2px solid  #b49a5d; border-top: none;" >
<div style="margin-left:35%;"class="navbar-nav" ><blockquote class="blockquote" style="font-size:35px; margin:0px; text-align: center;">
  ОТЗЫВЫ
  
</blockquote>
</div>
</nav>

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