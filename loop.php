<?php 
	for ($i=0; $i < 10; $i++) { 
		echo nl2br("\n");
		if ($i == 5) {
			break;
		}
		
		echo "$i";
	}

	echo "<h2>while loop</h2>";
	$a = 1;

	while ($a <= 10) {
		echo $a . ") hello world<br>";
		$a++;
	}

 ?>