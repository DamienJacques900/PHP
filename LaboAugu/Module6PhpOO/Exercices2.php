<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<style type="text/css">
		.coursSpec{color:blue;}
		.nomCours{font-weight:bold;}
		.divBase{background-color:LightGrey;height:12px;max-width:80px;width:80px;min-width:80px;position:absolute;top:0,left:0;}
		.divSpec{background-color:DarkGrey;height:12px;position:absolute;left:0;top:0;}
		</style>
		<?php
		//require_once"../phpdoc/file.php";
			/*class Cours{
				private $nom,$nbHeures,$estSpecifique;
				static $nbTot=0;
				function __construct($nom,$nbHeures,$estSpecifique){
					$this->nom =$nom;
					$this->nbHeures=$nbHeures;
					$this->estSpecifique=$estSpecifique;
					self::$nbTot+=$nbHeures;
				}
				function sortieSimple(){
					$str="";
					$str.="$this->nom pendant $this->nbHeures heures";
					if($this->estSpecifique==true){$str.=" (info)";}
					$str.="</br>";
					return $str;
				}
				function ratio(){
					return ($this->nbHeures/self::$nbTot)*100;
				}
			}*/
			function __autoload($classe){
				require_once"../phpdoc/$classe.php";
			}
		?>
	</head>
	
	<body>
		<?php
			$programme = [];
			$programme[] = new Cours("BI",50,false);
			$programme[] = new Cours("C++",65,true);
			$programme[] = new Cours("Androïd",50,true);
			$programme[] = new Cours("UWP",45,true);
			$programme[] = new Cours("PHP",25,true);
			$programme[] = new Cours("BD Avancées",55,true);
			$programme[] = new Cours("Langues",50,false);
			$programme[] = new Cours("Stage",320,true);
			$programme[] = new Cours("TFE",25,true);
			
			foreach($programme as $cel){
				echo $cel->sortieSimple();
				echo "Vaut ".$cel->ratio()."% des heures!</br>";
			}
			foreach($programme as $cel){
				echo $cel->sortieHTML();
				//echo $cel->divRatio();
				echo"</br>";
			}
			echo"</br></br><table><tr><th>Nom</th><th>NbHeures</th><th>Proportion</th></tr>";
			foreach($programme as $cel){
				echo "<tr>";
				echo "<td>".$cel->sortieHTML()."</td>";
				echo "<td>$cel->nbHeures</td>";
				echo "<td>".$cel->divRatio()."</td>";
				echo "</tr>";
			}
			echo "</table>";
		?>
	</body>
</html>