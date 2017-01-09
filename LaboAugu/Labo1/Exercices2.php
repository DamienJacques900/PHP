<!DOCTYPE html>
<html>

	<head>
	<meta charset = "UTF-8"/>
	
	</head>
	
	<body>
	
		<?php
			$nom = 'Homer';
			$domaine = 'l\'énergie nucléaire';
			$etude = true;
			$salaire = 20;
			
			echo "Je m'appelle $nom.</br>";
			//echo $nom;
			//echo '</br>';
			
			if($etude)
				echo 'J\'étudie';
			else
				echo 'J\'ai étudié';
			echo " $domaine.</br>Je voudrais gagner \$$salaire par mois.";
			
			
		?>
		
	</body>
	
	<footer>
	</footer>

</html>
