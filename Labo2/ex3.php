<html>
	<head>
		<meta charset="UTF-8"/>
	</head>
	
	<body>
		<?php
		//V1
			/*$x = 5;
			$token = "*!";
			
			for($i = 0 ; $i < $x ; $i++)
			{
				echo "$token";
			}*/
		//V2
			/*$x = 5;
			$token = "*!";
			$phrase = "";
			
			for($i = 0 ; $i < $x ; $i++)
			{
				$phrase.=$token;
			}
			
			echo $phrase;*/
		//V3
		/*
			$x = 5;
			$token = "*!";
			$phrase = "";
			$i = 0;
			while($i < $x):
				$phrase.=$token;
				$i++;
			endwhile;
			
			
			echo $phrase;*/
		
		//V4
			$x = 7259;
			settype($x, 'string');
			$taille=strlen($x); //calcule le nombre de caractère
			echo "le nombre de caractère : $taille";
			$token = "*";
			for($i = 0 ; $i < $taille ; $i++)
			{
				$phrase = "";
				for($j = 0; $j < $x[$i]; $j++)/*permet d'accèder à la j place dans le string*/
				{
					$phrase.=$token;
				}
				
				echo "<p>$phrase \n</p>";
			}
		?>
	</body>
</html>