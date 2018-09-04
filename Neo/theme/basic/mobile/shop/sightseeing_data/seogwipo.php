<style media="screen">
  a{color: #000000; text-decoration: none;}
  .head{width: 100%; height: 100px; background-color: black; position: relative;}
  .datalist{border: 3px solid #e6e6e6; margin: 10 auto; width: 95%;}
  #ul{list-style: none; padding: 0;}
  #back{top:0; margin-left: 10px; position: absolute; width: 30px; height: 50px; z-index: 1; background-image: url('/Neo/theme/basic/img/mobile/back_icon.png'); background-repeat: no-repeat;background-size: 100% 100%;}
  #title{ width:100%; height:30px; padding-top:10px; margin:0 auto;text-align: center;}
  .sub_title{width:25%; float: left; margin-left: 4%; margin-right: 4%; color: #FFAE39; border: 2px solid #FFAE39; border-radius: 10px;}
</style>

<?php
include_once('./_common.php');

define("_INDEX_", TRUE);

include_once(G5_THEME_MSHOP_PATH.'/shop.head.php');
?>

<div id="td" style="width:100%;">
  <div id="title">
    <div class="sub_title">
      <b>서귀포시</b>
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
  $response = $conn->query("select * from ` Seogwipo`");
  if($response){
    while($row = $response->fetch_assoc()){
      ?>
      <ul id="ul">
        <a href="/Neo/theme/basic/mobile/shop/sightseeing_data/seogwipo_detail.php?name=<?php echo $row["name"]?>&address=<?php echo $row["address"]?>number=<?php echo $row["number"]?>&working time=<?php echo $row["working time"]?>&explanation=<?php echo $row["explanation"]?>&price=<?php echo $row["price"]?>&Lat=<?php echo $row["Lat"]?>&Lon=<?php echo $row["Lon"]?>">
          <li class="datalist">
            <span><?php echo $row["name"]?></span>
            <p style="font-size:12px"><?php echo $row["address"]?></p>
            <p style="font-size:12px"><?php echo $row["number"]?></p>
            <p style="font-size:12px"><?php echo $row["worktime"]?></p>
            <p style="font-size:12px"><?php echo $row["explanation"]?></p>
            <p style="font-size:12px"><?php echo $row["price"]?></p>
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
