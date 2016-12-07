<?php
    function __autoload($classe)
    { 
        require_once "../../../php/$classe.class.php";
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
?>


<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">

        <style>
            <?php
                echo ".".Cours::CSS_CLASSINFO;
                echo "{";
                echo "color : blue;";
                echo "}";


                echo ".".Cours::CSS_CLASSNOM;
                echo "{";
                echo "font-weight : bold;";
                echo "}";
            ?>
            th
            {
                font-weight:bold;
            }

            .tooltiptext
            {
                opacity:0;
                color:white;
                position:relative;
                bottom:5px;
                font-size:12px;
            }

            .tooltiptext:hover
            {
                visibility:visible;
                opacity:1;
            }
        </style>

    </head>

    <body>
        <h1>Vos cours :</h1>
        <table>
            <tr><th>Nom</th><th>Nb heures</th><th>Proportion</th></tr>
            <?php
                foreach ($programme as $prop => $val)
                {
                    echo $val->sortieHTML();
                }
            ?>
        </table>
    </body>
</html>