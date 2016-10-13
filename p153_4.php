<?php 
	function calc() {
		$data=array();
		$sum=array();
		$avg=array();
		$subject=array('영어 회화','이미지 메이킹','미술 감상','디지털 사진','디자인과 문화');
		$student=array('김수영', '정수정','장동헌','이미지','최성훈','김수진','염동진','강진성','황소정','한채린');

		for ($x=0; $x < count($student); $x++) { 
			$data[$student[$x]]=array();
			for ($y=0; $y < count($subject); $y++) { 
				$data[$student[$x]][$subject[$y]]=mt_rand(0, 100);
			}
		}

		for ($x=0; $x < count($student); $x++) { 
			$tempSum = 0;
			for ($y=0; $y < count($subject); $y++) { 
				$tempSum += $data[$student[$x]][$subject[$y]];
			}
			$sum[$x] = $tempSum;
			$avg[$x] = $tempSum / count($subject);
		}

		for ($x=0; $x < count($student); $x++) { 
			echo "이름 : ".$student[$x].", 합계 : ".$sum[$x].", 평균 : ".$avg[$x]."<br>";
		}
	}

	calc();
 ?>
