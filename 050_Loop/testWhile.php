<?php
$iSum = 0;			//iSum的值設為0
$i = 1;				//i的值設為1
while ($i <= 10)	//i如果 <=10繼續迴圈
{
	$iSum += $i;	//iSum等於iSum+i
	$i += 1;		//i等於+1
}
echo $iSum;			//印出iSum的值

echo "<hr>";		//印出分隔線

$iSum = 0;			//iSum的值設為0
$i = 0;				//i的值設為1
while ($i < 10)		//i如果 <10繼續迴圈
{
	$i++;			//i等於+1
	$iSum += $i;	//iSum等於iSum+i	
}
echo $iSum			//印出iSum的值
?>