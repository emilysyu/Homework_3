<?php
  $x = 3;                       //x的值為3                  
  if ($x >= 10 && foo())        //如果x的值沒有>=10，那就會直接跑else所以會印出no，且不會執行foo副函式
    echo "yes";
  else
    echo "no";
    
  echo "<hr>";

  $x = 3;
  if ($x >= 10 & foo())         //如果x的值沒有>=10，那就會直接跑else所以會印出no，但會執行foo副函式
    echo "yes";
  else
    echo "no";
    
function foo()                    //foo副函式
{
   echo "foo() is running.<br>";  //印出foo() is running.然後換行
}

?>