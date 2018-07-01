<pre>s<?php 

	$arr = [23,100 => 33,44,45,44];
	print_r($arr);
	echo "<hr>";

	rsort($arr);
	print_r($arr);
	echo "<hr>";	

	$users = [
		["name" => "Glorya", "age" => 20],
		["name" => "Alex",   "age" => 56],
		["name" => "Groom",  "age" => 34],
	];


	usort($users, function($a,$b){
		if ($a["name"] == $b["name"]) return 0;
		return strcmp($a["name"], $b["name"])?-1:1;
	});
	print_r($users);
	echo "<hr>";	


	$key = "age";
	usort($users, function($a,$b) use ($key){
		if ($a[$key] == $b[$key]) return 0;
		return strcmp($a[$key], $b[$key])?-1:1;
	});

	print_r($users);
	echo "<hr>";	



 ?>