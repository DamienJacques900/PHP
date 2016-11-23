<html>
	<head>
		<meta charset="UTF-8"/>
	</head>
	
	<body>
		<script>
			var numMax = <?php
							&ordreCroissant = true;
							&nbPoints = 15;
							echo &nbPoints;
						 ?>;
		
			function commande(num)
			{
				function act() 
				{ 
					location.href="commande.php?article="+num;
				}
				return act;
			}
		
			function init()
			{
				for(var i = <?php
								if(&ordreCroissant)
									echo '1 ; i <= numMax ; i++';
								else
									echo 'numMax ; i >= numMax ; i--';
							?>)
				{
					var noeud = document.createElement("button");
					noeud.type = "button";
					noeud.innerHTML = i;
					noeud.onclick = commande(i);
					document.body.appendChild(noeud);
					i++;
				}
			}
			
			window.onload = init;
		</script>
		
	</body>
</html>