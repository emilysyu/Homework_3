<?php
  $d = strtotime("2012-09-10");            //計算括號內的時間距離1970年多少秒       
  // $d = strtotime("2012-09-10 -3 days");  //計算括號內的時間距離1970年多少秒
  // $d = strtotime("2012-09-10 +1 month"); //計算括號內的時間距離1970年多少秒
  echo $d;                                  //印出d
  echo "<br>";                              //強制換行
  echo date("Y-m-d", $d);                   //印出date("Y-m-d", $d)的結果
?>
