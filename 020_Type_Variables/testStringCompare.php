<?php

$x = "ABC";				//x的值為ABC
$y = "AB";				//y的值為AB
if ($x >= $y)			//判斷x是否>=y，ABC大於AB因此印出ABC >= AB	
	echo "$x >= $y";	//如果是，印出x >= y
else
	echo "$x < $y";		//如果否，印出x < y

echo "<hr>";


$x = "ABC";				//x的值為ABC
$y = "BA";				//y的值為BA
if ($x >= $y)			//判斷x是否>=y，BA大於ABC因此印出ABC < BA
	echo "$x >= $y";	//如果是，印出x >= y
else
	echo "$x < $y";		//如果否，印出x < y

echo "<hr>";


$x = "123";				//x的值為123
$y = "12";				//y的值為12
if ($x >= $y)			//判斷x是否>=y，123大於12因此印出123 >= 12
	echo "$x >= $y";	//如果是，印出x >= y
else
	echo "$x < $y";		//如果否，印出x < y

echo "<hr>";			//印出分隔線

$x = "123";				//x的值為123
$y = "21";				//y的值為21
if ($x >= $y)			//判斷x是否>=y，123大於21因此印出123 >= 21
	echo "$x >= $y";	//如果是，印出x >= y
else
	echo "$x < $y";		//如果否，印出x < y

echo "<hr>";			//印出分隔線
		
		
?>