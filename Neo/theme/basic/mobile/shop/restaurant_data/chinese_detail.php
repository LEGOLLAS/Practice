<?php
  include_once('./_common.php');

  define("_INDEX_", TRUE);

  include_once(G5_THEME_MSHOP_PATH.'/shop.head.php');
?>

<a href="/Neo/theme/basic/mobile/shop/restaurant_data/chinese.php"><div id="back"></div></a>

<?php
$conn = new mysqli("localhost", "jejunulab", "jejunu!!", "jejunulab");
if($conn->connect_errno){
  print("Connection Error:".$conn->connect_errno);
}else {
  $response = $conn->query("select * from `chinesefood` where name=\"".$_GET["name"]."\"");
  if($response){
    while($row = $response->fetch_assoc()){
      ?>

      <ul id="ul">
          <li class="datalist">
            <span style="font-size:20px;"><?php echo $row["name"]?></span>
            <p style="font-size:11px"><?php echo $row["PhoneNumber"]?></p>
            <p style="font-size:11px"><?php echo $row["worktime"]?></p>
            <ul id="choose">
              <li><img src="/Neo/theme/basic/img/mobile/heart.jpg" alt="" width="12px" height="12px">&emsp;<b>좋아요</b></li>
              <li style="border-left: 2px solid #e6e6e6; border-right: 2px solid #e6e6e6;"><img src="/Neo/theme/basic/img/mobile/location.jpg" alt="" width="12px" height="12px">&emsp;<b>지도보기</b></li>
              <li><img src="/Neo/theme/basic/img/mobile/calendar.jpg" alt="" width="12px" height="12px">&emsp;<b>일정에 넣기</b></li>
            </ul>
            <p style="font-size:11px; margin:13px;"><?php echo $row["explanation"]?></p>
            <img src="/Neo/theme/basic/img/mobile/location.jpg" alt="" width="12px" height="12px">&nbsp;<b style="color: #FFAE39;">지도보기</b>
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
