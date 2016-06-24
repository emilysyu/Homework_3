<?php
	$score = 95;						//將score的值設為95
	if ($score >=60 && $score < 70) {	//若落在60(包含)-70範圍則印出D
		echo 'D';
	} elseif ($score>=70 && $score<80) {//若落在70(包含)-80範圍則印出C
		echo 'C';
	} elseif ($score>=80 && $score<90) {//若落在80(包含)-90範圍則印出B
		echo 'B';		
	} elseif ($score>=90 && $score<=100) {//若落在90(包含)-100範圍則印出A
		echo 'A';		
	} else {							//其他範圍則印出Fail
		echo 'Fail';
	}
?>