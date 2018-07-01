<?php

header("Content-Type: text/html");
header('Content-Disposition: attachment; filename="price.html"');

echo "<table border=1>";
for($i = 0; $i < 100; $i++)
	echo <<<TR
    <tr>
	   <td>Товар№$i
	   <td>Цена $i
	   <td><a href="#">В корзину</a>
TR;
echo "</table>";