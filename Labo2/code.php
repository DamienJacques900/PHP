<?php
	$pourc1 = 0;
	$pourc2 = 0;

	function ligne($ctg,$val1,$val2,$coul1,$coul2) 
	{ 
		$graphique = "";
		list($pourc1,$pourc2) = pourcents($val1,$val2);
		$pourc1 = round($pourc1,2);
		$pourc2 = round($pourc2,2);
		$graphique .= barre($val1,$val2,$coul1,$coul2,20);
		echo "<tr><td>$ctg</td><td>$val1 ($pourc1)</td><td>$val2 ($pourc2)</td><td>$graphique</td></tr>"; 
	}
	
	function pourcents($val1,$val2)
	{
		$total = $val1 + $val2;
		$pourc1 = ($val1/$total)*100;
		$pourc2 = ($val2/$total)*100;
		return array($pourc1,$pourc2);
	}
	
	function barre($val1, $val2, $coul1, $coul2, $taille)
	{
		$valeur = "";
		$total = $val1 + $val2;
		$nbFemmes = round((($val1/$total)*$taille),0);
		$nbHommes = round((($val2/$total)*$taille),0);
		
		$valeur .= nbFois($nbFemmes,$coul1);
		$valeur .= nbFois($nbHommes,$coul2);
		
		return $valeur;
	}
	
	function nbFois($taille,$couleur)
	{
		$valeur ="";
		$valeurSortie="";
		for($i = 0 ; $i < $taille ; $i++)
		{
			$valeur.= "$";
		}
		
		$valeurSortie .= couleurCaractere($valeur,$couleur);
		
		return $valeurSortie;
	}
	
	function couleurCaractere($caractere,$couleur)
	{
		return "<span style='color:$couleur'>$caractere</span>";
	}
?>