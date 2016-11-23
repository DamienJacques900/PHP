<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" type="text/css" href="test.css">
	</head>
	
	<body>
		<div>
			<h1>Bienvenue !</h1>
			<p id="heure">
				Il est actuellement
					<?php
						$heure = date('H:i');
						$texte = 'et nous sommes le ';
						$date = date('j/m/Y');
						echo $heure,$texte,$date;
					?>
				sur le serveur et 
					<script>
						var bonneHeure = new Date();
						var heure =bonneHeure.getHours();
						var minute=bonneHeure.getMinutes();
						var seconde=bonneHeure.getSeconds();
						document.write(" "+heure+":"+minute+":"+seconde);
					</script>
				sur le navigateur et tout va très bien.
			</p>
			<p>C'est 
				<?php
					$jour = date('j');
					if($jour < 15)
						echo 'le début';
					else
						echo 'la fin';
				?>
				du mois
			</p> 
			<img src="Image/php.png"width="100px" alt="Elephant" style="text-align:center">
			
			<p class="latin">
				<span>L</span>orem ipsum dolor sit amet, consectetur adipiscing elit. Cras accumsan mollis aliquam. Cras eu odio ac quam dictum ornare. Mauris ante ante, sodales sed metus in, consectetur consequat massa. Donec elementum, leo vel scelerisque facilisis, urna velit porttitor metus, id varius tortor nibh a libero. Vivamus interdum non ex faucibus condimentum. Phasellus vitae feugiat metus. Nam iaculis tempus dictum. Duis eu ligula id leo ullamcorper tincidunt a ac lacus. Etiam gravida ut tellus et aliquam. Suspendisse ut orci ante. Nulla tempus sodales lacus, id egestas turpis scelerisque quis. Donec finibus ornare viverra. Cras vitae tincidunt metus. Sed posuere vehicula nulla, ac hendrerit metus varius eget. Nunc dui nisi, eleifend vel consectetur vel, condimentum ut mi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. 
			</p>
			
			<p class="latin">
				<span>M</span>aecenas eget dolor laoreet, elementum nunc nec, ultricies eros. In tincidunt, erat vel euismod pretium, nibh turpis dignissim nunc, vel tincidunt metus purus cursus felis. Integer fermentum mauris at nunc egestas, nec malesuada eros finibus. Aliquam elementum bibendum mi sit amet suscipit. Quisque at orci eu dui venenatis facilisis vitae sed magna. Morbi eget nisi vitae ante dictum finibus. Curabitur posuere dolor sit amet eros tincidunt aliquam. Pellentesque suscipit est nec faucibus venenatis. Aenean pretium est ligula, sed rhoncus enim viverra eget. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
			</p>
			
			<p class="latin">
				<span>M</span>aecenas lacus nunc, laoreet quis vulputate eu, condimentum ac ipsum. Duis tempus nisl sapien, accumsan aliquam erat ornare in. Nam rhoncus ex et convallis accumsan. Donec non urna sit amet enim pretium semper ac ut ante. Nulla facilisi. Proin rhoncus ligula in dui sollicitudin, sed tincidunt nisl mollis. Proin commodo faucibus tempus. Integer malesuada suscipit rutrum. Vivamus semper nibh quis leo fermentum auctor. Morbi ut tempus leo. Praesent cursus tempor faucibus. Cras et metus orci. Etiam at nisl lacus. In a blandit neque, in venenatis mauris. 
			</p>
			
			<p class="latin">
				<span>M</span>orbi ut quam venenatis, auctor purus in, pretium leo. In pharetra mi quis risus pulvinar sagittis. Curabitur venenatis eu leo sed tincidunt. Cras consequat, tortor tincidunt volutpat tempor, tellus diam auctor ipsum, eget fringilla ligula lectus et augue. Pellentesque aliquam leo in dolor feugiat mollis. Praesent felis eros, pulvinar a gravida nec, feugiat ac odio. Pellentesque tincidunt augue sed felis mollis tristique. Donec pretium ut arcu ut vestibulum. Sed non nulla vitae ante ornare mattis eget eu orci. Suspendisse at luctus neque, in semper dui. In blandit quis nisi in elementum. Proin volutpat felis urna, id mollis mauris dapibus quis. Phasellus ullamcorper dictum tortor convallis accumsan. Ut a egestas est, non laoreet nisl. Vivamus feugiat risus ut nibh faucibus eleifend. 
			</p>
			
			<p class="latin">
				<span>S</span>ed vestibulum sollicitudin pulvinar. Sed imperdiet felis dui, ac consequat massa egestas non. Nunc mattis vehicula nisl, et vulputate quam gravida ut. Donec eu fringilla velit. Fusce ultricies tempor magna, vel dapibus purus. Ut facilisis varius tellus, sed dignissim elit. Proin sed sodales odio. Sed nec mauris lectus. Duis dignissim nulla vitae ligula ornare lacinia eu in augue. Phasellus facilisis malesuada venenatis. Donec hendrerit enim augue, in condimentum metus elementum et. Integer ac sem vehicula, varius sapien quis, malesuada nibh. Vivamus sagittis convallis lorem, ac dignissim elit convallis at. 
			</p>
		</div>
	</body>
</html>