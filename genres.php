<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<?php
include('header.php')?>
<div class="container-joj" style="">
  <div class="" style="background-color: #413c37; border: 2px solid  #b49a5d; width: 32%; margin: 0 auto; text-align: center; border-top: none; heigh: 30px;">
    <div class="blockquote" style=" color:#b49a5d; font-size:35px; margin:0px; left: 50%; text-align: center;">ЖАНРЫ</div>
  </div>
</div>
</div>
<style type="text/css">
.Navbars {
flex-direction: row;

}
.Navbars>li {
margin-left: 10px;
margin-right: 10px;
}


</style>
<body>


  <div class="popular__container" style="margin-top: 30px;border: 2px solid  #b49a5d;background-color: #413c37;color:#b49a5d;">
    <div class="row" >


      <div id="all-categories" class=" mr-b30" >
        <div class="container" style="background-color: #413c37;">
        <?php
          include "connect.php";
          $genres = getGenreAll();
          if($genres){
            $gencount = count($genres);
            $crntgen = 0;
            do{
              echo '<div class="row bgcl-SignalBlack gutter-x-none" style="margin-top:20px">';
              for($i = 0; $i<4;$i++){
                if($crntgen < $gencount){
                  echo '<div class="mr-l10 col-sm mr-b30 mr-t20" style="margin-left:10px;">';
                  echo '<div class="float-start mr-l20 mr-t10">';
                  echo '<div class="d-flex flex-column mx-wt200">';
                  for($j = 0; $j<3;$j++){
                    if($crntgen < $gencount){
                      echo '<a href="catalog.php?gen='.$genres[$crntgen]['id'].'"><font color="#b49a5d">'.$genres[$crntgen]['name'].'</font></a>';
                      $crntgen++;
                    }
                  }
                  echo '</div>';
                  echo '</div>';
                  echo '</div>';
                }
              }
              echo '</div>';
            }while($crntgen < $gencount);
          };
        ?>
          </div>
        </div>
      </div>
    </div>
  </div>
<!--фикс бага с футером-->
<br><br><br><br>
 <?php
include('footer.php')?>

</body>
</html>