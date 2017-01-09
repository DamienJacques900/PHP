<?php
	session_start();
	if(!isset($_SESSION["pseudo"])){
		header('location: login.php');
	}
?>
<iDOCTYPE html>
<html>

	<head>
		<style>
			table tr th{
				font-weight:bold;
				background-color:lightgrey;
			}
			.admin td{
				background-color:lightblue;
				font-weight:bold;
			}
			header{
				background-color:beige;
				padding:12px 0;
				width:600px;
			}
			header button{
				margin:0 6px;
				width:184px;
			}
		</style>
	</head>
	<body>
		<header>
			<button id="bAjout" onclick="location='ajout.php';">Ajouter/retirer un membre</button>
			<button id="bListe" onclick="location='liste.php';">Liste des membres</button>
			<button id="bDeconnexion" onclick="location='login.php?clear=yes';">Déconnexion</button>
		</header>
		
		<h1>Liste des membres</h1>
		<table>
		<tr><th>Pseudo</th><th>Mot de passe</th></tr>
		<?php 
		include_once("membres.php");
		$liste=listeMembres();
		//print_r($liste);
		foreach($liste as $ind => $valeur){
			if($valeur['admin']){
				echo"<tr class='admin'><td>".$ind."</td><td>".$valeur['mdp']."</td></tr>";
			}else{
				echo"<tr><td>".$ind."</td><td>".$valeur['mdp']."</td></tr>";
			}
		}
		?>
	</body>

</html>