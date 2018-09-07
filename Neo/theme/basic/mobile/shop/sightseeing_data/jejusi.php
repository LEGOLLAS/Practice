
<?php

$IMG_URL = "/Neo/theme/basic/img/mobile/data-img/sightseeing/jejusi/";

include_once('./_common.php');

define("_INDEX_", TRUE);

include_once(G5_THEME_MSHOP_PATH.'/shop.head.php');
?>

<div id="td" style="width:100%;">
  <div id="title">
    <div class="sub_title">
      <b>제주시</b>
    </div>
    <div class="sub_title">
      <b>관광</b>
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
  $response = $conn->query("select * from `Jejusi`");
  if($response){
    while($row = $response->fetch_assoc()){

      $imgData = explode(",", $row["image-folder"]);
      ?>

      <ul id="ul">
        <a href="/Neo/theme/basic/mobile/shop/sightseeing_data/jejusi_detail.php?name=<?php echo $row["name"]?>&address=<?php echo $row["address"]?>number=<?php echo $row["number"]?>&working time=<?php echo $row["working time"]?>&explanation=<?php echo $row["explanation"]?>&price=<?php echo $row["price"]?>&Lat=<?php echo $row["Lat"]?>&Lon=<?php echo $row["Lon"]?>">
          <li id="datalist2">
            <div class="img-positon2" style="background-image: url('<? echo $IMG_URL.$row["folder-name"].'/'.$imgData[0] ?>'); background-size: 100% 100%"></div>
            <div class="text-positon2">
              <span style="font-size:15px;"><?php echo $row["name"]?></span><br><br>
              <span style="font-size:11px"><?php echo $row["address"]?></span><br><br>
              <span style="font-size:10px;"><?php echo $row["explanation"]?></span>
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
