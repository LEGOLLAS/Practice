<?
  print "당신의 IP 주소는 : ";
  print getenv("REMOTE_ADDR");
  print "<br />";
  print "당신의 호스트 이름은 : ";
  print gethostbyaddr(getenv("REMOTE_ADDR"));
  print "<br />";
  print "당신의 브라우저는 : ";
  print getenv("HTTP_USER_AGENT");
  print "<br>";
?>
<?
    for($i=1; $i<10; $i++){
      for($j=1; $j<10; $j++){
      print "*";
      }
    }
?>
<br>
<?
  $i =1;
  while($i <= 15){
    print "!";
    $i++;
  }
?>
<br>
<?
$i = 1;
  do {
    print "~~";
    $i++;
    // code...
  } while ($i <= 10);
?>
<?
  db_info.php;
?>
