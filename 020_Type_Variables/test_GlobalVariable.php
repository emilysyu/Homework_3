<?php
$a = 20;					//a的值為20
function myfunction($b) {	//myfunction加入b這個參數
	//print "a=$a<br>";
	$a = 30;				//a的值為30
	//print "a=$a<br>";
	global $a, $c;			//宣告a,c為全域變數
	//print "a=$a<br>";
	return $c = ($b + $a);	//回傳c
}
print myfunction(40) + $c;	//(20+40)+60=120
?>