<?php
	function ligne($ctg,$val1,$val2) 
	{ 
		echo "<tr><td>$ctg</td><td>$val1</td><td>$val2</td><td>.</td></tr>"; 
	}
	
	function pourcents($val1,$val2)
	{
		$total = $val1 + $val2;
		$pourc1 = ($val1/$total)*100;
		echo round($pourc1,2)."\n";
		$pourc2 = ($val2/$total)*100;
		echo round($pourc2,2);
	}
?>