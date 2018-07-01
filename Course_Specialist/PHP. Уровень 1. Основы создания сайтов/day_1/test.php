<?php 
	//phpinfo();
	//ini_set("display_error", 1);
	//echo ini_get("display_error");
	//echo "Hello, <mark>world!</mark>";

	// $firstname = "Vasy";
	// $isProgrammer = tRue;
	// echo $firstname, gettype($firstname).'<br />';
	// echo $isProgrammer, gettype($isProgrammer).'<br />';
	// echo true + true + 10; //imiteresting

	// $a = 34;
	// $b = 0xffffff;
	// $c = 36.6;
	// $d = 1e5; //100 000

	// echo gettype($b),$b;

	// Ипотечная задачка
	
	// $S = 22000000;
	// $p = 10.9;
	// $n = 10;
	// $A = 0;

	// $p = $p / 1200; // ставка в долях
	// $n = $n * 12; // Кол-во месяцев

	// $A = $S * $p / (1 - pow(1+$p,-$n));
	// echo $A;

	


	// Строки
	
	// $foo = "foo";

	// $s1 = "строка $foo";
	// $s2 = 'строка $foo';

	// echo $s1,"<br>", $s2,"<br>;

	// $a1 = array(23,45,67);
	// $a2 = [34,56,4444];
	// $a3 = [32,5 => 343,55];

	// echo '<pre>', print_r($a1), '<pre/>';
	// echo '<pre>', var_dump($a3), '<pre/>';

	// $salary = 45000;
	// if ($salary > 67000) {
	// 	echo "Работать";
	// } else
	// 	echo "Учится";





	// расчет скидок с помощью конструкции switch

	// $price = 345;
	// $koef = 1;
	// $day = "Среда";

	// $switch($day){
	// 	case "Понедельник": $koef = .9; break;
	// 	case "Вторник":
	// 	case "Среда":
	// 	case "Четверг": $koef = 1.1; break;
	// 	case "Пятница": $koef = 1; break;
	// 	default: $koef = 1.5; break;
	// }
	// echo $price = $price * $koef;


	
	// циклы

	//select

	$select = "<select name=w";
	for ($i = 0; $i < 10; $i++) {
		$select .= "<option>Пункт $i";
	}
	$select .= "</select>";
	echo $select;


	---------------------------------


	



 ?>