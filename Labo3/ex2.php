<?php

	class Cours
	{
		const CSS_CLASSINFO = "coursSpec";
		const CSS_CLASSNOM = "nomCours";
		
		private $nom,$nbHeures,$special;
		static $totalHeures = 0;
		
		function __construct($nom,$nbHeures,$special)
		{
			$this->nom = $nom;
			$this->nbHeures = $nbHeures;
			$this->special = $special;
			self::$totalHeures += $nbHeures;
		}
		
		function sortieSimple()
		{
			if($this->special)
				echo "\n$this->nom pendant $this->nbHeures heures (info)";
			else
				echo "\n$this->nom pendant $this->nbHeures heures";
		}
		
		function ratio()
		{
			return ($this->nbHeures/self::$totalHeures)*100;
		}
		
		function sortieHTML()
		{
			echo $this->sortieSimple()." ".$this->ratio();
		}
		
		function divRatio()
		{
			echo "";
		}
	}
	
	$programme[] = new Cours ("Business Intelligence", 50, false);
    $programme[] = new Cours ("Environnements de développement de logiciel", 65, true);
    $programme[] = new Cours ("Programmation mobile", 50, true);
    $programme[] = new Cours ("Programmation web orientée objet", 45, true);
    $programme[] = new Cours ("Développement d'applications web", 25, true);
    $programme[] = new Cours ("BDD avancées", 55, true);
    $programme[] = new Cours ("Langues", 50, false);
    $programme[] = new Cours ("Stage", 320, true);
    $programme[] = new Cours ("TFE", 25, true);
	
	echo $programme[0]->ratio();
	$programme[0]->sortieSimple();
	$programme[1]->sortieSimple();
?>