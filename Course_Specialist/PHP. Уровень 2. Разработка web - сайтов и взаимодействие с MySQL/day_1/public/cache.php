<?php

function mycache($buffer){
	$file = "cache.tmp";
	if(
	  file_exists($file ) and
	  md5(file_get_contents($file)) == md5($buffer)
	){
	  return "Из буфера:".file_get_contents($file);
	}else {
	  file_put_contents($file,$buffer );	
      return $buffer;
	}
}

ob_start("mycache");
echo "<table border=1>";
for($i = 0; $i < 100; $i++)
	echo <<<TR
    <tr>
	   <td>Товар№$i
	   <td>Цена $i
	   <td><a href="#">В корзину</a>
TR;
echo "</table>";
ob_end_flush();