<?php
  $x = 123;                   //x為數字123
  echo gettype($x), "<br>";   //回傳integer
  
  $x = 123.0;                 //x為小數123
  echo gettype($x), "<br>";   //回傳double
  
  $x = "123.0";               //x為字串123
  echo gettype($x), "<br>";   //回傳string
  
  $x = TRUE;                  //x為TURE值
  echo gettype($x), "<br>";   //回傳boolean
  
?>
