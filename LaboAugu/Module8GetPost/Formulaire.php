<!DOCTYPE html>
<html>//amelioration : css

	<head>
		<meta charset="UTF-8"/>
		<title>Formulaire</title>
		<script>
			
			function anneeBis(annee){
				if(annee%400==0){
					return true;
				}
				else{
					if(annee%100!=0 && annee%4==0){
						return true;
					}
					else{
					return false;
					}
				}
			}
			function derniereDate(mois,annee){
				var t=[];
				if(anneeBis(annee)){
					t=[31,29,31,30,31,30,31,31,30,31,30,31];
				}else{
					t=[31,28,31,30,31,30,31,31,30,31,30,31];
				}
				return t[mois];
			}
			function dateValide(jour,mois,annee){
				var t=[];
				if(anneeBis(annee)){
					t=[31,29,31,30,31,30,31,31,30,31,30,31];
				}else{
					t=[31,28,31,30,31,30,31,31,30,31,30,31];
				}
				if(t[mois]>=jour){return true;}else{return false;}
			}
		</script>
	</head>
	
	<body>
	
		<form method=post action="Formulaire2.php">
		<fieldset>
			<legend>Identification</legend>
			<label for"prenom">Prénom : </label>
			<input type="text" name="prenom" required>
		</fieldset>
		<fieldset>
			<legend>Date de naissance</legend>
			<label for="jour">Jour de naissance : </label>
			<select name="jour">
			<?php
					for($i=1;$i<=31;$i++){
					echo "<option value=\"$i\">$i</option>";
					}
			?>
			</select>
			<span id="commentaire"></span>
		<br><br>Mois de naissance : 
			<ul>
				<li><label for="mois"><input type="radio" name="mois" value="Janvier" checked>Janvier </li>
				<?php $m=["Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre"];for($i=0;$i<11;$i++){echo "<li><label for='mois'><input type='radio' name='mois' value='$m[$i]'>$m[$i]</li>";}?>
			</ul>
			<label for="année">Année de naissance : </label>
			<input type="number" name="année" min="1900" max="2050" value="2000">
		</fieldset>
		<fieldset>
			<legend>Colonnes à afficher</legend>
			<input type="checkbox" name="afficherDate">dates d'anniversaires<br>
			<input type="checkbox" name="afficherJours">jours d'anniversaires<br>
			<input type="checkbox" name="afficherAge">age<br>
		</fieldset>
			<button id="sd" type="submit">Afficher les anniversaires!</button>
		</form>
		
	</body>
	
</html>