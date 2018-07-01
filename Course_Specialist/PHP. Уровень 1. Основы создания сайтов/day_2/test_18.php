<?php 

	$t = 100;
	$s = 444;
	function foo(&$d) {
		$d--;
	}

	echo foo($t);
	echo $t;
	echo foo($s);
	echo $s;


	$user1 = [
		"name" => "Vako",
		"balance" => 100;
	];

	function changeAccount(array &$acc, $check) {
		$acc["balance"] -= $check;
		return $acc["balance"];
	}

	echo changeAccount($account1, 45), "<br>";
	print_r($account1);

 ?>