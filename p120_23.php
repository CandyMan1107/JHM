<?php 
	$sum1 = 0;
	$sum2 = 0;

	for ($n=200; $n <= 1000; $n++) { 
		if ($n % 3 == 0) {
			$sum1 += $n;
		}
		else if ($n % 7 == 0) {
			$sum2 += $n;
		}
	}

	echo "3의 배수의 합 : $sum1 <br>";
	echo "7의 배수의 합 : $sum2 <br>";
 ?>
