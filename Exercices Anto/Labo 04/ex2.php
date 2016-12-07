<html>
 	<head>
 		<meta charset="utf-8">
 	</head>
  	<body>
  		<p>
	    	<?php
				$nom = "Homer";
				$domaine = "l'énergie nucléaire";
				$etude = false;
				$salaire = 3000;

				echo "Je m'appelle $nom.\n";
				if($etude)
					echo "J'étudie";
				else
					echo "J'ai étudié";
				echo " $domaine.\n";

				echo "Je voudrais gagner $salaire euros par mois. \n"
				?>

			<!-- version 2
	    	<?php
				$nom = 'Homer';
				$domaine = 'l\'énergie nucléaire';
				$etude = false;
				$salaire = 3000;

				echo 'Je m\'appelle '.$nom.'.
											';
				if($etude)
					echo 'J\'étudie';
				else
					echo 'J\'ai étudié';
				echo ' ' . $domaine.'.
									';

				echo 'Je voudrais gagner ' . $salaire . ' euros par mois.
										';
				?>
			-->

			<!-- version 3 (supprimer les <p> de la balise body)
	    	<?php
				$nom = "Homer";
				$domaine = "l'énergie nucléaire";
				$etude = false;
				$salaire = 3000;
				echo "<p>";

				echo "Je m'appelle ".$nom.".\n";
				echo "</p><p>";
				if($etude)
					echo "J'étudie";
				else
					echo "J'ai étudié";
				echo " " . $domaine.".\n";
				echo "</p><p>";

				echo "Je voudrais gagner " . $salaire . " euros par mois. \n";
				echo "</p>";

				?>
			-->
		</p>
  	</body>
</html>