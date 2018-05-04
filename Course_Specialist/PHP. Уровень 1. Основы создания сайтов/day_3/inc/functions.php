<?php  


/* menu */
function menu($menu) {
  $str = "<ul class='nav'>";
  foreach ($menu as $k => $v)
    $str .= <<<LI
    <li><a href="/?page={$k}">{$v}</a></li>
LI;
     
  $str = $str .= "</ul>";
  return $str;
  }


/* calendar */
function calendar($month, $year) {

  $days = cal_days_in_month(CAL_GREGORIAN, $month, $year);
  $months = ["Январь","Февраль","Март","Апрель","Май","Июнь","Июль","Август","Сетябрь","Октябрь","Ноябрь","Декабрь"];
  
  $wday = getdate(mktime(0,0,0,$month,1,$year))["wday"];
  $wday = ($wday + 6) % 7;

  echo "<table class=\"table\">";
  echo "<caption>", $months[$month - 1]," ",$year,"</caption>";
  for ($i = 0, $k = 1 -$wday; $i < 6; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 7; $j++) {
      echo "<td>", ($k > 0  and $k <= $days) ? $k : "";
      $k++;
    }
  }
  echo "</table>";
}


/* catalog */
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
    "description" => "Дмитрий Котеров, Алексей Костарев  ",  
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

 $key = "price";
 $numSort = function($a,$b) use (&$key) {
  if($a[$key] == $b[$key]) return 0;
  return $a[$key] < $b[$key] ? 1 : -1;
 };
 usort($goods, $numSort);
?>