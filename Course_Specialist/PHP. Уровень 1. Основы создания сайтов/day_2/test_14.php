<style>
	div {
		background: pink;
		margin: 1px;
	}
</style>


<?php 

	function graph(){
		$s = "";
		$len = func_num_args();
		$m = max(func_get_args());
		for ($i = 0; $i < $len; $i++) {
			$t = func_get_arg($i) / $m * 100;
			$s .= "<div style='width:".$t."%'>";
			$s .= func_get_arg($i);
			$s .= "</div>";
		}
		return $s;
	}

	echo graph(45,34,56,24,12,43);
	
 ?>