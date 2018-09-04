<style>
  a{color: #000000; text-decoration: none;}
  .head{width: 100%; height: 100px; background-color: black; position: relative;}
  .datalist{border: 3px solid #e6e6e6; margin: 10 auto; width: 95%; height: 120px;}
  .container{width: 100%; height: 220px; border: 0px; margin :0; padding-top: 10px; }
  .container div {width:100%; height: 100%; border-bottom: 3px solid #FFAE39;}
  .area{ width: 48%; height: 150px; float: left; border: 3px solid #e6e6e6;text-align: center;}
  .area-icon{width: 45%; height:50%; margin:10px auto; background-repeat:no-repeat; background-size:100% 100%;}
  .area2{width: auto; height: 100px;margin-top: 3px; margin-left: 10px; margin-right: 10px;}
  .area2 h3,h6{padding-top: 30px;}
  #ul{list-style: none; padding: 0;}
  #back{top:0; margin-left: 10px; position: absolute;; width: 30px; height: 50px; z-index: 1; background-image: url('/Neo/theme/basic/img/mobile/back_icon.png'); background-repeat: no-repeat;background-size: 100% 100%;}
  #title{ width:100%; height:30px; padding-top:10px; margin:0 auto;text-align: center;}
  .sub_title{width:25%; float: left; margin-left: 4%; margin-right: 4%; color: #FFAE39; border: 2px solid #FFAE39; border-radius: 10px;}
  #img-position{width: 50%; height: 100%; float: left;}
  #text-position{width: 45%; height: 100%; float: right; padding-top: 10px;}
  #choose{width: 100%; height: 40px; margin-top: 15px; margin-bottom: 15px;}
  #choose li{border-top: 2px solid #e6e6e6; border-bottom: 2px solid #e6e6e6; width: 33%; height: 100%; line-height: 40px; text-align: center; float: left;}
  #choose li b{color: #FFAE39;}
  #imgs{max-width: 100%; overflow: hidden; position: relative;}
</style>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
?>

<header id="hd">
    <?php if(defined('_INDEX_')) { // index에서만 실행
        include G5_MOBILE_PATH.'/newwin.inc.php'; // 팝업레이어
    } ?>

    <div id="hd_wr" style="width:100%; line-height: 30px; height:50px; background-color: white; text-align: center;">
      <a href="/Neo/theme/basic/mobile/shop/index.php"><span style="font-size: 20px; color:#FFAE39"><b>neo internet</b></span></a>
    </div>
    <?php include_once(G5_THEME_MSHOP_PATH.'/category.php'); // 분류 ?>

    <script>
    $( document ).ready( function() {
        var jbOffset = $( '#hd_wr' ).offset();
        $( window ).scroll( function() {
            if ( $( document ).scrollTop() > jbOffset.top ) {
                $( '#hd_wr' ).addClass( 'fixed' );
            }
            else {
                $( '#hd_wr' ).removeClass( 'fixed' );
            }
        });
    });

    $("#btn_hdcate").on("click", function() {
        $("#category").show();
    });

    $(".menu_close").on("click", function() {
        $(".menu").hide();
    });
     $(".cate_bg").on("click", function() {
        $(".menu").hide();
    });
   </script>
</header>

<div id="container">
    <?php if ((!$bo_table || $w == 's' ) && !defined('_INDEX_')) { ?><h1 id="container_title"><?php echo $g5['title'] ?></h1><?php } ?>
