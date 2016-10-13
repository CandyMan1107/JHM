<?php 
	$count = 0;
	echo "1~1000까지의 자연수 중에서 소수를 찾아 출력한다.<br>";
	for ($x=1; $x <= 1000; $x++) { 
		for ($y=1; $y <= $x; $y++) { 
			if (($x != 1 && $y != 1) && $x % $y == 0) {
				if ($x / $y != 1) {
					break;
				}
				echo $x." ";
				
				$count++;
				if ($count % 9 == 0) {
					echo "<br>";
				}
			}
		}
	}
 ?>
