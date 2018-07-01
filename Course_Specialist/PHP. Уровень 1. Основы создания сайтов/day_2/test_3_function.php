<?php 

	/*
	* Функция возвразщает "Привет, $name"
	*	@param str $name - имя человека
	* @return str фраза
	*/

	function myfn($name) {
		return "Hello, $name";
	}
	echo myfn("Alex");


	echo '<br>';
	$str2 = "myfn";
	echo $str2("Anna");
	echo '<br>';


 ?>