<?php 

	function card($check) {
		static $balance = 1e5;
		if($check <= $balance){
			$balance -= $check;
			echo "Списано $check. ";
			echo "На счету $balance<hr>";
		} else {
			echo "Недостаточно средств. ";
			echo "На счету $balance<hr>";
		}
	}

	card(30000);
	card(69000);
	card(100000);


 ?>