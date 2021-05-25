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
  <style type="text/css">

</style>
<br>
 <div class="container" style="background-color: #413c37; color:#b49a5d;border:2px solid #b49a5d;padding-bottom: 5%;">
        <div class="row">
            <div class="col-lg-12">
             
            </div>
            <div class="col-lg-6" style="color:lightblue">
              <?php
  include "connect.php";
  $reviews = getReviewsAll();
  $reviews = array_reverse($reviews);
  foreach($reviews as &$rev){
    $user = getUserById($rev['user_id']);
    echo "<p> ---".$user['name']."[".$rev['date']."]---"."</p>";
    echo $rev['text']."</p>";
    
  }
  ?>
            </div>
            <div class="col-lg-6">
              
              <form action="save_review.php" method="POST" id="reviewForm">
                <label for="comment-body">Введите свой отзыв:</label>
                <input type="text" name="text" id="reviewInput"class="form-control"><br>
                <input type="hidden"class="form-control" name="date"id="date">
                <button type="submit"class="btn btn-primary">Отправить</button>
              </form>
              <script src="save_review.js"></script>

            </div>
        </div>
    </div>




<?php
include('footer.php')?>

</body>
</html>