<!DOCTYPE html>
<html>
<head>
	<title>1501261</title>
</head>
<body>
	<table border="1" width="1000">
		<?php 
			for ($y=1; $y<=9; $y++)
	   		{
	      		for ($x=2; $x<=9; $x++)
	      		{
	           		$r[$x][$y] = $x * $y;
	      		}
	   		}

	   		echo "<tr bgcolor='#cccc' align='center'>";
	   		for ($iCount=2; $iCount <= 9; $iCount++) { 
	   			echo "<td>".$iCount."단</td>";
	   		}
	   		echo "</tr>";

   			for ($y=1; $y<=9; $y++)
  	 		{
	   			echo "<tr align='center'>";	
   	   			for ($x=2; $x<=9; $x++)
  	    		{

  	    			echo "<td>";    
   	      			$a = $r[$x][$y];
    	  			echo "$x x $y = $a";
    	 	 		echo "</td>";
  	    		}
   	     		echo "</tr>";
   			}
		 ?>
	</table>
</body>
</html>
