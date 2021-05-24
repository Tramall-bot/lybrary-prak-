<?php
  session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
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
   /*.carousel-inner .carousel-item.active,.carousel-inner .carousel-item-next,.carousel-inner .carousel-item-prev{display:flex}
.carousel-inner .carousel-item-right.active,.carousel-inner .carousel-item-next{transform:translateX(25%)}
.carousel-inner .carousel-item-left.active,.carousel-inner .carousel-item-prev{transform:translateX(-25%)}
.carousel-inner .carousel-item-right,.carousel-inner .carousel-item-left{transform:translateX(0)}
*/
.hide_qt{
  display:none;
}
@media screen and (min-width: 911px) {
  .ant-carousel {
    max-width: 810px;
  }
}

@media screen and (min-width: 641px) and (max-width: 910px) {
  .ant-carousel {
    max-width: 540px;
  }
}

@media screen and (max-width: 640px) {
  .ant-carousel {
    max-width: 270px;
  }
}

.ant-carousel {
  margin: 50px auto 110px;
  padding-top: 10px;
  border: 1px solid #ccd;
  background-color: white;
}

.ant-carousel-element {
  width: 270px;
  text-align: center;
}

/* General styles */
.ant-carousel {
  width: auto;
  position: relative;
}

.ant-carousel-hider {
  overflow: hidden;
}

.ant-carousel-list {
  width: auto;
  margin: 0;
  padding: 0;
  list-style-type: none;
  display: flex;
  justify-content: flex-start;
}

.ant-carousel-element {
  display: block;
  flex: 0 0 auto;
}

/* Navigation item styles */
div.ant-carousel-arrow-left,
div.ant-carousel-arrow-right {
  width: 22px;
  height: 40px;
  background-color: white;
  position: absolute;
  cursor: pointer;
  opacity: 0.6;
  z-index: 32;
}

div.ant-carousel-arrow-left {
  left: -40px;
  top: 40%;
  display: block;
 /* Картика по светлее нужна 
 background: url("http://pvbk.spb.ru/inc/carousel/ant-files/ant-arrow-left.png") no-repeat;*/
}

div.ant-carousel-arrow-right {
  right: -40px;
  top: 40%;
  display: block;
  background: url("http://pvbk.spb.ru/inc/carousel/ant-files/ant-arrow-right.png") no-repeat;
}

div.ant-carousel-arrow-left:hover {
  opacity: 1.0;
}

div.ant-carousel-arrow-right:hover {
  opacity: 1.0;
}

div.ant-carousel-dots {
  width: 100%;
  height: auto;
  position: absolute;
  left: 0;
  bottom: -30px;
  z-index: 30;
  text-align: center;
}

