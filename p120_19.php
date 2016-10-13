<!DOCTYPE html>
<html>
<head>
	<title>1501261</title>
	<style>
		table, th, td {
			border: 1px solid black;
			border-collapse: collapse;
		}
	</style>
</head>
<body>
	<table>
		<tr align="center"><td>인치</td><td>센티미터</td></tr>
		<?php 
			for ($inch=10; $inch <= 300; $inch++) { 
				echo "<tr>";
				if ($inch % 10 == 0) {
					$cmeter = $inch * 2.54;
					echo "<td>$inch</td>";
					echo "<td>$cmeter</td>";
				}
				echo "</tr>";
			}
		 ?>
	</table>
</body>
</html>
