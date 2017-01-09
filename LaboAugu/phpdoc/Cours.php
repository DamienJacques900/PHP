<?php class Cours{
				public $nom,$nbHeures,$estSpecifique;
				static $nbTot=0;
				
				private $CSS_CLASSINFO = "coursspec";
				private $CSS_CLASSNOM ="nomCours";
				
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
					return round(($this->nbHeures/self::$nbTot)*100,2);
				}
				function sortieHTML(){
					$str="";
					if($this->estSpecifique)
					{
						$str.="<span class=\"coursSpec nomCours\">";
					}else{
						$str.="<span class=\"nomCours\">";
					}
					$str.="$this->nom pendant $this->nbHeures heures (".$this->ratio()."% des heures totales.)";
					$str.="</span>";
					return $str;
				}
				function divRatio(){
				$str="";//80*(ratio/100)
				$dist=80*($this->ratio()/100);
				$str.="<span><span class=divBase><span class=divSpec style=\"min-width:".$dist."px;width:".$dist."px\"></span></span></span></br>";
				return $str;
				}
			} ?>