<?php 
	
	echo str_repeat("fa-",5),"<hr><pre>";

	$str = "   test   ","<hr>";
	echo "'",$str,"'","<hr>";
	echo "'",ltrim($str),"'<hr>";
	echo "'",rtrim($str),"'<hr>";
	echo "'",trim($str),"'<hr>";


	print_r(explode( " ","Whats your name?"));
	echo "<hr>";

	print_r(explode( " ","Whats your name?"));
	echo "<hr>";
	
	print_r(implode( " ",["Whats your name?"]));
	echo "<hr>";

	print_r(str_replace( " ","a"],"|", "Whats your name?"));
	echo "<hr>";

	$num = 456;
	$d = "here";
	printf("%d monkeys are %s", $num, $d);
	echo "<hr>";

	strip_tags("Hello <mark>my</mark> friends!", "<mark>");
	echo "<hr>";

	$tags = ["mark","strong"];
	foreach ($tags as &$value)
		$value = "<$value>";
		$tags = implode("",$tags);
	strip_tags("Hello <mark>my</mark> <strong>friends!</strong>", "<mark>");
	echo "<hr>";


	echo strpos("Hello my friends!", "friends");
	echo "<hr>";


	echo substr("Ehal Sasha po schosse", 5,9);
	echo "<hr>";


	/*
	* 1 взять математический рефера на vesna.yandex.ru
	* 2 найти кол-во слов "интеграл" в этом тексте
	* выделить их тегами <mark>
	*/


	$referat = <<<TEXT
		Реферат по математике
Тема: «Дифференциальное исчисление как высшая арифметика»
Относительная погрешность категорически поддерживает анормальный определитель системы линейных уравнений. Если после применения правила Лопиталя неопределённость типа 0 / 0 осталась, бином Ньютона естественно порождает расходящийся ряд. Ряд Тейлора, исключая очевидный случай, отображает косвенный график функции многих переменных. Аффинное преобразование монотонно.

Линейное программирование, не вдаваясь в подробности, стремительно уравновешивает эмпирический расходящийся ряд. Полином концентрирует изоморфный экстремум функции. Нечетная функция нейтрализует отрицательный степенной ряд. Неравенство Бернулли существенно соответствует отрицательный расходящийся ряд, в итоге приходим к логическому противоречию. Степенной ряд, исключая очевидный случай, восстанавливает скачок функции. Подынтегральное выражение монотонно.

Интересно отметить, что определитель системы линейных уравнений реально притягивает расходящийся ряд, откуда следует доказываемое равенство. Пустое подмножество последовательно. Ряд Тейлора, не вдаваясь в подробности, осмысленно проецирует определитель системы линейных уравнений. Нормальное распределение последовательно усиливает контрпример. Представляется логичным, что начало координат восстанавливает математический анализ.

TEXT;

echo "Кол-во слов: ",substr_count($referat,"интеграл"),"<hr></pre>";
echo "Текст: ", str_replace("интеграл","<mark>интеграл</mark>",$referat),"<hr>";



 ?>