<?php

  $IMG_URL = "/Neo/theme/basic/img/mobile/data-img/food/cafe/";

  include_once('./_common.php');

  define("_INDEX_", TRUE);

  include_once(G5_THEME_MSHOP_PATH.'/shop.head.php');

?>
<?php
$conn = new mysqli("localhost", "jejunulab", "jejunu!!", "jejunulab");
if($conn->connect_errno){
  print("Connection Error:".$conn->connect_errno);
}else {
  $response = $conn->query("select * from `cafe` where name=\"".$_GET["name"]."\"");
  if($response){
    while($row = $response->fetch_assoc()){
      $imgData = explode(",", $row["image-folder"]);
      ?>

      <ul id="ul">
          <li class="datalist" style="overflow:hidden;">
              <?php
                for ($i=0; $i < count($imgData); $i++) {
                  ?>
                  <a href="#"><img src="<? echo $IMG_URL.$row["forder-name"].'/'.$imgData[$i] ?>" style="width:100%; height:100%; float:left;"></a>
                  <?php
                }
              ?>
          </li>
      </ul>
      <?
    }
  }else {
    print("failed\n");
    print("error:".$conn->error);
  }
}
?>

<style>
    ul{
      list-style: none outside none;
      padding-left: 0;
      margin: 0;
    }
    .demo .item{
      margin-bottom: 60px;
    }
    .content-slider li{
      background-color: #ed3020;
      text-align: center;
      color: #FFF;
    }
    .content-slider h3 {
      margin: 0;
      padding: 70px 0;
    }
    .demo{
      width: 800px;
    }
</style>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="/Neo/theme/basic/js/lightslider.js"></script>
<link rel="stylesheet" href="/Neo/theme/basic/css/lightslider.css">

<div class="demo">
        <div class="item">
            <div class="clearfix" style="max-width:474px;">
                <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                    <?php
                      for ($i=0; $i < count($imgData); $i++) {
                        ?>
                        <li data-thumb="<? echo $IMG_URL.$row["forder-name"].'/c5/'.$imgData[$i] ?>">
                            <img src="<? echo $IMG_URL.$row["forder-name"].'/c5/'.$imgData[$i] ?>" />
                        </li>
                        <?php
                      }
                    ?>
<!--
                    <li data-thumb="/Neo/theme/basic/img/image/thumb/cS-2.jpg">
                        <img src="/Neo/theme/basic/img/image/cS-2.jpg" />
                         </li>
                    <li data-thumb="/Neo/theme/basic/img/image/thumb/cS-3.jpg">
                        <img src="/Neo/theme/basic/img/image/cS-3.jpg" />
                         </li>
                    <li data-thumb="/Neo/theme/basic/img/image/thumb/cS-4.jpg">
                        <img src="/Neo/theme/basic/img/image/cS-4.jpg" />
                         </li>
                    <li data-thumb="/Neo/theme/basic/img/image/thumb/cS-5.jpg">
                        <img src="/Neo/theme/basic/img/image/cS-5.jpg" />
                         </li>
                    <li data-thumb="/Neo/theme/basic/img/image/thumb/cS-6.jpg">
                        <img src="/Neo/theme/basic/img/image/cS-6.jpg" />
                         </li>
                    <li data-thumb="/Neo/theme/basic/img/image/thumb/cS-7.jpg">
                        <img src="/Neo/theme/basic/img/image/cS-7.jpg" />
                         </li>
                    <li data-thumb="/Neo/theme/basic/img/image/thumb/cS-8.jpg">
                        <img src="/Neo/theme/basic/img/image/cS-8.jpg" />
                         </li>
                    <li data-thumb="/Neo/theme/basic/img/image/thumb/cS-9.jpg">
                        <img src="/Neo/theme/basic/img/image/cS-9.jpg" />
                         </li>
                    <li data-thumb="/Neo/theme/basic/img/image/thumb/cS-10.jpg">
                        <img src="/Neo/theme/basic/img/image/cS-10.jpg" />
                         </li>
                    <li data-thumb="/Neo/theme/basic/img/image/thumb/cS-11.jpg">
                        <img src="/Neo/theme/basic/img/image/cS-11.jpg" />
                         </li>
                    <li data-thumb="/Neo/theme/basic/img/image/thumb/cS-12.jpg">
                        <img src="/Neo/theme/basic/img/image/cS-12.jpg" />
                         </li>
                    <li data-thumb="/Neo/theme/basic/img/image/thumb/cS-13.jpg">
                        <img src="/Neo/theme/basic/img/image/cS-13.jpg" />
                         </li>
                    <li data-thumb="/Neo/theme/basic/img/image/thumb/cS-14.jpg">
                        <img src="/Neo/theme/basic/img/image/cS-14.jpg" />
                         </li>
                    <li data-thumb="/Neo/theme/basic/img/image/thumb/cS-15.jpg">
                        <img src="/Neo/theme/basic/img/image/cS-15.jpg" />
                         </li>
                       -->
                </ul>
            </div>
        </div>
    </div>
