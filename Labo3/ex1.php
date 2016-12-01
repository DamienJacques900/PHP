<?php

	abstract class Personnage
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
		
		abstract function blesse($adversaire);
	}
	
	class Guerrier extends Personnage
	{
		const MAXPV = 25;
		const DEGAT = 5;
		private $arme,$nom,$nbPointsVie;
		
		function __construct($nom,$nbPointsVie,$arme)
		{
			parent::__construct($nom,$nbPointsVie);
			$this->arme = $arme;
		}
		
		function __toString()
		{
			return parent::__toString()."(G)";
		}
		
		function blesse($adversaire)
		{
			$adversaire->subitBlessure(5);
			echo $this->__toString()." a blessé ".$adversaire->__toString()."\n"; 
		}
		
		function afficherEtat()
		{
			echo $this->nom." : ".$this->nbPointsVie."/".self::MAXPV." pv";
		}
		
		/*
		function afficherEtat()
		{
			echo $this->getNom()." : ".$this->getNbPointsVie()."/".self::MAXPV." pv\n";
		}
		*/
		function __get($nom)
		{
			if($nom == "nom")
				echo "Bravo";
				return $this->nom;
			if($nom == "nbPointsVie")
				echo "Super";
				return $this->nbPointsVie;
		}
		
		function getNom()
		{
			return $this->nom;
		}
		
		function getNbPointsVie()
		{
			return $this->nbPointsVie;
		}
	}
	
	$homer = new Guerrier('Homer',20,'hache');
	$homer->afficherEtat();
	echo $homer->nom;
	
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
		
		function blesse($adversaire)
		{
			$adversaire->subitBlessure(3);
			echo $this->__toString()." a blessé ".$adversaire->__toString()."\n"; 
		}
	}
	
	//$homer = new Personnage('Homer',20);
	
	//echo $homer;
	
	//$homer->subitBlessure(5);
	
	//echo $homer
	
	$harry = new Magicien('Harry',10);
	
	//echo $homer;
	//echo $harry;
	
	//$homer->blesse($harry);
	//$harry->blesse($homer);
	
	
?>
