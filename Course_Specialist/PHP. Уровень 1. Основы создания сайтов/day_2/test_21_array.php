<pre><?php 

	$arr = [23,100 => 33,44,45,44];
	print_r(array_count_values($arr));

	print_r($arr);
	print_r(array_values($arr));
	print_r(array_keys($arr));
	echo "<hr>";


	echo "Delete: ", array_pop($arr),"<hr>";
	echo "Add: ", array_push($arr,1),"<hr>";
	echo "Delete: ", array_shift($arr),"<hr>";
	echo "Add: ", array_unshift($arr,2),"<hr>";
	print_r($arr);
	echo "<hr>";

	echo in_array(2, $arr) ? "Yes" : "No";
	echo "<hr>";

	echo array_key_exists(2, $arr) ? "Yes" : "No";
	echo "<hr>";


 ?>