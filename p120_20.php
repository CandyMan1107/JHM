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
		<tr align="center"><td>마일</td><td>킬로미터</td></tr>
		<?php 
			for ($mile=10; $mile <= 300; $mile++) { 
				echo "<tr>";
				if ($mile % 10 == 0) {
					$kmeter = $mile * 1.609;
					echo "<td>$mile</td>";
					echo "<td>$kmeter</td>";
				}
				echo "</tr>";
			}
		 ?>
	</table>
</body>
</html>
