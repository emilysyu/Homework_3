<?php
  $x = 1;               //x內容等於1
  $y = $x++;            //x的值存到y 再把x加1
  echo "x = $x, y = $y";//印出x跟y的值
  
  echo "<br>";          //強制換行

  $x = 1;               //x內容等於1
  $y = ++$x;            //x先加1 再把x+1的值存到y
  echo "x = $x, y = $y";//印出x跟y的值
?>
