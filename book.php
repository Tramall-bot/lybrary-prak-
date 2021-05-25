<!DOCTYPE html>
<html lang="en">
<?php
include('header.php');
include "connect.php";
$bookId = explode("=",$_SERVER['QUERY_STRING'])[1];
if($bookId !=""){
  $book = getBookById($bookId);
}
?>
<div class="container-joj" style="">
  <div class="" style="background-color: #413c37; border: 2px solid  #b49a5d; width: 32%; margin: 0 auto; text-align: center; border-top: none; heigh: 30px;">
    <div class="blockquote" style=" color:#b49a5d; font-size:35px; margin:0px; left: 50%; text-align: center;"><?php if($book) echo $book['title']; ?></div>
  </div>
</div>
</div>
<link rel="stylesheet" type="text/css" href="css/style.css">
<body>


<div class="container" style="padding-top: 1%;padding-left:160px ">

  <div class="row justify-content-end" style="padding-bottom: 1%;padding-right: 15%; text-align: center;">
    <div class="col-sm " style="background-color: #413c37; color:#b49a5d;border:2px solid #b49a5d;">
      <br>
      <img style="width: 60%;"src="<?php if($book){ echo $book['img'];} ?>"  alt="..." style="  background-color: #413c37; color:#b49a5d;border:2px solid #b49a5d;">
 <br><br><p><b><u>НАЗВАНИЕ</b></u>:<?php if($book) echo $book['title']; ?></p>
<p><b><u>ДАТА ИЗДАНИЯ</b></u>: <?php if($book) echo $book['date']; ?> г.</p>
<p><b><u>АВТОР</b></u>:<?php if($book) echo $book['author']; ?></p>
  </div>
    <div class="col-sm" style="background-color: #413c37; color:#b49a5d;border:2px solid #b49a5d;">
      <div class="text-block";>
 <p><h3><b><u>КРАТКОЕ СОДЕРЖАНИЕ:</b></u></h3>
  <?php if($book) echo $book['description']; ?></p>
<input type="button" class="btn btn-danger" onclick="history.back();" value="Назад"/>
<a href="<?php if($book) echo $book['pdf']; ?>" download=""><input type="button" class="btn btn-success" onclick="" value="Скачать pdf" /></a>
<br><br>
</div>
    </div>
    
 </div>
</div>



<article>

<div class="accordion " id="accordionExample">
  <div class="accordion-item " style=" background-color: #413c37; width: 100%; color:#b49a5d; float: none;
text-align: center;  border: 2px solid  #b49a5d; ">
    <h2 class="accordion-header " id="headingOne" >
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style=" display:inline-block;text-align:center; background-color: #b49a5d;">
        Читать онлайн:
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse is-disabled" aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="min-height: 1200px">
      <div class="accordion-body">
       <embed src="<?php if($book) echo $book['pdf']; ?>" width="100%" height="1200px" />

      </div>
    </div>
  </div>
  
</div>
</article>
<div></div>

<?php
include('footer.php')?>

</body>
</html>