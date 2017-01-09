<!DOCTYPE html>
<html>
	
	<head><meta charset="UTF-8"/></head>
	
	<body>
		<?php
			function test($u)
			{
				echo 'quand $x = '.var_dump($u).":".isset($u)."|".empty($u)."</br>";
			}
			
			echo isset($x);
			echo empty($x);
			$x=0;
			test($x);
			$x=0.0;
			test($x);
			$x=7;
			test($x);
			$x=27.4;
			test($x);
			$x=true;
			test($x);
			$x=false;
			test($x);
			$x="";
			test($x);
			$x="\n";
			test($x);
			$x="hello";
			test($x);
			$x=null;
			test($x);
			$x=array();
			test($x);
		?>
	</body>
	
</html>

/*
Exercices 5 
<?php
$x = 76;
function inc(&$o){$o++;};
function dec(&$p){$p--;};
inc($x);
dec($x);
inc($x);
var_dump($x);
?>
*/