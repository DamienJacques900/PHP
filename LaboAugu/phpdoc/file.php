<?php class Cours{
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
			} ?>