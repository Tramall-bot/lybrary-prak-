<!DOCTYPE html>
<html lang="en">
<?php
include 'connect.php';
include('header.php')?>
<nav class="navbar navbar-expand-lg navbar-dark navbar-fixed-top" style="background-color: #413c37; width: 32%; color:#b49a5d; float: none;
text-align: center; margin-left:35%; border: 2px solid  #b49a5d; border-top: none;" >
<div style="margin-left:33%;"class="navbar-nav" ><blockquote class="blockquote" style="font-size:35px; margin:0px; text-align: center;">
  КАТАЛОГ
  
</blockquote>
</div>
</nav>
<style type="text/css">
.Navbars {
flex-direction: row;

}
.Navbars>li {
margin-left: 10px;
margin-right: 10px;

}
.card {
  background-color: #413c37;
  width: 100%;
  color: #b49a5d;
  float: none;
  text-align: center;
  border: 2px solid #b49a5d;
}
	

</style>
<body>
<!--Фильтр--->
<br>
<div class="accordion " id="accordionExample"  >
  <div class="accordion-item " style=" background-color: #413c37; width: 100%; color:#b49a5d; float: none;
text-align: center;  border: 2px solid  #b49a5d; ">
    <h2 class="accordion-header" id="headingOne" >
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style=" display:inline-block;text-align:center; background-color: #b49a5d;">
        Фильтры
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">

<ul class="navbar-nav mr-auto mb-2 mb-lg-0 w-100 justify-content-center Navbars">
<li class="nav-item" > 
<a class="nav-link active" aria-current="page" href="Главная.html"><font color="#b49a5d">Все</font></a> 
</li> 
<li class="nav-item" > 
<a class="nav-link active" aria-current="page" href="#" id="flipShelfs"><font color="#b49a5d">Перевернуть список</font></a> 
</li> 
<li class="nav-item" > 
<a class="nav-link active" aria-current="page" href="Плейлист.html"><font color="#b49a5d">По Алфавиту</font></a> 
</li> 
<li class="nav-item" > 
<a class="nav-link active" aria-current="page" href="История создания.html"><font color="#b49a5d">По дате</font></a> 
</li> 
<li class="nav-item" > 
<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false"> <font color="#b49a5d">
По жанрам</font>
</a> 
<ul class="dropdown-menu" style="background-color: #b49a5d;" aria-labelledby="navbarDropdown"> 
<?php
  $genres = getGenreAll();
  for($i = 0; $i<9;$i++){
    echo '<li><a class="dropdown-item" href="#">'.$genres[$i]['name'].'</a></li>';
  }

?>
<li><a class="dropdown-item" href="genres.php">Больше жанров...</a></li>
</ul> 
</li> 
</ul>
           

      </div>
    </div>
  </div>
</div>

<br id="booksStart">
<?php
$genFilter = explode("=",$_SERVER['QUERY_STRING'])[1]; 
$filteredBooks = array();
if($genFilter != null){
  echo $genFilter;
  $filteredBooks = getBooksByGenreId($genFilter);
}
else{
  $filteredBooks = getBookAll();
}
foreach($filteredBooks as &$book){
  echo "<input type='hidden' value='".$book['title']."' class='title'>";
echo "<input type='hidden' value='".$book['img']."' class='imgsrc'>";
}
echo "<input type='hidden' value='".count($filteredBooks)."' id='booknumber'>";

?>
<!--
  фикс бага с футером-->
<br><br><br><br>
<script src="filterBooks.js"></script>
 <?php
include('footer.php')?>
</body>
</html>