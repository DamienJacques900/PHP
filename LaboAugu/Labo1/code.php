<?php

function ligne($ctg,$val1,$val2){
				list($pctF,$pctH)=pourcentages($val1,$val2);
				$str=barre($val1,$val2,"red","blue",20);
				echo "<tr><td>$ctg</td><td>$val1($pctF)</td><td>$val2($pctH)</td><td>$str</td></tr>";
			};
function pourcentages($val1,$val2){

	if($val1>=0 AND $val2>=0)
	{
		$tot = $val1+$val2;
		$val3=((float)$val1/$tot)*100;
		$val4=((float)$val2/$tot)*100;
		//echo sprintf("%.2f%%",$val3); echo sprintf("%.2f%%",$val4);
		return array(sprintf('%.2f%%',$val3),sprintf('%.2f%%',$val4));
	}
	else
	{
		return array("NULL","NULL");
	}
};
function barre($val1,$val2,$coul1,$coul2,$taille){
	
	$str="";
	$str.="<span style='color:$coul1'>";
	if(func_num_args()<5)
	{
	$taille=20;
	}
	$tot = $val1+$val2;
	$r1 = $val1/$tot;
	$r2 = $val2/$tot;
	
	for($t=0;$t<($r1*$taille);$t++)
	{
	$str.="$";
	}
	$str.="</span><span style='color:$coul2'>";
	for($t=0;$t<(($r2*$taille));$t++)
	{
	$str.="$";
	}
	$str.="</span>";
	return $str;
}

    //list($a,$b)=pourcentages(40,60);
    //echo $a;
    //echo $b;
?>