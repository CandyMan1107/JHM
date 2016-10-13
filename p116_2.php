<!DOCTYPE html>
<html>
<head>
	<title>1501261</title>
</head>
<body>
	<form method="get">
		시험 점수 : <input type="text" name="score">
		<br>
		<input type="submit" value="입력">
		<br>
	</form>
	<?php 
		$s = $_GET['score'];

		if ($s <= 100 && $s >= 91) {
			echo "등급 : 수";
		}

		else if ($s<=90 && $s>=81) {
			echo "등급 : 우";
		}

		else if ($s<=80 && $s>=71) {
			echo "등급 : 미";
		}


		else if ($s<=70 && $s>=61) {
			echo "등급 : 양";
		}

		else if ($s<=60 && $s>=0) {
			echo "등급 : 가";
		}

		else {
			echo "점수를 잘못 입력하셨습니다!";
		}
	 ?>
</body>
</html>
