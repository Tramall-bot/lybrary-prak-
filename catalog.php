<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<?php
include 'connect.php';
include('header.php')?>
<div class="container-joj" style="">
  <div class="" style="background-color: #413c37; border: 2px solid  #b49a5d; width: 32%; margin: 0 auto; text-align: center; border-top: none; heigh: 30px;">
    <div class="blockquote" style=" color:#b49a5d; font-size:35px; margin:0px; left: 50%; text-align: center;">КАТАЛОГ</div>
  </div>
</div>
</div>

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
<a class="nav-link active" aria-current="page" href="catalog.php"><font color="#b49a5d">Все</font></a> 
</li> 
<li class="nav-item" > 
<a class="nav-link active" aria-current="page" href="#" id="flipShelfs"><font color="#b49a5d">Перевернуть список</font></a> 
</li> 
<li class="nav-item" > 
<a class="nav-link active" aria-current="page" href="catalog.php?date"><font color="#b49a5d">По дате</font></a> 
</li> 
<li class="nav-item" > 
<a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false"> <font color="#b49a5d">
По жанрам</font>
</a> 
<ul class="dropdown-menu" style="background-color: #b49a5d;" aria-labelledby="navbarDropdown"> 
<?php
  $genres = getGenreAll();
  for($i = 0; $i<9;$i++){
    echo '<li><a class="dropdown-item" href="catalog.php?gen='.$genres[$i]['id'].'">'.$genres[$i]['name'].'</a></li>';
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
<br>
<br id="booksStart">
<?php
if(explode("=",$_SERVER['QUERY_STRING'])[0] == "gen")
$genFilter = explode("=",$_SERVER['QUERY_STRING'])[1];
if($_SERVER['QUERY_STRING'] == "date")
$dateFilter = true;
$filteredBooks = array();
function cmpDate($a, $b){
  if($a['date'] > $b['date'])
  return true;
  else
  return false;
}
if($genFilter != null){
  echo $genFilter;
  $filteredBooks = getBooksByGenreId($genFilter);
}
else{
  $filteredBooks = getBookAll();
  if($dateFilter){
    usort($filteredBooks, 'cmpDate');
  }
}
foreach($filteredBooks as &$book){
echo "<input type='hidden' value='".$book['id']."' class='bkid'>";
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