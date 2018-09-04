<style media="screen">
    a{color: #000000; text-decoration: none;}
    .head{width: 100%; height: 100px; background-color: black; position: relative;}
    .datalist{border: 3px solid #e6e6e6; margin: 10 auto; width: 95%; height: 120px;}
    #ul{list-style: none; padding: 0;}
    #back{top:0; margin-left: 10px; position: absolute;; width: 30px; height: 50px; z-index: 1; background-image: url('/Neo/theme/basic/img/mobile/back_icon.png'); background-repeat: no-repeat;background-size: 100% 100%;}
    #title{ width:100%; height:30px; padding-top:10px; margin:0 auto;text-align: center;}
    .sub_title{width:25%; float: left; margin-left: 4%; margin-right: 4%; color: #FFAE39; border: 2px solid #FFAE39; border-radius: 10px;}
    #img-position{width: 50%; height: 100%; float: left;}
    #text-position{width: 45%; height: 100%; float: right; padding-top: 10px;}
</style>

<?php

$IMG_URL = "/Neo/theme/basic/img/mobile/data-img/food/chinese/";

include_once('./_common.php');

define("_INDEX_", TRUE);

include_once(G5_THEME_MSHOP_PATH.'/shop.head.php');
?>

<div id="td" style="width:100%;">
  <div id="title">
    <div class="sub_title">
      <b>중식</b>
    </div>
    <div class="sub_title">
      <b>맛집</b>
    </div>
    <div class="sub_title">
      <b>거리별</b>
    </div>
  </div>
</div>

<?php
$conn = new mysqli("localhost", "jejunulab", "jejunu!!", "jejunulab");
if($conn->connect_errno){
  print("Connection Error:".$conn->connect_errno);
}else {
  $response = $conn->query("select * from `chinesefood`");
  if($response){
    while($row = $response->fetch_assoc()){
      ?>
      <ul id="ul">
        <a href="/Neo/theme/basic/mobile/shop/restaurant_data/chinese_detail.php?name=<?php echo $row["name"]?>&address=<?php echo $row["address"]?>&PhoneNumber=<?php echo $row["PhoneNumber"]?>&worktime=<?php echo $row["worktime"]?>&Lat=<?php echo $row["Lat"]?>&Lon=<?php echo $row["Lon"]?>">
          <li class="datalist">
            <div id="img-positon">
              <img src="<? echo $IMG_URL.$row["forder-name"].'/'.$imgData[0] ?>" style="width:50%; height:100%; float:left;" >
            </div>
            <div id="text-position">
              <span><?php echo $row["name"]?></span><br><br>
              <span style="font-size:10px"><?php echo $row["address"]?></span><br><br>
              <span style="font-size:11px"><?php echo $row["PhoneNumber"]?></span>
            </div>
          </li>
        </a>
      </ul>
      <?
    }
  }else {
    print("failed\n");
    print("error:".$conn->error);
  }
}
?>
