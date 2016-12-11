<?php

	class Personnage
	{
		private $nom, $nbPointsVie;
		
		function __construct($nom, $nbPointsVie)
		{
			$this->nom = $nom;
			$this->nbPointsVie = $nbPointsVie;
		}
		
		function subitBlessure($n)
		{		
			$this->nbPointsVie-=$n;
			
			if($this->nbPointsVie< 0)
				$this->nbPointsVie = 0;
		}
		
		function __toString()
		{
			return "$this->nom($this->nbPointsVie)";
		}	
		
		function getNom()
		{
			return $this->nom;
		}
		
		function getNbPointsVie()
		{
			return $this->nbPointsVie;
		}
		
		function afficherEtat()
		{
			echo $this->getNom()." : ".$this->getNbPointsVie()."/".static::MAXPV." pv\n";
			//Pour ne pas avoir de problème avec MAXP, il faut changer le self en static
		}
		
		function blesse($adversaire)
		{
			$adversaire->subitBlessure(static::DEGAT);
			echo $this->__toString()." a blessé ".$adversaire->__toString()."\n"; 
		}
	}
	
	
	
	
	class Guerrier extends Personnage
	{
		const MAXPV = 25;
		const DEGAT = 5;
		private $arme;
		
		function __construct($nom,$nbPointsVie,$arme)
		{
			parent::__construct($nom,$nbPointsVie);
			$this->arme = $arme;
		}
		
		function __toString()
		{
			return parent::__toString()."(G)";
		}
		/*
		function blesse($adversaire)
		{
			$adversaire->subitBlessure(5);
			echo $this->__toString()." a blessé ".$adversaire->__toString()."\n"; 
		}	*/	
		/*
		function __get($nom)
		{
			if($nom == "nom")
				echo "Bravo";
				return $this->nom;
			if($nom == "nbPointsVie")
				echo "Super";
				return $this->nbPointsVie;
		}	*/		
	}
	
	class Magicien extends Personnage
	{
		const MAXPV = 20;
		const DEGAT = 3;
		private $nom,$nbPointsVie;
		
		function __construct($nom,$nbPointsVie)
		{
			parent::__construct($nom,$nbPointsVie);
		}
		
		function __toString()
		{
			return parent::__toString()."(M)";
		}
		/*
		function blesse($adversaire)
		{
			$adversaire->subitBlessure(3);
			echo $this->__toString()." a blessé ".$adversaire->__toString()."\n"; 
		}*/
	}
	
	$homer = new Guerrier("Homer", 20, "une hache"); 
	$harry = new Magicien("Harry", 10); 
	$homer->afficherEtat(); 
	$harry->afficherEtat(); 
	$homer->blesse($harry); 
	$harry->afficherEtat(); 
	$homer->blesse($homer); 
	$homer->afficherEtat();
?>
