<html>
  	<head>
      	<meta charset="utf-8" \>

      	<style>
      		.familyName
      		{
      			text-transform: uppercase;
       		}

      		.field
      		{
      			font-weight: bold;
      		}
      	</style>
    </head>
  	<body>
  		<?php
	  		$tab = array 
	  		(
	    		'Simpson' => array 
	    		(
	        		'père' => 'Homer',
	        		'mère' => 'Marge',
	        		'enfant1' => 'Bart',
	        		'enfant2' => 'Lisa',
	        		'enfant3' => 'Maggie'
	        	),
	    		'Nahasapeemapetilon' => array
	    		(
	        		'père' => 'Apu',
	        		'mère' => 'Manjula',
	        		'nbEnfants' => 8
	        	),
	    		'van Houten' => array 
	    		(
	   				'père' => 'Kirk',
					'mère' => 'Luann',
					'enfant' => 'Milhouse'
				),
				'Wiggum' => array
				(
					'père' => 'Clancy',
					'mère' => 'Sarah',
					'enfant' => 'Ralph'
				)
	    	);

	  		echo '<ul>';
	    	foreach ($tab as $clef => $info)
	    	{ 
	    		echo "<li class=\"familyName\"> $clef </li>";
	    		echo "<ul>";
	    		foreach ($info as $clefInfo => $infoInfo)
     			{
     				echo "<li> <span class=\"field\">$clefInfo</span> : $infoInfo</li>";
     			}
     			echo "</ul>";
	    	}
	    	echo '</ul>';
  		?>

  	</body>
</html>