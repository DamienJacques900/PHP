<?php
	session_start();
?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8"/>
		<title>Achetez nos jeux !</title>
		<style>
			body{
				background-color:black;
				font-family:"comic sans MS";
				font-size:80%;
			}
			#wrapper{
				width:800px;
				background-color:beige;
				padding:10px;
			}
			header{
				background-color:orange;
				padding:10px;
				margin-bottom:10px;
				display:flex;
				justify-content:space-around;
			}
			header button{
				width:150px;
			}
			#main{
				text-align:center;
			}
			#main p{
				font-weight:bold;
			}
			#main table{
				margin-left:auto;
				margin-right:auto;
			}
			#basket{
				margin-top:6px;
				padding:6px;
				border:2px solid orange;
			}
			#basket h2{
				margin-top:0;
				border-bottom:2px solid darkorange;
			}
			#items tr:hover{
			backgroung-color:orange;
			}
		</style>
	</head>
	
	<body>
		<div id="wrapper">
		<!-- EN TETE -->
		<header>
			<button id="bRPG">Jeux de rôle</button>
			<button id="bNonRPG">Autres jeux</button>
			<button id="bCommande">Passer commande</button>
			<button id="bEmpty">Vider votre panier</button>
			<script>
				document.getElementById("bNonRPG").onclick=function(){document.location.href="achats.php?games=nonrpg";};
				document.getElementById("bRPG").onclick=function(){document.location.href="achats.php?games=rpg";};
				document.getElementById("bEmpty").onclick=function(){document.location.href="achats.php?clear=true";};
			</script>
		</header>
		
		<!-- MESSAGE ET LISTE ARTICLE -->
		<div id="main">
			<?php 
				if(isset($_GET['clear'])){unset($_SESSION['order']);}
				if(isset($_GET['order'])){
					if(isset($_GET['games']) && $_GET['games']=='nonrpg'){				
						$fichier=fopen("nonrpg.json","r");
						$contenu=fread($fichier,filesize("nonrpg.json"));
						$type=nonrpg;
					}else{
						$fichier=fopen("rpg.json","r");
						$contenu=fread($fichier,filesize("rpg.json"));
						$type=rpg;
					}
					$items=json_decode($contenu,true);
					$bool=false;
					foreach($items as $var => $valeur){
						if($var==$_GET['order']){$bool=true;$prix=$valeur['price'];}
						
					}
					
					if($bool==false){
						echo "<p>Commande : ",$_GET['order']," incorrect !</p>" ;
					}else{
					echo "<p>Commande : ",$_GET['order'],"</p>" ;
					$ind = count($_SESSION['order']);
					echo $ind;
					$_SESSION['order'][$ind]['name']=urldecode($_GET['order']);
					$_SESSION['order'][$ind]['price']=$prix;
					print_r($_SESSION);
					}
				}
			?>
			<div id="items">
			<?php 
				echo"<table>";
				echo"<tr><th>Jeu</th><th>Prix</th><th>Genre</th><th>Editeur</th><th></th></tr>";
				function locate($var,$type){
					echo "function(){document.location='achats.php?games=".$type."&order=".urlencode($var)."';}";
					
				};
				
				if(isset($_GET['games']) && $_GET['games']=='nonrpg'){				
					$fichier=fopen("nonrpg.json","r");
					$contenu=fread($fichier,filesize("nonrpg.json"));
					$type=nonrpg;
				}else{
					$fichier=fopen("rpg.json","r");
					$contenu=fread($fichier,filesize("rpg.json"));
					$type=rpg;
				}
				//$i=0
				$items=json_decode($contenu,true);
				foreach($items as $var => $valeur){
					echo "<tr><td>",$var,"</td><td>",$valeur['price'],"</td><td>",$valeur['genre'],"</td><td>",$valeur['editor'],"</td><td>","</td><td>","<button id='$i' onclick=\"document.location.href='achats.php?games=$type&order=".urlencode($var),"'\">Commander</button>","</td></tr>";
				}
				echo"</table>";
			?>
			</div>
		</div>
		
		<!-- Panier -->
		<div id="basket">
			<h2>Votre panier :</h2>
			<div id="basketContents">
				<?php
					if(isset($_SESSION['order'])){
						$total=0;
						echo "<ul>";
						foreach($_SESSION['order'] as $celo=>$valo){$total+=$valo['price'];echo"<li>",$valo['name']," : ",$valo['price']," €</li>";}
						echo "</ul>";
						echo "Total : ",$total," €";
					}else{
						echo "<p>Votre panier est vide !</p>";
					}
					
				?>
			</div>
		</div>
	</body>

</html>