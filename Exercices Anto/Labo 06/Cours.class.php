<?php

class Cours
{
    const CSS_CLASSINFO = "coursSpec";
    const CSS_CLASSNOM = "nomCours";
    static $totHeures = 0;
    private $nom;
    private $nbHeures;
    private $coursDeSpecialite;

    function __construct($nom, $nbHeures,$coursDeSpecialite)
    {
        $this->nom = $nom;
        $this->nbHeures = $nbHeures;
        $this->coursDeSpecialite = $coursDeSpecialite;
        self::$totHeures += $nbHeures;
    }

    /*function sortieSimple()
    {
        $chaine = '<span class="'.self::CSS_CLASSNOM.'">'."$this->nom</span> pendant $this->nbHeures heures";
        if($this->coursDeSpecialite)
            $chaine .= " (info)";
        return $chaine;
    }*/

    function ratio()
    {
        return $this->nbHeures/self::$totHeures * 100;
    }

    function sortieHTML()
    {
        $chaine = "<tr><td>";
        if($this->coursDeSpecialite)
            $chaine .= '<span class="'.self::CSS_CLASSINFO.'">';
        $chaine .= $this->nom;
        if($this->coursDeSpecialite)
            $chaine .= "</span>";
        $chaine .= "</td><td>";


        if($this->coursDeSpecialite)
            $chaine .= '<span class="'.self::CSS_CLASSINFO.'">';
        $chaine .= $this->nbHeures;
        if($this->coursDeSpecialite)
            $chaine .= "</span>";
        $chaine .= "</td><td>";
        $chaine .= $this->divRatio();
        $chaine .= "</td></tr>";

        return $chaine;

    }


    function formatPourcents($val)
    {
        $format = "%.2f";
        $chaine = sprintf($format, $val);
        $chaine .= '%';
        return $chaine;
    }

    function divRatio($nbPixel = 80)
    {
        $chaine = '<div style="';
        $chaine .= "height:12px; lenght:".$nbPixel."px; position:relative; background-color:lightgrey;";
        $chaine .= '">';

        $chaine .= ' <div style="';
        $chaine .= "height:12px; lenght:" .intval($this->ratio()/100*$nbPixel)."px; position:absolute; top:0; display:inline-block; background-color:black;";
        $chaine .= '"></div><span class="tooltiptext">'.$this->formatPourcents($this->ratio()).'</span></div>';

        return $chaine;
    }
}

/*$programme[] = new Cours ("Business Intelligence", 50, false);
echo $programme[0]->sortieSimple()."\n";
$programme[] = new Cours ("Environnements de développement de logiciel", 65, true);
echo $programme[1]->ratio()."\n";
$programme[] = new Cours ("Programmation mobile", 50, true);
$programme[] = new Cours ("Programmation web orientée objet", 45, true);
$programme[] = new Cours ("Développement d'applications web", 25, true);
$programme[] = new Cours ("BDD avancées", 55, true);
$programme[] = new Cours ("Langues", 50, false);
$programme[] = new Cours ("Stage", 320, true);
$programme[] = new Cours ("TFE", 25, true);
echo $programme[1]->ratio()."\n";*/


