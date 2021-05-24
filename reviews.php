<?php
session_start();
?>
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

  <form action="save_review.php" method="POST" id="reviewForm">
    <input type="text" name="text" id="reviewInput" placeholder="Введите свой отзыв"><br>
    <input type="hidden" name="date"id="date">
    <button type="submit">Оставить отзыв</button>
  </form>
  <script src="save_review.js"></script>
  <?php
  include "connect.php";
  $reviews = getReviewsAll();
  $reviews = array_reverse($reviews);
  foreach($reviews as &$rev){
    $user = getUserById($rev['user_id']);
    echo "<p> Имя пользователя: ".$user['name']."</p>";
    echo "<p> Дата написания сообщения: ".$rev['date']."</p>";
    echo "<p> Текст сообщения: ".$rev['text']."</p>";
  }
  ?>

<?php
include('footer.php')?>

</body>
</html>