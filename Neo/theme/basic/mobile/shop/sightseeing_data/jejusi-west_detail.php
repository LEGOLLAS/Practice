<style media="screen">
  a{color: #000000; text-decoration: none;}
  .head{width: 100%; height: 100px; background-color: black; position: relative;}
  .datalist{ margin: 10 auto; width: 95%;}
  #ul{list-style: none; padding: 0;}
  #back{top:0; margin-left: 10px; position: absolute; width: 30px; height: 50px; z-index: 1; background-image: url('/Neo/theme/basic/img/mobile/back_icon.png'); background-repeat: no-repeat;background-size: 100% 100%;}
  #choose{width: 100%; height: 40px; margin-top: 15px; margin-bottom: 15px;}
  #choose li{border-top: 2px solid #e6e6e6; border-bottom: 2px solid #e6e6e6; width: 33%; height: 100%; line-height: 40px; text-align: center; float: left;}
  #choose li b{color: #FFAE39;}
</style>

<?php
include_once('./_common.php');

define("_INDEX_", TRUE);

include_once(G5_THEME_MSHOP_PATH.'/shop.head.php');
?>

<?php
$conn = new mysqli("localhost", "jejunulab", "jejunu!!", "jejunulab");
if($conn->connect_errno){
  print("Connection Error:".$conn->connect_errno);
}else {
  $response = $conn->query("select * from `Jejusi west` where name=\"".$_GET["name"]."\"");
  if($response){
    while($row = $response->fetch_assoc()){
      ?>

      <ul id="ul">
          <li class="datalist">
            <span style="font-size:20px;"><?php echo $row["name"]?></span>
            <p style="font-size:11px"><?php echo $row["number"]?></p>
            <p style="font-size:11px"><?php echo $row["worktime"]?></p>
            <p style="font-size:11px"><?php echo $row["price"]?></p>
            <ul id="choose">
              <li><img src="/Neo/theme/basic/img/mobile/heart.jpg" alt="" width="12px" height="12px">&emsp;<b>좋아요</b></li>
              <li style="border-left: 2px solid #e6e6e6; border-right: 2px solid #e6e6e6;"><img src="/Neo/theme/basic/img/mobile/location.jpg" alt="" width="12px" height="12px">&emsp;<b>지도보기</b></li>
              <li><img src="/Neo/theme/basic/img/mobile/calendar.jpg" alt="" width="12px" height="12px">&emsp;<b>일정에 넣기</b></li>
            </ul>
            <p style="font-size:11px; margin:13px;"><?php echo $row["explanation"]?></p>
            <img src="/Neo/theme/basic/img/mobile/location.jpg" alt="" width="12px" height="12px">&nbsp;<b style="color: #FFAE39;">지도보기</b>
            <!--지도 API-->
            <div id="map" style="width:95%; height:250px; margin:13px;"></div>
            <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=583837e2f84a7b2288be3082138b1949"></script>
            <script>
            var mapContainer = document.getElementById('map'), // 지도를 표시할 div
                mapOption = {
                    center: new daum.maps.LatLng(<?php echo $row["Lat"]?>, <?php echo $row["Lon"]?>), // 지도의 중심좌표
                    level: 3 // 지도의 확대 레벨
                };

            var map = new daum.maps.Map(mapContainer, mapOption); // 지도를 생성합니다

            // 마커가 표시될 위치입니다
            var markerPosition  = new daum.maps.LatLng(<?php echo $row["Lat"]?>, <?php echo $row["Lon"]?>);

            // 마커를 생성합니다
            var marker = new daum.maps.Marker({
                position: markerPosition
            });
            // 마커가 지도 위에 표시되도록 설정합니다
            marker.setMap(map);

            // 아래 코드는 지도 위의 마커를 제거하는 코드입니다
            // marker.setMap(null);
            </script>
            <p style="font-size:12px">&emsp;
              <img src="/Neo/theme/basic/img/mobile/location.jpg" alt="" width="12px" height="12px">&nbsp;<?php echo $row["address"]?>&emsp;
              <a href="#"><img src="/Neo/theme/basic/img/mobile/detailsee.jpg" alt="" width="70px" height="17px"></a>
            </p>
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
