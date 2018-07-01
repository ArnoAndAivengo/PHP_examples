<?php 

	// function foo(array $str){
	// 	print_r($arr);
	// }

	// foo ([45,56]);
	// foo (45);

	function foo3(callable $f) {
		$f("привет");
	}	
	foo3("strlen");
	foo3(function($t){return $t."Anna";});

 ?>