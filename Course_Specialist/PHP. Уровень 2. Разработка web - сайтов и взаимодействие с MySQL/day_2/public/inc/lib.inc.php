<?php

/**
 * Находит аннуитетный платёж
 * @param double тело кредита
 * @param double процентная ставка годовых
 * @param double кол-во лет
 * @return double платёж за месяц
 */ 
function ipoteka($S=2e6,$p=13,$n=25){
    $p = $p / 12;
    $p = $p / 100;
    $n = $n * 12;
    
    $A = $S * $p / (1 - pow(1+$p,-$n));
    return round($A,2);
}


function calendar($year, $month){
  $months = [1=>"Январь","Февраль","Март",
  "Апрель","Май","Июнь","Июль","Август","Сентябрь",
  "Октябрь","Ноябрь","Декабрь"];
  
  $days = cal_days_in_month(CAL_GREGORIAN, $month, $year);
  
  $start = mktime(0,0,0,$month,1,$year);//временная метка
  $wday = getdate($start)["wday"];
  $wday = ($wday + 6) % 7;
  
  $table = "<table class=\"table\">";
  $table .= "<caption>".$months[$month]." $year</caption>"; 
  $k = 1 - $wday;
  for($i = 0; $i < 6; $i++){
    $table .= "<tr>";  
    for($j = 0; $j < 7; $j++){
      $table .=  "<td>";
      if($k > 0 and $k <= $days)
        $table .=  $k;
      $k++;
    }
  }
  return $table .= "</table>";
}


	function menu($menu, $page = "index"){
  		$ul = "<ul class=\"nav\">";
  		
  		foreach($menu as $url => $link){
  		if($url == $page) 
  		  $active = " class='active' ";
  		else
  		  $active = "";
  		  
  		$ul .= <<<LI
  	  <li $active ><a href="index.php?page={$url}">{$link}</a></li>	
LI;
  		}		
  		return $ul .= "</ul>";
		}