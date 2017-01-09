<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8"/>
	<style>
		mark{
			border-bottom:1px dashed blue;
			background-color:transparent;
		}
		mark:hover{
			background-color:lightgrey;
		}
		footer{
			min-height:20px;
			background-color:beige;
		}
	</style>
	<script>
		var pDef;
		window.onload=init;
		function init(){
			pDef=document.getElementById("pDefinition");	
		}
		function demAjax(mot){
			var req=new XMLHttpRequest();
			var str="definitions.php?mot="+mot;
			alert(str);
			req.open("GET",str,false);
			req.send();
			pDef.innerHTML=req.responseText;
			alert(req.responseText);
		}
	</script>
</head>
<body>
	<h1>Cliquez sur les mots soulignés en pointillés pour obtenir une définition.</h1>
	<p>Dans une application Web, la méthode <mark onclick="demAjax('classique');">classique</mark> de dialogue entre un <mark onclick="demAjax('naviguateur');">navigateur</mark> et un <mark onclick="demAjax('serveur');">serveur</mark> est la suivante : lors de chaque manipulation faite par l'utilisateur, le <mark onclick="demAjax('naviguateur');">navigateur</mark> envoie une <mark onclick="demAjax('requête');">requête</mark> contenant une référence à une page Web, puis le <mark onclick="demAjax('serveur');">serveur</mark> Web effectue des calculs, et envoie le résultat sous forme d'une page Web à destination du <mark onclick="demAjax('naviguateur');">navigateur</mark>. Celui-ci affichera alors la page qu'il vient de recevoir. Chaque manipulation entraîne la <mark onclick="demAjax('transmission');">transmission</mark> et l'affichage d'une nouvelle page.L'utilisateur doit attendre l'arrivée de la réponse pour effectuer d'autres manipulations.</p><p>En utilisant <mark onclick="demAjax('Ajax');">Ajax</mark>, le dialogue entre le <mark onclick="demAjax('naviguateur');">navigateur</mark> et le <mark  onclick="demAjax('serveur');">serveur</mark> se déroule la plupart du temps de la manière suivante : un programme écrit en langage de programmation <mark onclick="demAjax('JavaScript');">JavaScript</mark>, incorporé dans une page web, est exécuté par le <mark onclick="demAjax('naviguateur');">navigateur</mark>. Celui-ci envoie en arrière-plan des <mark onclick="demAjax('demandes');">demandes</mark> au serveur Web, puis modifie le contenu de la page actuellement affichée par le <mark onclick="demAjax('naviguateur');">navigateur</mark> Web en fonction du résultat reçu du <mark onclick="demAjax('serveur');">serveur</mark>, évitant ainsi la transmission et l'affichage d'une nouvelle page complète.</p>
	<footer>
	<p id="pDefinition"></p>
	</footer>
</body>
</html>