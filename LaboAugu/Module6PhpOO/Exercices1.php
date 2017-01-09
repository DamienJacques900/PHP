<!DOCTYPE html>
<html>
	<head>
		<meta charset ="UTF-8"/>
		<?php 
		abstract class Personnage
		{
			private $nom,$pVie;
			
			abstract function blesse($e);
			function getNom(){
			return $this->nom;
			}
			function getPVie()
			{
			return $this->pVie;
			}
			function __construct($nom,$pVie)
			{
				$this->nom=$nom;
				$this->pVie = $pVie;
			}
			public function __toString(){
				return "$this->nom ($this->pVie)";
			}
			public function subitBlessure($n){
				if($this->pVie<=$n){
				$this->pVie = 0;
				}
				else
				{
				$this->pVie=$this->pVie-$n;
				}
			}
			function afficheEtat($pvMax)
			{
			echo $this->getNom()." : ".$this->getPVie()."/$pvMax pv</br>";
			}
			function bless($e,$a,$nbDeg){
				$e->subitBlessure($nbDeg);
				echo "$a a blesse $e</br>";
			}
		}
		class Guerrier extends Personnage{
		
			private $arme;
			const PVMAX =25;
			const DEG =5;
			function blesse($e){
				Parent::bless($e,$this,self::DEG);
			}
			
			function __construct($nom,$pVie,$arme){
				Parent::__construct($nom,$pVie);
				$this->arme=$arme;
			}
			function __toString(){
				return Parent::__toString()." [G]";
			}
			function afficheEtat()
			{
			Parent::afficheEtat(self::PVMAX);
			}
		}
		class Magicien extends Personnage{
			
			const PVMAX =20;
			const DEG =3;
			function blesse($e){
				Parent::bless($e,$this,self::DEG);
			}
			
			function __construct($nom,$pVie){
				Parent::__construct($nom,$pVie);
			}
			function __toString(){
				return Parent::__toString()." [M]";
			}
			function afficheEtat()
			{
			Parent::afficheEtat(self::PVMAX);
			}
		}
		?>
	</head>
	<body>
		
		<?php
			$homer = new Guerrier("Homer",20,"Epée");
			$harry = new Magicien("Harry",10);
			$homer->afficheEtat();
			$harry->afficheEtat();
			$homer->blesse($harry);
			$harry->afficheEtat();
			$homer->blesse($homer);
			$homer->afficheEtat();
			
		?>
		
	</body>
</html>