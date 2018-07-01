<?php 

	function test() {
		static $a = 0;
		if ($a >= 5) return;
		echo ++$a;
	}

	test();
	test();
	test();
	test();
	test();
	test();
 ?>