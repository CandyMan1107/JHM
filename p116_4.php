<?php 
	echo "300~3000 중 홀수의 합 ";

	$n = 300;
	$sum = 0;

	while ($n <= 3000) {
		if ($n % 2 == 1) {
			$sum += $n;
		}

		$n++;
	}

	echo $sum;
 ?>
