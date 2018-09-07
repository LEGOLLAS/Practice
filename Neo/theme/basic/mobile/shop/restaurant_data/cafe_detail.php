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
          <li class="teduri">
            <style>
                ul{
                  list-style: none outside none;
                  padding-left: 0;
                  margin: 0;
                }
                .demo .item{
                  margin-bottom: 10px;
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
                  width: 100%;
                }
            </style>

            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
            <script src="/Neo/theme/basic/js/lightslider.js"></script>
            <link rel="stylesheet" href="/Neo/theme/basic/css/lightslider.css">
            <script>
               $(document).ready(function() {
              $("#content-slider").lightSlider({
                        loop:true,
                        keyPress:true
                    });
                    $('#image-gallery').lightSlider({
                        gallery:true,
                        item:1,
                        thumbItem:9,
                        slideMargin: 0,
                        speed:500,
                        auto:true,
                        loop:true,
                        onSliderLoad: function() {
                            $('#image-gallery').removeClass('cS-hidden');
                        }
                    });
            });
            </script>

            <div class="demo">
                    <div class="item">
                        <div class="clearfix" style="width:100%">
                            <ul id="image-gallery" class="gallery list-unstyled cS-hidden" style="width:100%; height:300px;">
                                <?php
                                  for ($i=0; $i < count($imgData); $i++) {
                                    ?>
                                    <li data-thumb="<? echo $IMG_URL.$row["folder-name"].'/'.$imgData[$i] ?>">
                                        <script type="text/javascript">
                                            function resizeImg2(osrc)
                                            {
                                                var bdiv =document.createElement('DIV');
                                                document.body.appendChild(bdiv);
                                                bdiv.setAttribute("id", "bdiv");
                                                bdiv.style.position = 'absolute';
                                                bdiv.style.top = 0;
                                                bdiv.style.left = 0;
                                                bdiv.style.zIndex = 0;
                                                bdiv.style.width = document.body.scrollWidth;
                                                bdiv.style.height = document.body.scrollHeight;
                                                bdiv.style.background = 'gray';
                                                bdiv.style.opacity = '0.5';
                                                var odiv = document.createElement('DIV');
                                                document.body.appendChild(odiv);
                                                odiv.style.zIndex = 1;
                                                odiv.setAttribute("id", "odiv");
                                                odiv.innerHTML = "<a href='javascript:void(closeImg())'><img id='oimg' src='"+osrc+"' border='0' width='100%' height='600px'/></a>";
                                                var img = document.all['oimg'];
                                                var owidth = (document.body.clientWidth)/2 - (img.width)/2;
                                                var oheight = (document.body.clientHeight)/2 - (img.height)/2;
                                                odiv.style.position = 'absolute';
                                                odiv.style.top = oheight + document.body.scrollTop;
                                                odiv.style.left = owidth;
                                                scrollImg();
                                            }
                                            function scrollImg()
                                            {
                                                var odiv = document.all['odiv'];
                                                var img = document.all['oimg'];
                                                var oheight = (document.body.clientHeight)/2 - (img.height)/2 + document.body.scrollTop;
                                                odiv.style.top = oheight;
                                                settime = setTimeout(scrollImg, 100);
                                            }
                                            function closeImg()
                                            {
                                                document.body.removeChild(odiv);
                                                document.body.removeChild(bdiv);
                                                clearTimeout(settime);
                                            }
                                        </script>
                                        <img src="<? echo $IMG_URL.$row["folder-name"].'/'.$imgData[$i] ?>" width="100%" height="100%" onclick="resizeImg2(this.src)"/>
                                    </li>
                                    <?php
                                  }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            <span style="font-size:20px;"><?php echo $row["name"]?></span>
            <p style="font-size:11px"><?php echo $row["PhoneNumber"]?></p>
            <p style="font-size:11px"><?php echo $row["worktime"]?></p>
            <p style="font-size:11px;"><?php echo $row["explanation"]?></p>
            <ul id="choose">
              <li><img src="/Neo/theme/basic/img/mobile/heart.jpg" alt="" width="15px" height="15px" >&nbsp;<b>좋아요</b></li>
              <li style="border-left: 2px solid #e6e6e6; border-right: 2px solid #e6e6e6;"><img src="/Neo/theme/basic/img/mobile/location.jpg" alt="" width="15px" height="15px">&nbsp;<b>지도보기</b></li>
              <li><img src="/Neo/theme/basic/img/mobile/calendar.jpg" alt="" width="15px" height="15px">&nbsp;<b>일정에 넣기</b></li>
            </ul>
            <img src="/Neo/theme/basic/img/mobile/location.jpg" alt="" width="15px" height="15px">&nbsp;<b style="color: #FFAE39; font-size: 13px;">지도보기</b>
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
              <br>
              <br>
              <br>
            </p>
      </ul>
      <?
    }
  }else {
    print("failed\n");
    print("error:".$conn->error);
  }
}
?>
