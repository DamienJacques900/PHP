<?php
require_once "ex6.php";

function ligne($ctg,$val1,$val2) 
{
	$coulH = $GLOBALS['coulH'];
	$coulF = $GLOBALS['coulF'];
	list($pourcF, $pourcM) = pourcents($val1, $val2);
	echo "<tr><td>$ctg</td><td>$val1 ($pourcF)</td><td>$val2 ($pourcM)</td><td>";
	barre($val1, $val2, $coulH, $coulF, 10);
	echo "</td></tr>"; 
}

function pourcents($val1,$val2) //val1 et val2 sont des variables positives et numériques
{

	$pourc1 = $val1 / ($val1 + $val2) * 100;
	$pourc2 = $val2 / ($val2 + $val1) * 100;



	return array(formatPourcents($pourc1), formatPourcents($pourc2) );
}

function formatPourcents($val)
{
    $format = "%.2f";
    $chaine = sprintf($format, $val);
    $chaine .= '%';
    return $chaine;
}

function barre($val1,$val2,$coul1,$coul2,$taille = 20) //$val1 et $val2 sont des valeurs numériques positives ; $coul1 et $coul2 sont des couleurs web/css ; et $taille est un entier strictement positif
{
	$nb1 = round($val1/($val2 + $val1) * $taille,0);
	$nb2 = round($val2/($val2 + $val1) * $taille,0);

	echo "<span style=\"color:$coul1\">";

	for($i = 0; $i < $nb1; $i++)
	{
		echo '$';
	}

	echo "</span><span style=\"color:$coul2\">";

	for($i = 0; $i < $nb2; $i++)
	{
		echo '$';
	}

	echo "</span>";
}