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
		<tr align="center"><td>야드</td><td>미터</td></tr>
		<?php 
			for ($yard=10; $yard <= 300; $yard++) { 
				echo "<tr>";
				if ($yard % 10 == 0) {
					$meter = $yard * 0.9144;
					echo "<td>$yard</td>";
					echo "<td>$meter</td>";
				}
				echo "</tr>";
			}
		 ?>
	</table>
</body>
</html>
