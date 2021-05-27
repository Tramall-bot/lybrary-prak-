<?php
if(!$_POST['search']){
  echo "<script>history.back()</script>";
}
include "connect.php";
echo var_dump($_POST['search']);
if($book=getBookByTitle($_POST['search'])){
  //echo "<script>location.replace('book.php?bk=".$book['id']."');</script>";
}
else
  if($genre = getGenreByName($_POST['search'])){
    echo "<script>location.replace('catalog.php?gen=".$genre['id']."');</script>";
  }
else{
  echo "fail"; 
  echo "<script>history.back()</script>";
}
?>