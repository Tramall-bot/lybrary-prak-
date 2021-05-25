<?php
if(!$_POST['book']){
  echo "<script>history.back()</script>";
}
include "connect.php";
if($book=getBookByTitle($_POST['book'])){
  echo "<script>location.replace('book.php?bk=".$book['id']."');</script>";
}
else
echo "fail"; 
//echo "<script>history.back()</script>";
?>