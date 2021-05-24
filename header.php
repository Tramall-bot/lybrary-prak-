<head>
<link rel="icon" href="img/ELECTRONIC_LIBRARY.ico" type="image/x-icon">
  <title>ELECTRONIC LIBRARY</title>
   
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<style>

body{background:url(http://www.evasolar.ru/wp-content/uploads/2018/04/biblioteka.jpg);
color:#fff;
background-attachment:fixed;
background-repeat: no-repeat;
background-size:100% 100%;
}

TABLE {
    background: #000000; /* Цвет фона таблицы */
    color: yellow;  border:2px solid  #b49a5d;
   }
   TD {
    background: #000000; /* Цвет фона ячеек */
	border:2px solid #b49a5d;;
   }
   .carousel-inner .carousel-item.active,.carousel-inner .carousel-item-next,.carousel-inner .carousel-item-prev{display:flex}
.carousel-inner .carousel-item-right.active,.carousel-inner .carousel-item-next{transform:translateX(25%)}
.carousel-inner .carousel-item-left.active,.carousel-inner .carousel-item-prev{transform:translateX(-25%)}
.carousel-inner .carousel-item-right,.carousel-inner .carousel-item-left{transform:translateX(0)}
.hide_qt{
  display:none;
}
</style>
</head>
<body style="margin: 0px 40px 0px 40px">

<script src="logoutOnExit.js"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> 
<script src="bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
    <link rel="stylesheet" href="css/style.css">
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #413c37;  border: 2px solid  #b49a5d;" > 

<div class="container-fluid"> 
<img src="img/ELECTRONIC LIBRARY.png" width="70" height="70" style="border: 2px solid  #b49a5d;" class="d-inline-block align-top" alt="" loading="lazy"> 


</a> 

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> 
<span class="navbar-toggler-icon"></span> 
</button>
<h5 style="margin: 20px; border: 2px solid  #b49a5d; color:#b49a5d; text-shadow: 20px;">ЭЛЕКТРОННАЯ БИБЛИОТЕКА</h5> 
<div class="collapse navbar-collapse" id="navbarSupportedContent" > 

<ul class="navbar-nav mr-auto mb-2 mb-lg-0 w-100 justify-content-center" > 

<li class="nav-item" > 

<a class="nav-link active" aria-current="page" href="index.php"><font color="#b49a5d">Главная</font></a> 
</li> 
<li class="nav-item" > 
<a class="nav-link active" aria-current="page" href="catalog.php"><font color="#b49a5d">Каталог</font></a> 
</li> 
<li class="nav-item" > 
<a class="nav-link active" aria-current="page" href="us.php"><font color="#b49a5d">О нас</font></a> 
</li>  


<li class="nav-item" > 
<a class="nav-link active" aria-current="page" href="genres.php"><font color="#b49a5d">Жанры</font></a> 
</li>  
</a> 
<li class="nav-item" > 
<a class="nav-link active" aria-current="page" href="reviews.php"><font color="#b49a5d">Отзывы</font></a> 
</li>  
</a> 
<!-- Вкладка обраткой связи для админа-->
<?php
if($_SESSION['isAdmin'])
{
  echo '<li class="nav-item" > ';
  echo '<a class="nav-link active" aria-current="page" href="reviews.php"><font color="#b49a5d">Отзывы</font></a>';
  echo '</li> ';
}
?>


</ul>


 


<?php
  if(!empty($_SESSION)){
    echo '<a href="logout.php"><img src="img/account.png" width="50"> </a>';
  }else
  echo '<a href="login.php"><img src="img/account.png" width="50"> </a>';
?>

<a href=""><img src="img/favorites.png" width="50"> </a>
<form class="d-flex">
  
  
      <input class="form-control me-2" type="search" placeholder="Поиск" aria-label="Search">&#160;
      <button class="btn btn-outline-success" type="submit">Найти</button>
    </form>

</div> 
</div> 

</nav>