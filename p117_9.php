<?php 
	for ($n=1; $n <= 1000; $n++) { 
		if ($n % 3 != 0) {
			echo $n." ";
			if ($n % 15 == 14) {
				echo "<br>";
			}
		}
	}
 ?>
