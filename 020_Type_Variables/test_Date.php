<?php
  $x = getdate();                             //gettype會回傳型態，getdate()為array
  echo gettype($x), "<br>";
  
  $x = date('Y-m-d H:i:s');                   //gettype會回傳型態，date('Y-m-d H:i:s')為string
  echo $x, "<br>";
  echo gettype($x), "<br>";
  
  $x = gmdate('Y-m-d H:i:s');                 //格林威治時間格式                
  echo $x, "<br>";                            //印出格林威治時間
  
  $x = strtotime(gmdate('Y-m-d H:i:s'));      //gettype會回傳型態，strtotime(gmdate('Y-m-d H:i:s'))為integer
  echo $x, "<br>";
  echo gettype($x), "<br>";
  
?>