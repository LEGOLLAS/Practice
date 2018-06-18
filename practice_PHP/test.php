<?
  $m = array("졸리지 않나요?", "일어나세요", "좋은 아침입니다.","퇴근할 시간이네요");
  if (date("G")>=18) {
    print $m[3];
  }elseif (date("G")>=9) {
    print $m[2];
  }elseif (date("G")>=6) {
    print $m[1];
  }else{
    print $m[0];
  }
?>
