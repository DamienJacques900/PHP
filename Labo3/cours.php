<html>
	<head>
		<meta charset="UTF-8"/>
		<?php
			require_once("Cours.class.php");
		?>
	</head>
	
	<body>
		<h1>Vos cours</h1>
		<ul>
			<?php
				foreach($programme as $value)
					echo "<li>$value->sortieSimple</li>";
			?>
		</ul>
	</body>
</html>