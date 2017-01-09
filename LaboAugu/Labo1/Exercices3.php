<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8"/>
	</head>
	
	<body>
	
		
		<?php
		
			$x=12345;
			$token = "*!";
			$str="";
			$valeur;
			$j=0;
			for($j=1;pow(10,$j-1)<=$x;$j++)
			{
				for($i=0;$i<(($x%pow(10,$j))/pow(10,$j-1));$i++)
				{
					$str.=$token;
				}
					$x-=($x%pow(10,$j));
				echo $str.'</br>';
				$str="";
			}
		?>

	
	</body>

</html>