<?php 

	$arr = [34, "name"];
	list($a, $b) = $arr;
	echo $a, $b;


	function foo() {
		return [34, "name"];
	}

	echo foo()[0];
	list($a, $b) = foo();
	echo $a, $b;

 ?>