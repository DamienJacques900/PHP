<!DOCTYPE html>
<html> //amelioration notable : entierete des colonnes demandes + utilisation de la methode date()
<head>
<meta charset="UTF-8"/>
<style>
	table th,table td{border:black 1px solid;}
	
</style>
</head>

<body>
	<p>
	<?php
	echo "cher ".$_POST['prenom'].", voici vos futurs anniversaires.";
	echo "<br>";
	echo "<table>";
	echo "<tr>";
		for($i=2015;$i<2026;$i++){
		echo "<th>",$i,"</th>";
		}
	echo"</tr><tr>";
		for($i=2015;$i<2026;$i++){echo "<td>",$_POST['jour'],"/",$_POST['mois'],"/",$i,"</td>";}
	echo "</tr><tr>";
		for($i=2015;$i<2026;$i++){echo "<td>",$i-$_POST['année'],"</td>";}
		
	echo"</tr></table>";
	echo"<br>";
	echo "Jour : ",$_POST['jour'];
	echo "<br>";
	echo "Mois : ",$_POST['mois'];
	echo "<br>";
	echo "Annee : ",$_POST['année'];
	echo "<br>";
	echo "afficherDate : ",$_POST['afficherDate'];
	echo "<br>";
	echo "afficherJours : ",$_POST['afficherJours'];
	echo "<br>";
	echo "afficherAge : ",$_POST['afficherAge'];
	echo "<br>";
	?>
	</p>
</body>
</html>