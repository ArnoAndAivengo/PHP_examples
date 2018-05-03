<?php 

	$night = false;

	if($night) {
		function foo(){echo "ночь";}
		} else {
		function foo() {echo "день";}
		}
	}

	foo();


	function fooDinner() {echo "dinner";}
	function fooBreakfast() {echo "breakfast"}

	$type = "Dinner";
	$foo = "foo".$type;
	$foo();

 ?>