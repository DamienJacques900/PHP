<!DOCTYPE html>//ETAPE 5
<html>
	<?php
		if(isset($_POST['cTexte']) && isset($_POST['cFond'])){
			
			setCookie('cTexte',$_POST['cTexte'],time()+60*60*24*7);
			setCookie('cFond',$_POST['cFond'],time()+60*60*24*7);
			header("Refresh:0");
		}
		if(isset($_COOKIE['cTexte'])){
		$cTexte=$_COOKIE['cTexte'];
		}else{
		$cTexte="black";
		}
		if(isset($_COOKIE['cFond'])){
		$cFond=$_COOKIE['cFond'];
		}else{
		$cFond="white";
		}
		echo $cTexte,$cFond;
	?>
	<head>
	
		<meta charset="UTF-8"/>
		<style>
			body{
				background-color: black;
			}
			#wrapper{
				width: 800px;
				padding:8px;
				margin-left:auto;
				margin-right:auto;
				background-color:lightgrey;
			}
			#info{
				display: flex;
				flex-direction:row;
				align-items:stretch;
				border:1px solid black;
				padding:4px;
			}
			#info div{
				border:1px solid blue;
				background-color:lightblue;
				padding:6px;
				margin:6px;
				flex-grow:1;
			}
			#pCookies{
				height: 100px;
				padding:4px;
				border:1px solid grey;
				background-color:white;
			}
			#main{
				padding:6px;
				color:<?php echo $cTexte;?>;
				background-color:<?php echo $cFond;?>;
			}
		</style>
		<script>
		window.onload=init;
		function init(){
			document.getElementById("bRecharger").onclick=function(){window.location.reload();};
			/*document.getElementById("bMAJ").onclick=function(){
				document.cookie="texte="+document.getElementById("cTexte").value;
				document.cookie="fond="+document.getElementById("cFond").value;
			};*/
			document.getElementById("bRafraichir").onclick=function(){
				document.getElementById("pCookies").innerHTML="";
				var cookies=document.cookie.split(";");
				for(var i=0;i<cookies.length;i++){
				document.getElementById("pCookies").innerHTML+=cookies[i]+"<br/>";
				}
			};
			document.getElementById("bSupprimer").onclick=function(){
				var moment = new Date();
				moment.setTime(moment.getTime()-1000);
				document.cookie="cTexte=bleu;expires="+moment.toUTCString();
				document.cookie="cFond=bleu;expires="+moment.toUTCString();
			};
		}
		</script>
	</head>
	
	<body>
		<div id="wrapper">
			<p id="main">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus malesuada neque sed arcu tempus, nec elementum felis vulputate. Proin faucibus arcu sed augue finibus bibendum. Phasellus augue tellus, sollicitudin sollicitudin sollicitudin in, sollicitudin vitae turpis. Sed vitae erat tincidunt, facilisis sapien et, tincidunt dui. Integer euismod, mauris non mattis pharetra, justo est laoreet nisl, quis convallis lacus metus sit amet tellus. Cras ornare lacus vel viverra commodo. Maecenas quis gravida libero. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum fermentum nisi tincidunt, pretium velit at, vestibulum nulla. Etiam porttitor malesuada urna vitae mollis. Aenean tincidunt sagittis ante. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris consectetur, dui vestibulum convallis condimentum, arcu massa varius eros, nec aliquam felis magna sit amet purus. Etiam varius elit quis lectus iaculis, vel imperdiet lorem posuere. 
			</p>
			<div id="info">
				<div>
					<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
						<label for="cTexte">Couleur de texte : </label><br/>
						<input type="text" id="cTexte" name="cTexte"/><br/>
						<label for="cFond">Couleur de fond : </label><br/>
						<input type="text" id="cFond" name="cFond"/>
						<p><button id="bMAJ" type="submit">Mise à jour</button></p>
					</form>
				</div>
				<div>
					Vos cookies : 
					<p id="pCookies"></p>
					<button id="bRafraichir">Rafraîchir</button>
				</div>
				<div>
				<button id="bSupprimer">Supprimer les cookies</button>
				<button id="bRecharger">Recharger la page</button>
				</div>
			</div>
		</div>
	</body>
</html>