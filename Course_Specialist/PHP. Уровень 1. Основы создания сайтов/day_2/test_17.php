<?php 

	$str = "global";
	function foo() {
		global $str = "local";
		$GLOBALS["str"] = "сюрприз";
		return $str;
	}
	echo foo();

	echo "<pre>",print_r($GLOBALS);

 ?>