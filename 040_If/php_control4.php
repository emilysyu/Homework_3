<?php
	header("content-type: text/html; charset=utf-8");
	$num = 3;			//num的值為3
	switch ($num){		//num的值為多少就切換到對應的case
		case 0:			//若值為0 印出零
			echo "零";
			break;
		case 1:			//若值為1 印出壹
			echo "壹";
			break;
		case 2:			//若值為2 印出貳
			echo "貳";
			break;
		case 3:			//若值為3 印出參
			echo "參";
			break;
		case 4:			//若值為4 印出肆
			echo "肆";
			break;
		case 5:			//若值為5 印出伍
			echo "伍";
			break;	
		case 6:			//若值為6 印出陸
			echo "陸";
			break;
		case 7:			//若值為7 印出柒
			echo "柒";
			break;
		case 8:			//若值為8 印出捌
			echo "捌";
			break;
		case 9:			//若值為9 印出玖
			echo "玖";
			break;
		default:		//若值不再case的值裡面 印出unknown
			echo "unknown";
	}  // end of switch
?>