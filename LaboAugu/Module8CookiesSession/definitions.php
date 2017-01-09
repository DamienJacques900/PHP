<?php
	$defs=array(
		"classique"=>"habituelle",
		"serveur"=>"machine ou le serveur est hébergé",
		"naviguateur"=>"programme qui permet de naviguer sur le web",
		"Ajax"=>"Asynchroneous Javascript and XML"
	);
	$trouve=false;
	if(isset($_GET['mot'])){
		foreach($defs as $clef=>$valeur){
			if($_GET['mot']==$clef){
				echo $valeur;
				$trouve=true;
			}
		}
		if($trouve==false){echo "Aucune définition trouvée";}
	}else{
	echo "Appel sans mot à définir.";
	}
?>