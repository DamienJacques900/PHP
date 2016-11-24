<html> 
	<head> 
		<meta charset="UTF-8"/>
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
						'nbEnfant' => 8
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
			
			$pereSimpson = $tab['Simpson']['père'];
			$mereSimpson = $tab['Simpson']['mère'];
			$pereNahasapeemapetilon = $tab['Nahasapeemapetilon']['père'];
			$mereNahasapeemapetilon = $tab['Nahasapeemapetilon']['mère'];
			$pereVanHouten = $tab['van Houten']['père'];
			$mereVanHouten = $tab['van Houten']['mère'];
			
			echo "	
					<ul>
						<li>
							<span style='text-transform:capitalize'>Simpson</span>
							<ul>
								<li>
									<span style='font-weight:bold'>père</span> : $pereSimpson
								</li>
								<li>
									<span style='font-weight:bold'>mère</span> : $mereSimpson
								</li>
							</ul>
						</li>
						
						<li>
							<span style='text-transform:capitalize'>Nahasapeemapetilon</span>
							<ul>
								<li>
									<span style='font-weight:bold'>père</span> : $pereNahasapeemapetilon
								</li>
								<li>
									<span style='font-weight:bold'>mère</span> : $mereNahasapeemapetilon
								</li>
							</ul>
						</li>
						
						<li>
							<span style='text-transform:capitalize'>van Houten</span>
							<ul>
								<li>
									<span style='font-weight:bold'>père</span> : $pereVanHouten
								</li>
								<li>
									<span style='font-weight:bold'>mère</span> : $mereVanHouten
								</li>
							</ul>
						</li>
						
					</ul>
				";
		?>
	</body>
</html>