<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="Exercices7.css">
	<meta charset="UTF-8"/>
		
	</head>
	
	<body>
		<?php
		$tab = array(
			'Simpson' => array(
				'père' => 'Homer',
				'mère' => 'Marge',
				'enfant1' => 'Bart',
				'enfant2' => 'Lisa',
				'enfant3' => 'Maggie'),
			'Nahasapeemapetilon' => array (
				'père' => 'Apu',
				'mère' => 'Manjula',
				'nbEnfants' => '8'),
			'van Houten' => array(
				'père' => 'Kirk',
				'mère' => 'Luann',
				'enfant' => 'Milhouse'),
			'Wiggum' => array(
				'enfant' => 'Ralph')
			);
		
		echo "<dl>";
			foreach($tab as $clef => $info){
				echo "<dt>$clef</dt>";
				foreach($info as $clef2 => $info2){
				echo "<dd><span>$clef2 : </span>$info2</dd>";
				}
			}
		echo"</dl>";
		?>
	</body>
</html>
