<?php 
	$count = 0;
	echo "100~10000까지의 자연수 중에서 9의 배수의 개수 ";
	for ($n=100; $n <= 10000; $n++) { 
		if ($n % 9 == 0) {
			$count++;
		}
	}
	echo $count."개";
 ?>
