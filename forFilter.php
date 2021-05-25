<!DOCTYPE html>
<html lang="en" style="height:100%">
<head>
  <title>Document</title>
</head>
<body >
  <button id="idSort">Сорт по ID</button><br>
  <?php
  include "connect.php";
  //echo $_SERVER['QUERY_STRING'];
  $genFilter = explode("=",$_SERVER['QUERY_STRING'])[1]; 
  $filteredBooks = array();
  if($genFilter != null){
    echo $genFilter;
    $filteredBooks = getBooksByGenreId($genFilter);
  }
  else{
    echo "no filter";
    $filteredBooks = getBookAll();
  }
  foreach($filteredBooks as &$book){
  echo "<input type='hidden' value='".$book['title']."' class='title'>";
  echo "<input type='hidden' value='".$book['img']."' class='imgsrc'>";
  echo "<input type='hidden' value='".getGenreById($book['genid'])['name']."' class='gennameFB'>";
  }
  $gens = getGenreAll();
  foreach($gens as &$gen){
    echo "<input type='hidden' value='".$gen['id']."' class='genid'>";
    echo "<input type='hidden' value='".$gen['name']."' class='genname'>";
  }
  ?>
  <br>
</div>
  <script src="forFilter.js">
  </script>
</body>
</html>