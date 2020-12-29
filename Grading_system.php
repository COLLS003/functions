<?php
// nb $a is the marks attained by the student 
function grading_system($a){
	if($a >= 80 &&  $a <= 100){
		$grade = "A";
		echo $grade;
	}elseif ($a >= 75 && $a < 80) {
		$grade = "B";
		echo $grade;
	}elseif ($a >= 60 &&  $a< 75) {
		$grade = "C";
		echo $grade;
	}elseif ($a >= 50 && $a < 60) {
		$grade = "D";
		echo $grade;
	}else{
		$grade = "E";
		echo $grade;
	}

}
$total = grading_system(90);
?>