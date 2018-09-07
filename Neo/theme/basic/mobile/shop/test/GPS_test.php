<?php

  $IMG_URL = "/Neo/theme/basic/img/mobile/data-img/food/cafe/";

  include_once('./_common.php');

  define("_INDEX_", TRUE);

  include_once(G5_THEME_MSHOP_PATH.'/shop.head.php');

?>

<div id="td" style="width:100%;">
  <div id="title">
    <div class="sub_title">
      <b>카페</b>
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
  $response = $conn->query("select * from `cafe`");
  if($response){
    while($row = $response->fetch_assoc()){

      $imgData = explode(",", $row["image-folder"]);
      ?>

      <ul id="ul">
        <a href="#">
          <li class="datalist">
            <div class="img-positon">
              <img src="<? echo $IMG_URL.$row["folder-name"].'/'.$imgData[0] ?>" style="width:50%; height:100%; float:left;" >
            </div>
            <div class="text-position">
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
