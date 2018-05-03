<?php 

	$num = 5;

	$foo = function($n) use ($num){
		return $n + $num;
	};


	echo $foo(10),"<br>";
	echo gettype($foo),"<br>";



 ?>