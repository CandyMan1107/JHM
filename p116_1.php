<!DOCTYPE html>
<html>
<head>
	<title>1501261</title>
</head>
<body>
	<form method="get">
		첫 번째 정수를 입력하세요 : <input type="text" name="num1"/>
		<br>
		두 번째 정수를 입력하세요 : <input type="text" name="num2"/>
		<br>
		세 번째 정수를 입력하세요 : <input type="text" name="num3"/>
		<br>
		<input type="submit" value="입력"/>
	</form>
	<?php 
		$n1=$_GET['num1'];
		$n2=$_GET['num2'];
		$n3=$_GET['num3'];
		echo "입력된 정수 세 개 : $n1 $n2 $n3"."<br/>";

		if($n1 < $n2) {
			if ($n1 < $n3) {
				$min = $n1;
				if ($n2 < $n3) {
					$mid=$n2;
					$min=$n3;
				}
				else {
					$mid=$n3;
					$min=$n2;
				}
			}

			else {
				$min=$n3;
				$mid=$n1;
				$max=$n2;
			}
		}

		else {
			if($n2 < $n1) {
				if($n2 < $n3) {
					$min=$n2;
					if ($n1 < $n3) {
						$mid=$n1;
						$max=$n3;
					}
					else {
						$mid=$n3;
						$max=$n1;
					}
				}
			}

			else {
				$min=$n3;
				$mid=$n2;
				$max=$n1;
			}
		}

		echo "큰 수부터 정렬 : $max $mid $min"."<br/>";
	 ?>
</body>
</html>
