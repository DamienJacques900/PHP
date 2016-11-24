<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<script>
				/*function submit()
				{
					var article = document.getElementById("article").value;
					if(article != "")
						location.href="http://etu28300.esy.es/www/Labo1/commande.php?article=" +  article;
					else
						location.href="http://etu28300.esy.es/www/Labo1/commande.php";
				}*/

				function commander(nb)
				{
  					function aRetourner() 
  					{
						location.href = "commande.php?article=" + nb;
					}
					return aRetourner; }

				function loaded()
				{
					numMax = <?php
	        					$nbBoutons = 15;				
 								echo $nbBoutons;
							?>;
					<?php
							if (isset($_GET) && isset($_GET['ordrecroissant'])) 
								$ordreCroissant = ($_GET['ordrecroissant'] == 'false') ? false : true;
	      					else
	        					$ordreCroissant = true;	

	        				if($ordreCroissant == true)
	        					echo 'for (var i = 1 ; i <= numMax ; i++)';
	        				else
	        					echo 'for (var i = numMax ; i >= 1 ; i--)';
					?>
					{
						var bouton = document.createElement("button"); 
						bouton.innerHTML = i;
						bouton.onclick = commander(i); 
						document.body.appendChild(bouton);
					}
				}

				window.onload = loaded;
		</script>
	</head>
	<body>
			<!--<label for="article">Article :</label>
			<input type="text" id="article"/>
			<button onclick="submit()">Commande</button>-->
	</body>

</html>