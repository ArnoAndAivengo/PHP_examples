<?php

define("AUTHOR", 'Alex Obukhov');
define("YEAR", strftime("%Y"));
$current = strftime("%d-%m-%Y");

$menu = [
  "index" => "Главная",
  "catalog" => "Каталог",
  "feedback" => "Обратная связь",
  "calendar" => "Календарь",
  "calculator" => "Калькулятор",
];


/* Смена цвета navbar */

$hours = (strftime("%H") + 3) % 24; //14 -> 11
$navbarLight = "";

$navbarLight = $hours > 22 or $hours < 6 ? "inverse" : "default";

  

?>