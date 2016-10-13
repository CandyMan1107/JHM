<?php 
	$sum = 0;
	for ($n=1; $n <= 800; $n++) { 
		if ($n % 5 != 0) {
			$sum += $n;
			echo "$n 까지의 합 $sum <br>";
		}
	}
 ?>
