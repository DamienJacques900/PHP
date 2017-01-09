<?php
	include_once("membres.php");
	if(isset($_GET['clear'])){
		session_destroy();
	}
	if(isset($_POST['pseudo']) && isset($_POST['mdp'])){
		$codeConf = verifierMembre($_POST['pseudo'],$_POST['mdp']);
		if($codeConf==1 || $codeConf==2){
			session_start();
			$_SESSION["pseudo"]=$_POST["pseudo"];
			header('location: liste.php');
		}
	}
?>
<!DOCTYPE html>
<html>

<head>

</head>

<body>
	<?php
		if(isset($_POST['pseudo']) && isset($_POST['mdp'])){
			$erreur = verifierMembre($_POST['pseudo'],$_POST['mdp']);
			//print_r($erreur);
			if($erreur==3){
				echo "<p style='color:red'>Pseudo incorrect !</p>";
			}else{
				echo "<p style='color:red'>Mot de passe incorrect !</p>";
			}
		}
	?>
	<form action="login.php" method="POST">
	<p id="pPseudo">
		<label for="pseudo">Pseudo : </label>
		<input type="text" name="pseudo" id="pseudo" required/>
	</p>
	<p id="pMdp">
		<label for="mdp">Mot de passe : </label>
		<input id="mdp" name="mdp" type="password" required/>
	</p>
	<button id="bLogin" type="submit">Connexion</button>
	</form>
</body>

</html>