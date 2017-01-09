<?php
	session_start();
	if(!isset($_SESSION["pseudo"])){
		header('location: login.php');
	}
?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8"/>
		<title>Ajout de membre</title>
		<style>
			#commentaires{
				color:red;
				font-weight:bold;
			}
			.message{
				color:blue;
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
		<script>
			window.onload=init;
			function init(){
				var psw = document.getElementById("mdp");
				var com = document.getElementById("commentaires");
				document.getElementById("bSup").onclick=function(){
					var nom = document.getElementById("pseudo").value;
					confirm("Voulez-vous vraiment le supprimer ? "+nom);
				}
			}
			
		</script>
	</head>
	
	<body>
		<header>
			<button id="bAjout" onclick="location='ajout.php';">Ajouter/retirer un membre</button>
			<button id="bListe" onclick="location='liste.php';">Liste des membres</button>
			<button id="bDeconnexion" onclick="location='login.php?clear=yes';">Déconnexion</button>
		</header>
		<?php
			include_once("membres.php");
			//include_once("liste.php");
			if(isset($_POST['action']) && $_POST['action']=="supprimer" && isset($_POST['pseudo'])){
				$bool = supprimerMembre($_POST['pseudo']);
				if($bool){
					echo "Utilisateur ".$_POST['pseudo']." supprimé !";
				}else{
					echo "Utilisateur ".$_POST['pseudo']." introuvable !";
				}
			}else{
			if(isset($_POST['action']) && $_POST['action']=="ajouter" && isset($_POST['pseudo']) && isset($_POST['mdp'])){
				//echo"<p class='message'>Utilisateur ".$_POST['pseudo'];
				if(isset($_POST['admin'])/*&& $_POST['admin']*/){
					//echo"(admin)";
					$bool = ajouteMembre($_POST['pseudo'],$_POST['mdp'],$_POST['admin']);
				}else{
					$bool = ajouteMembre($_POST['pseudo'],$_POST['mdp'],false);
				}
				if($bool){
					echo "Utilisateur ".$_POST['pseudo']." ajouté !";
				}else{
					echo "Utilisateur ".$_POST['pseudo']." déjà présent !";
				}
				//echo " ajouté !</p>";
			}
			}
		?>
		<form action="ajout.php" method="POST">
		<p>
			<label for="pseudo">Pseudo : </label>
			<input id="pseudo" name="pseudo" type="text" required/>
		</p>
		<p>
			<label for="mdp">Mot de passe : </label>
			<input id="mdp" name="mdp" type="password" required/>
			<span id="commentaires"></span>
		</p>
		<p>
			<input id="admin" name="admin" type="checkbox"/>
			<label for="admin">Admin</label>
		</p>
		<button id="bAjout" name="action" value="ajouter" type="submit">Ajouter</button>
		<button id="bSup" name="action" value="supprimer" type="submit">Supprimer</button>
		</form>
	</body>

</html>