
<?php

		$family=array('ali','ahmed');
		$family[1]= 'mustafa';
		//$newFamily =array_slice($family, 1);
		print_r($family);
		echo "<br>";

		echo "<h1>first assigment</h1>";
		$first="1";
		$second="2";
		$third=$first;
		$first=$second;
		$second=$third;
		echo "first:" .$first. "<br>";
		echo "second:" .$second. "<br>";

		$foo=100;
		$bar=200;
		$c=($foo + $bar);
		echo "$c";


		echo "<h1>second assigment</h1>";
		echo "<br>";
		$numbers=array(3,5,8,21,1,8,5);
		asort($numbers);
		print_r($numbers);
		echo "<br>";





  ?>