<?php
//V1
/*
	$x = 76;
	// définition de inc
	function inc()
	{
		global $x;
		$x++;
	}
	// définition de dec
	function dec()
	{
		global $x;
		$x--;
	}
	inc();
	dec();
	inc();
	var_dump($x);
	*/
//V2

	$x = 76;
	// définition de inc
	function inc(&$x)
	{
		$x++;
	}
	// définition de dec
	function dec(&$x)
	{
		$x--;
	}
	inc($x);
	dec($x);
	inc($x);
	var_dump($x);
?>