<?php 

	// Сумма переданного массива

	function sum(){
		//echo func_get_arg(4);
		print_r(func_get_args());
		echo func_num_args();

		$s = 0;
		for ($i = 0; $i < func_num_args(); $i++) {
			$s += func_get_arg($i);
			return $s;
		}
	}

	echo sum(45,34,56,24,12,43),"<br>";


   // Наименьшая сумма переданного числового массива

	function avg(){
		$s = 0;
		$len = func_num_args();
		for ($i = 0; $i < $len(); $i++) {
			$s += func_get_arg($i);
			return $s / $len;
		}
	}

	echo avg(45,34,56,24,12,43),"<br>";

 ?>