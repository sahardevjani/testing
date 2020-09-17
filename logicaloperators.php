<?php 
	$age=18;
	if ($age >= 18 && $age <= 21) {
		echo "you are eligible."."<br>";
	}

	$age=25;
	if ($age >= 18 || $age <= 21) {
		echo "you are eligible."."<br>";
	}

	$age=13;
	if (!($age >= 18)) {
		echo "you are eligible."."<br>";
	}

	$age=2;
	if ($age >=18) {
		echo "you are eligible";
	} else {
		echo "sorry try again later";
	}
	

 ?>