span.ant-dot {
  width: 10px;
  height: 10px;
  margin: 5px 7px;
  padding: 0;
  display: inline-block;
  background-color: #BBB;
  border-radius: 5px;
  cursor: pointer;
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

<nav class="navbar navbar-expand-lg navbar-dark navbar-fixed-top" style="background-color: #413c37; width: 32%; color:#b49a5d; float: none;
text-align: center; margin-left:35%; border: 2px solid  #b49a5d; border-top: none;" >
<div style="margin-left:12%;"class="navbar-nav" ><blockquote class="blockquote" style="font-size:35px; margin:0px; text-align: center;">
  ГЛАВНАЯ СТРАНИЦА
  
</blockquote>
</div>
</nav>
<!--
<nav class="navbar navbar-expand-lg navbar-dark navbar-nav ml-auto" style="background-color: #413c37; width: 22%; color:#b49a5d;" >
<div style="font:right;"class="navbar-nav ml-auto" ><blockquote class="blockquote" style="font-size:13px; margin:0px; text-align: right;">
  Без книги – в мире ночь, без книги мрак кругом.
  <footer class="blockquote-footer"> В. Гюго</footer>
</blockquote>
</div>
</nav>-->
</div>


<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
  <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
</svg>

<!--Цитаты-->
<nav class="navbar navbar-expand-lg navbar-dark navbar-fixed-top" style="background-color: #413c37;margin:20px; width: 1150px; color:#b49a5d; float: none; height: 200px;
text-align: center; margin-left:5%; border: 2px solid  #b49a5d; " >
<div style="margin-left:15%;"class="navbar-nav" ><blockquote class="blockquote" style="font-size:20px; margin:0px; text-align: center;">
  <?php
  include "connect.php";
  $quotes = getQuotesAll();
  if($quotes){
    $length = count($quotes);
    $count = 0;
    echo "<p class='quote'>".$quotes[$count]['quote']."</p>";
    $count++;
    for($count; $count<$length;$count++){
      echo "<p class='hide_qt quote'>".$quotes[$count]['quote']."</p>";
    }
  }
  ?>
</blockquote>
</div><br>
<div style="margin-left:15%;"class="navbar-nav" ><blockquote class="blockquote" style="font-size:20px; margin-top:90%; text-align: center;"><i>
  <?php
  if($quotes){
    $count = 0;
    echo "<p class='quote'>".$quotes[$count]['author']."</p>";
    $count++;
    for($count; $count<$length;$count++){
      echo "<p class='hide_qt quote'>".$quotes[$count]['author']."</p>";
    }
  }
  ?>
  </i>
</blockquote>
</div>
</nav>
<script>
  const quotes = document.getElementsByClassName("quote");
  let i = 1;
  let op = 1;
      function fadeout(callback) {
        var inter = setInterval(() => {
          if (op > 0) {
            quotes[i - 1].style.opacity = op.toString();
            quotes[quotes.length / 2 + i - 1].style.opacity = op.toString();
            op -= 0.1;
          } else {
            if (op <= 0) {
              clearInterval(inter);
              callback();
            }
          }
        }, 150);
      }

      function fadein(callback) {
        var inter = setInterval(() => {
          if (op < 1) {
            quotes[i].style.opacity = op.toString();
            quotes[quotes.length / 2 + i].style.opacity = op.toString();
            op += 0.1;
          } else {
            if (op >= 0) {
              clearInterval(inter);
              callback();
            }
          }
        }, 150);
      }
      timer();
      function timer() {
        setTimeout(testcal, 3000);
      }
      function testcal() {
        change_quote(() => {
          timer();
        });
      }
      function change_quote(callback) {
        op = 1;
        fadeout(() => {
          quotes[i - 1].classList.toggle("hide_qt");
          quotes[i - 1].style.opacity = "1";
          quotes[quotes.length / 2 + i - 1].classList.toggle("hide_qt");
          quotes[quotes.length / 2 + i - 1].style.opacity = "1";
          if (i == quotes.length / 2) i = 0;
          op = 0;
          quotes[i].style.opacity = 0;
          quotes[quotes.length / 2 + i].style.opacity = 0;
          quotes[i].classList.toggle("hide_qt");
          quotes[quotes.length / 2 + i].classList.toggle("hide_qt");
          fadein(() => {
            i++;
            callback();
          });
        });
      }
</script>

<!-- Карусель -->
<div class="ant-carousel">
  <div class="ant-carousel-hider">
    <ul class="ant-carousel-list">
      <?php
        $book = getBookAll();
        //echo "<p>".var_dump($book)."</p>";
        if($book)
        for($i = count($book)-1; $i> count($book)-7; $i--){
          echo '<li class="ant-carousel-element">';
          echo '<a href="#"><img src="'.$book[$i]['img'].'" alt="'.$i.'" style="heigth:250px;width:250px "><p>'.$book[$i]['title'].'</p></li></a>';
        }
      ?>
    </ul>
  </div>
  <div class="ant-carousel-arrow-left"></div>
  <div class="ant-carousel-arrow-right"></div>
  <div class="ant-carousel-dots"></div>
</div>

<script>
  function Ant(crslId) {

let id = document.getElementById(crslId);
if(id) {
  this.crslRoot = id
}
else {
  this.crslRoot = document.querySelector('.ant-carousel')
};

// Carousel objects
this.crslList = this.crslRoot.querySelector('.ant-carousel-list');
this.crslElements = this.crslList.querySelectorAll('.ant-carousel-element');
this.crslElemFirst = this.crslList.querySelector('.ant-carousel-element');
this.leftArrow = this.crslRoot.querySelector('div.ant-carousel-arrow-left');
this.rightArrow = this.crslRoot.querySelector('div.ant-carousel-arrow-right');
this.indicatorDots = this.crslRoot.querySelector('div.ant-carousel-dots');

// Initialization
this.options = Ant.defaults;
Ant.initialize(this)
};

Ant.defaults = {

// Default options for the carousel
elemVisible: 3, // Кол-во отображаемых элементов в карусели
loop: true,     // Бесконечное зацикливание карусели 
auto: true,     // Автоматическая прокрутка
interval: 5000, // Интервал между прокруткой элементов (мс)
speed: 750,     // Скорость анимации (мс)
touch: true,    // Прокрутка  прикосновением
arrows: true,   // Прокрутка стрелками
dots: true      // Индикаторные точки
};

Ant.prototype.elemPrev = function(num) {
num = num || 1;

if(this.options.dots) this.dotOn(this.currentElement);
this.currentElement -= num;
if(this.currentElement < 0) this.currentElement = this.dotsVisible-1;
if(this.options.dots) this.dotOff(this.currentElement);

if(!this.options.loop) {  // сдвиг вправо без цикла
  this.currentOffset += this.elemWidth*num;
  this.crslList.style.marginLeft = this.currentOffset + 'px';
  if(this.currentElement == 0) {
    this.leftArrow.style.display = 'none'; this.touchPrev = false
  }
  this.rightArrow.style.display = 'block'; this.touchNext = true
}
else {                    // сдвиг вправо с циклом
  let elm, buf, this$ = this;
  for(let i=0; i<num; i++) {
    elm = this.crslList.lastElementChild;
    buf = elm.cloneNode(true);
    this.crslList.insertBefore(buf, this.crslList.firstElementChild);
    this.crslList.removeChild(elm)
  };
  this.crslList.style.marginLeft = '-' + this.elemWidth*num + 'px';
  let compStyle = window.getComputedStyle(this.crslList).marginLeft;
  this.crslList.style.cssText = 'transition:margin '+this.options.speed+'ms ease;';
  this.crslList.style.marginLeft = '0px';
  setTimeout(function() {
    this$.crslList.style.cssText = 'transition:none;'
  }, this.options.speed)
}
};

Ant.prototype.elemNext = function(num) {
num = num || 1;

if(this.options.dots) this.dotOn(this.currentElement);
this.currentElement += num;
if(this.currentElement >= this.dotsVisible) this.currentElement = 0;
if(this.options.dots) this.dotOff(this.currentElement);

if(!this.options.loop) {  // сдвиг влево без цикла
  this.currentOffset -= this.elemWidth*num;
  this.crslList.style.marginLeft = this.currentOffset + 'px';
  if(this.currentElement == this.dotsVisible-1) {
    this.rightArrow.style.display = 'none'; this.touchNext = false
  }
  this.leftArrow.style.display = 'block'; this.touchPrev = true
}
else {                    // сдвиг влево с циклом
  let elm, buf, this$ = this;
  this.crslList.style.cssText = 'transition:margin '+this.options.speed+'ms ease;';
  this.crslList.style.marginLeft = '-' + this.elemWidth*num + 'px';
  setTimeout(function() {
    this$.crslList.style.cssText = 'transition:none;';
    for(let i=0; i<num; i++) {
      elm = this$.crslList.firstElementChild;
      buf = elm.cloneNode(true); this$.crslList.appendChild(buf);
      this$.crslList.removeChild(elm)
    };
    this$.crslList.style.marginLeft = '0px'
  }, this.options.speed)
}
};

Ant.prototype.dotOn = function(num) {
this.indicatorDotsAll[num].style.cssText = 'background-color:#BBB; cursor:pointer;'
};

Ant.prototype.dotOff = function(num) {
this.indicatorDotsAll[num].style.cssText = 'background-color:#556; cursor:default;'
};

Ant.initialize = function(that) {

// Constants
that.elemCount = that.crslElements.length; // Количество элементов
that.dotsVisible = that.elemCount;         // Число видимых точек
let elemStyle = window.getComputedStyle(that.crslElemFirst);
that.elemWidth = that.crslElemFirst.offsetWidth +  // Ширина элемента (без margin)
  parseInt(elemStyle.marginLeft) + parseInt(elemStyle.marginRight);

// Variables
that.currentElement = 0; that.currentOffset = 0;
that.touchPrev = true; that.touchNext = true;
let xTouch, yTouch, xDiff, yDiff, stTime, mvTime;
let bgTime = getTime();

// Functions
function getTime() {
  return new Date().getTime();
};
function setAutoScroll() {
  that.autoScroll = setInterval(function() {
    let fnTime = getTime();
    if(fnTime - bgTime + 10 > that.options.interval) {
      bgTime = fnTime; that.elemNext()
    }
  }, that.options.interval)
};

// Start initialization
if(that.elemCount <= that.options.elemVisible) {   // Отключить навигацию
  that.options.auto = false; that.options.touch = false;
  that.options.arrows = false; that.options.dots = false;
  that.leftArrow.style.display = 'none'; that.rightArrow.style.display = 'none'
};

if(!that.options.loop) {       // если нет цикла - уточнить количество точек
  that.dotsVisible = that.elemCount - that.options.elemVisible + 1;
  that.leftArrow.style.display = 'none';  // отключить левую стрелку
  that.touchPrev = false;    // отключить прокрутку прикосновением вправо
  that.options.auto = false; // отключить автопркрутку
}
else if(that.options.auto) {   // инициализация автопрокруки
  setAutoScroll();
  // Остановка прокрутки при наведении мыши на элемент
  that.crslList.addEventListener('mouseenter', function() {
    clearInterval(that.autoScroll)
  }, false);
  that.crslList.addEventListener('mouseleave', setAutoScroll, false)
};

if(that.options.touch) {   // инициализация прокрутки прикосновением
  that.crslList.addEventListener('touchstart', function(e) {
    xTouch = parseInt(e.touches[0].clientX);
    yTouch = parseInt(e.touches[0].clientY);
    stTime = getTime()
  }, false);
  that.crslList.addEventListener('touchmove', function(e) {
    if(!xTouch || !yTouch) return;
    xDiff = xTouch - parseInt(e.touches[0].clientX);
    yDiff = yTouch - parseInt(e.touches[0].clientY);
    mvTime = getTime();
    if(Math.abs(xDiff) > 15 && Math.abs(xDiff) > Math.abs(yDiff) && mvTime - stTime < 75) {
      stTime = 0;
      if(that.touchNext && xDiff > 0) {
        bgTime = mvTime; that.elemNext()
      }
      else if(that.touchPrev && xDiff < 0) {
        bgTime = mvTime; that.elemPrev()
      }
    }
  }, false)
};

if(that.options.arrows) {  // инициализация стрелок
  if(!that.options.loop) that.crslList.style.cssText =
    'transition:margin '+that.options.speed+'ms ease;';
  that.leftArrow.addEventListener('click', function() {
    let fnTime = getTime();
    if(fnTime - bgTime > that.options.speed) {
      bgTime = fnTime; that.elemPrev()
    }
  }, false);
  that.rightArrow.addEventListener('click', function() {
    let fnTime = getTime();
    if(fnTime - bgTime > that.options.speed) {
      bgTime = fnTime; that.elemNext()
    }
  }, false)
}
else {
  that.leftArrow.style.display = 'none';
  that.rightArrow.style.display = 'none'
};

if(that.options.dots) {  // инициализация индикаторных точек
  let sum = '', diffNum;
  for(let i=0; i<that.dotsVisible; i++) {
    sum += '<span class="ant-dot"></span>'
  };
  that.indicatorDots.innerHTML = sum;
  that.indicatorDotsAll = that.crslRoot.querySelectorAll('span.ant-dot');
  // Назначаем точкам обработчик события 'click'
  for(let n=0; n<that.dotsVisible; n++) {
    that.indicatorDotsAll[n].addEventListener('click', function() {
      diffNum = Math.abs(n - that.currentElement);
      if(n < that.currentElement) {
        bgTime = getTime(); that.elemPrev(diffNum)
      }
      else if(n > that.currentElement) {
        bgTime = getTime(); that.elemNext(diffNum)
      }
      // Если n == that.currentElement ничего не делаем
    }, false)
  };
  that.dotOff(0);  // точка[0] выключена, остальные включены
  for(let i=1; i<that.dotsVisible; i++) {
    that.dotOn(i)
  }
}
};

new Ant();
</script>


 <footer class="footer" style="text-align: center;">
        <div class="row">
            <div class="col">
              <a href="https://www.instagram.com/"><img src="img/1.png" style="width: 100px; "></a>
              <a href="https://vk.com/"><img src="img/2.png" style="width: 100px;"></a>
              <a href="https://telegram.org/"><img src="img/3.png" style="width: 100px;"></a><br>
                <p>ELECTRONIC_LIBRARY.ru &copy;2021.  Все права защищены. 0+ </p >
            </div>
        </div>
    </footer>
</body>
</html>