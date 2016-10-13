<?php 
	$sum = 0;

	for ($n=100; $n <= 900; $n++) { 
		if ($n % 2 ==0) {
			$sum += $n;
			echo $n."까지의 합 ";
			echo $sum."<br>";
		}
	}
 ?>
