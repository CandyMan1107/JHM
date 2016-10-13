<?php 
	for ($x=1; $x <= 10; $x++) { 
		for ($y=1; $y <= 10; $y++) { 
			if ($x + $y >= 11) {
				echo "*";
			}
			else {
				echo "&nbsp";
			}
		}
		echo "<br>";
	}
 ?>
