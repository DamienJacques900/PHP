<!DOCTYPE html>
<html>

	<head>
	<meta charset="UTF-8"/>
	<title>Verification</title>
	</head>
	
	<body>
		<h1><?php
			if(isset($_GET['nb1'])AND isset($_GET['nb2'])AND isset($_GET['nbR'])){
				if($_GET['nb1']*$_GET['nb2']==$_GET['nbR']){
					echo"Bonne réponse !";
				}else{
					echo"Mauvaise réponse !";
				}
			}else{
				echo"Vous ne pouvez pas accéder à cette page de cette manière !";
			}
		?></h1>
	</body>

</html>