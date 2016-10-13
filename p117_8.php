<?php 
	for ($n=1; $n <= 500; $n++) { 
		if ($n % 2 != 0) {
			echo $n." ";
			if ($n % 10 == 9) {
				echo "<br>";
			}
		}
	}
 ?>
