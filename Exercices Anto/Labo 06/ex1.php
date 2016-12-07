<?php

class Personnage
{
    private $nom;
    private $nbPointsDeVie;
    
    function __construct($nom, $nbPointsDeVie)
    {
        $this->nom = $nom;
        $this->nbPointsDeVie = $nbPointsDeVie;
    }
    
    function __toString()
    {
        return "$this->nom"." ($this->nbPointsDeVie)";
    }
    
    function subitBlessure($n)
    {
        $this->nbPointsDeVie = ($this->nbPointsDeVie - $n < 0) ? 0 : $this->nbPointsDeVie - $n;
    }
    
    function getNom()
    {
        return $this->nom;
    }
    
    function getNbPointsDeVie()
    {
        return $this->nbPointsDeVie;
    }
    
    function afficheEtat()
    {
        echo $this->getNom()." : ".$this->getNbPointsDeVie()."/".static::MAXV."\n";
    }
    
    function blesse($adversaire)
    {
        $adversaire->subitBlessure(static::DEGATSINFLIGES);
        echo $this->__toString()." a blessé $adversaire\n";
    }
}

class Guerrier extends Personnage
{
    const MAXV = 25;
    const DEGATSINFLIGES = 5;
    private $arme;
    
    function __construct($nom, $nbPointsDeVie, $arme)
    {
        parent::__construct($nom, $nbPointsDeVie);
        $this->arme = $arme;
    }
    
    function __toString()
    {
        return parent::__toString()." [G]";
    }
}

class Magicien extends Personnage
{
    const MAXV = 20;
    const DEGATSINFLIGES = 3;
    
    function __construct($nom, $nbPointsDeVie)
    {
        parent::__construct($nom, $nbPointsDeVie);
    }
    
    function __toString()
    {
        return parent::__toString()." [M]";
    }
}

$homer = new Guerrier("Homer", 20, "une hache");
$harry = new Magicien("Harry", 10);
$homer->afficheEtat();
$harry->afficheEtat();
$homer->blesse($harry);
$harry->afficheEtat();
$harry->blesse($homer);
$homer->afficheEtat();


