<?php

$a = 12;            //a的值為12(數字)
$b = "34";          //b的值為34(字串)

$result = $a + $b; // 46(+為數字相加，所以把34轉成數字34相加，結果為46)
// $result = $a . $b; // 1234(.為字串相加，所以把12轉成字串12，結果為1234)
// $result = $a + intval($b);  // 46

echo $result;

?>