<?php
  $d = mktime(13, 30, 0, 9, 10, 2012);  //計算括號內的時間距離1970年多少秒
  echo $d;                              //印出結果d
  echo "<br>";                          //強制換行
  echo date("Y-m-d H:i:s", $d);         //印出d的時間
?>
