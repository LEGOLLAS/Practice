<?php
include_once('./_common.php');

define("_INDEX_", TRUE);

include_once(G5_THEME_MSHOP_PATH.'/shop.head.php');
?>

<div class="container" style="padding-left: 10px; padding-right: 10px;">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active" style="background-image: url('/Neo/theme/basic/img/mobile/slider-food1.PNG'); background-size: 100% 100%; background-repeat:no-repeat"></div>
      <div class="item" style="background-image: url('/Neo/theme/basic/img/mobile/slider-food2.PNG'); background-size: 100% 100%; background-repeat:no-repeat; "></div>
      <div class="item" style="background-image: url('/Neo/theme/basic/img/mobile/slider-food3.PNG'); background-size: 100% 100%; background-repeat:no-repeat; "></div>
      <div class="item" style="background-image: url('/Neo/theme/basic/img/mobile/slider-food4.PNG'); background-size: 100% 100%; background-repeat:no-repeat; "></div>
      <div class="item" style="background-image: url('/Neo/theme/basic/img/mobile/slider-food5.PNG'); background-size: 100% 100%; background-repeat:no-repeat; "></div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<a href="/Neo/theme/basic/mobile/shop/restaurant_data/korean.php">
  <div class="area" style="margin-left:8px;">
    <div class="area-icon" style="background-image:url('/Neo/theme/basic/img/mobile/korean.jpg');"></div>
      <h3 style="color:black; margin:0">한식</h3>
      <h6 style="color:#FFAE39; margin:0">(Korean Food)</h6>
  </div>
</a>

<a href="/Neo/theme/basic/mobile/shop/restaurant_data/japanese.php">
  <div class="area">
    <div class="area-icon" style="background-image:url('/Neo/theme/basic/img/mobile/japanese.jpg');"></div>
      <h3 style="color:black; margin:0;">일식</h3>
      <h6 style="color:#FFAE39; margin:0;">(Japanese Food)</h6>

  </div>
</a>

<a href="/Neo/theme/basic/mobile/shop/restaurant_data/western.php">
  <div class="area" style="margin-left:8px;">
    <div class="area-icon" style="background-image:url('/Neo/theme/basic/img/mobile/western.jpg');"></div>
      <h3 style="color:black; margin:0;">양식</h3>
      <h6 style="color:#FFAE39; margin:0;">(Western Food)</h6>
  </div>
</a>

<a href="/Neo/theme/basic/mobile/shop/restaurant_data/chinese.php">
  <div class="area">
    <div class="area-icon" style="background-image:url('/Neo/theme/basic/img/mobile/chinese.jpg');"></div>
      <h3 style="color:black; margin:0;">중식</h3>
      <h6 style="color:#FFAE39; margin:0;">(Chinese Food)</h6>
  </div>
</a>

<a href="/Neo/theme/basic/mobile/shop/restaurant_data/cafe.php">
  <div class="area" style="margin-left:8px;">
    <div class="area-icon" style="background-image:url('/Neo/theme/basic/img/mobile/cafe.jpg'); "></div>
      <h3 style="color:black; margin:0;">카페</h3>
      <h6 style="color:#FFAE39; margin:0;">(Cafe)</h6>
  </div>
</a>

<a href="/Neo/theme/basic/mobile/shop/restaurant_data/snackbar.php">
  <div class="area">
    <div class="area-icon" style="background-image:url('/Neo/theme/basic/img/mobile/snack.jpg'); "></div>
      <h3 style="color:black; margin:0;">분식</h3>
      <h6 style="color:#FFAE39; margin:0;">(Snack Bar)</h6>
  </div>
</a>
