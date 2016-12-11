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
				echo "$this->nom pendant $this->nbHeures heures (info)";
			else
				echo "$this->nom pendant $this->nbHeures heures";
		}
		
		function ratio()
		{
			return ($this->nbHeures/self::$totalHeures)*100;
		}
		/*
		function sortieHTML()
		{
			if($this->special)
				echo '<tr><span class="'.self::CSS_CLASSINFO.'"><span class="'.self::CSS_CLASSNOM.'">'.$this->nom.'</span> pendant '.$this->nbHeures.' heures (info) pour '.$this->ratio().'</span></tr>';
			else
				echo '<tr><span  class="'.self::CSS_CLASSNOM.'">'.$this->nom.'</span> pendant '.$this->nbHeures.'heures (info) pour '.$this->ratio().'</tr>';
		}*/
		
		
		function formatPourcents($val)
		{
			$format = "%.2f";
			$chaine = sprintf($format, $val);
			$chaine .= '%';
			return $chaine;
		}
		/*
		function divRatio($nbPixel = 80)
		{
			$chaine;
			$chaine.= '<div style="height:12px; lenght:'.$nbPixel.'; position:relative;">';
			$chaine.= '<div style="height:12px; lenght :'.($this->ratio()/100)*$nbPixel.'; position=absolute; left :0; top:0;">';
			$chaine.= '</div><span class="tooltiptext">'.$this->formatPourcents($this->ratio()).'</span></div>';
			return $chaine;
		}*/
		
		function divRatio($nbPixel = 80)
    {
        $chaine = '<div style="';
        $chaine .= "height:12px; lenght:".$nbPixel."px; position:relative; background-color:lightgrey;";
        $chaine .= '">';

        $chaine .= ' <div style="';
        $chaine .= "height:12px; lenght:" .$this->ratio()/100*$nbPixel."px; position:absolute; top:0; display:inline-block; background-color:black;";
        $chaine .= '"></div><span class="tooltiptext">'.$this->formatPourcents($this->ratio()).'</span></div>';

        return $chaine;
    }
		
		function sortieHTML()
		{
			if($this->special)
				echo '<tr class="'.self::CSS_CLASSINFO.'"><td>'.$this->nom.'</td> <td>'.$this->nbHeures.'</td> <td>'.$this->divRatio().'</td></tr>';
			else
				echo '<tr><td>'.$this->nom.'</td> <td>'.$this->nbHeures.'</td> <td>'.$this->divRatio().'</td></tr>';
		}			
	}
?>

