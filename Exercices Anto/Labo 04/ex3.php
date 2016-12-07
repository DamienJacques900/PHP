<html>
 	<head>
 		<meta charset="utf-8">
 	</head>
  	<body>
  		<p>
	    	<?php
				$x = 7529;
				$taille;
				$token = '*!';
				$chaine = '';
				$etoile = '*';

				//for($i = 0; $i < $x; $i++)
					//echo $token; premier temps
					/*$chaine.= $token;

				echo $chaine; deuxieme temps*/

				/*$i = 0;

				while ($i < 5):
				  $chaine.=$token;
				  $i++;
				endwhile;

				echo $chaine; troisieme temps*/

				settype($x, 'string');
				$taille = strlen($x);

				for($i = 0; $i < $taille; $i++)
				{
					echo "<p>";
					for($j = 0; $j < $x[$i]; $j++)
					{
						echo $etoile;
					}
					echo "</p>";
				}





			?>
		</p>
  	</body>
</html>