<?php 
	$sum = 0;
	echo "1~1000 중에서 3의 배수의 합 ";
	for ($n=1; $n <= 1000; $n++) { 
		if ($n % 3 == 0) {
			$sum += $n;
		}
	}
	echo $sum;
 ?>
