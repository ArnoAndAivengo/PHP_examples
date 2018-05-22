<?php


define("AUTHOR", "Алексей");
define("YEAR", strftime("%Y"));

$hour = (int) strftime("%H");
$className = ( $hour > 7 and $hour <= 18) ? "default":"inverse";



$goods = [
[
"title" => "Разработка веб-приложений с помощью PHP и MySQL",
"description" => "Люк Веллинг, Лаура Томсон",
"price" => 1280
],
[
"title" => "PHP. Объекты, шаблоны и методики программирования",
"description" => "Мэтт Зандстра",
"price" => 2124
],
[
"title" => "PHP5",
"description" => "Дмитрий Котеров, Алексей Костарев ",
"price" => 543
],
[
"title" => "PHP и MySQL Исчерпывающее руководство",
"description" => "Бретт Маклафлин",
"price" => 638
],
[
"title" => "Head First PHP & MySQL",
"description" => "Lynn Beighley, Michael Morrison",
"price" => 2310
]
];

$menu = [
    "index" => "Главная",
    "catalog" => "Каталог",
    "feedback" => "Поддержка",
    "log" => "Журнал",
    "test" => "Тестовый",
    ];

for($i = 1; $i <= 12; $i++)
 $table .= calendar(strftime("%Y"), $i);