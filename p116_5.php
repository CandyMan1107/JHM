<?php 
	for ($n=100; $n <= 500; $n++) { 
		if ($n % 2 == 0) {
			echo $n." ";

			if ($n % 4 != 0) {
				echo "<br>";
			}
		}
	}
 ?>
