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
		<tr align="center"><td>제곱미터</td><td>평</td></tr>
		<?php 
			for ($mm=10; $mm <= 300; $mm++) { 
				echo "<tr>";
				if ($mm % 10 == 0) {
					$p = $mm * 0.3025;
					echo "<td>$mm</td>";
					echo "<td>$p</td>";
				}
				echo "</tr>";
			}
		 ?>
	</table>
</body>
</html>
