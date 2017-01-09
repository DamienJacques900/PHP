<?php
define("LOGIN_OK",1);
define("LOGIN_ADMIN",2);
define("USER_NOT_FOUND",3);
define("INCORRECT_PASSWORD",4);
$nomFichier ="membres.txt";
function verifierMembre($pseudo,$mdp){
	if(file_exists("membres.txt")){
		$fichier=fopen("membres.txt","r");
		$contenu=fread($fichier,filesize("membres.txt"));
		$membres=json_decode($contenu,true);
		//print_r($membres);
		fclose($fichier);
		if(isset($membres[$pseudo])){
			$mdp=(md5("xXx".$mdp."xXx"));
			//print_r($mdp."".$membres[$pseudo]["mdp"]);
			if($mdp==$membres[$pseudo]["mdp"]){
				if(isset($membres[$pseudo["admin"]]) && $membres[$pseudo["admin"]]){return 2;}else{return 1;}
			}else{
			return 4;
			}
		}else{
		return 3;
	}
	}
}
function ajouteMembre($pseudo,$mdp,$admin){
	
	if(file_exists("membres.txt")){
		$fichier=fopen("membres.txt","r");
		$contenu=fread($fichier,filesize("membres.txt"));
		$membres=json_decode($contenu,true);
		//print_r($membres);
		fclose($fichier);
		if(isset($membres[$pseudo])){return false;}
	}else{
		$membres=[];
	}
	$mdp=(md5("xXx".$mdp."xXx"));
	$membres[$pseudo]["admin"]=$admin;
	$membres[$pseudo]["mdp"]=$mdp;
	//print_r($membres);
	$fichier=fopen("membres.txt","w");
	$contenu=json_encode($membres,true);
	fwrite($fichier,$contenu);
	fclose($fichier);
	return true;
}
function listeMembres(){
	$liste=[];
	if(file_exists("membres.txt")){
		$fichier=fopen("membres.txt","r");
		$contenu=fread($fichier,filesize("membres.txt"));
		$liste=json_decode($contenu,true);
		fclose($fichier);
	}
	return $liste;
}
function supprimerMembre($pseudo){
$liste=[];
	if(file_exists("membres.txt")){
		$fichier=fopen("membres.txt","r");
		$contenu=fread($fichier,filesize("membres.txt"));
		$liste=json_decode($contenu,true);
		fclose($fichier);
	}
	if(isset($liste[$pseudo])){
		unset($liste[$pseudo]);
		$fichier=fopen("membres.txt","w");
		$contenu=json_encode($liste,true);
		fwrite($fichier,$contenu);
		fclose($fichier);
		return true;
	}else{
		return false;
	}
}
?>