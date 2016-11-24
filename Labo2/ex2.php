<html>
	<head>
		<meta charset="UTF-8"/>
	</head>
	
	<body
	<?php
		$nom = "Damien";
		$domaine = "l'informatique";
		$etude = false;
		$salaire = 5000;
	?>
	<!--V1
		
		<p><?php //echo "Je m'appelle $nom";?></p>
		<p><?php 
				/*if($etude==true)
					echo "J'étudie $domaine";
				else
					echo "J'ai étudié $domaine";*/
			?>
		</p>
		<p><?php //echo "Je vousdrais gagner \$$salaire par mois";?></p>
	-->
	
	<!--V2
		<p><?php //echo 'Je m\'appelle '.$nom.'';?></p>
		<p><?php/* 
				if($etude==true)
					echo 'J\'étudie '.$domaine.'';
				else
					echo 'J\'ai étudié '.$domaine.'';
				*/
			?>
		</p>
		<p><?php //echo 'Je vousdrais gagner $'.$salaire.' par mois';?></p>
	-->
	
	<!--V3
			<?php /*
				echo '<p>Je m\'appelle '.$nom.'</p>';
				if($etude==true)
					echo '<p>J\'étudie '.$domaine.'</p>';
				else
					echo '<p>J\'ai étudié '.$domaine.'</p>';
				echo '<p>Je vousdrais gagner $'.$salaire.' par mois</p>';
			*/?>
	-->
	
	
	<!--V4-->
		<?php 
			echo "<p>Je m'appelle $nom</p>";
			if($etude==true)
				echo "<p>J'étudie $domaine</p>";
			else
				echo "<p>J'ai étudié $domaine</p>";
			echo "<p>Je vousdrais gagner \$$salaire par mois</p>";
		?>
	
	</body>
</html>