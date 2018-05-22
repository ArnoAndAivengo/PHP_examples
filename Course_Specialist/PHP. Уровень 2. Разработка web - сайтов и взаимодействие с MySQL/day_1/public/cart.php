<?php 

//Стартуйте сессию
session_start();
 $goods = [
  1 => ["name" => "Товар1","price" => 200],
  2 => ["name" => "Товар2","price" => 300],
  4 => ["name" => "Товар3","price" => 400],
 ];
 

//Убедитесь, что GET-параметр n не пустой и существует ключ в массиве $goods соответствующий полученному параметру
if( 
  isset($_GET["n"]) and
  array_key_exists($_GET["n"],$goods)  
  ){
//Если условие выполняется, добавьте новый товар в сессионную переменную массив basket, увеличие её на единицу значение ключа соответствующего GET
	  
	$_SESSION["basket"][$_GET["n"]]++;  
	$_SESSION["flash" ] = "Товар №{$_GET["n"]} добавлен";
	header("Location: cart.php");  
	die;
  }



?>
<h2>Корзина</h2>
<?php
 if($_SESSION["flash" ]){
	 echo $_SESSION["flash" ];
	 unset($_SESSION["flash" ]);
 }
?>

<pre>
<?
//Выведите содержимое сессионной корзины удобным способом 
print_r($_SESSION["basket"]);
?>
</pre>

<?php 
//Создайте переменную $summa с начальным значением 0
$summa = 0;
//В цикле найдите общую стоимость товаров в корзине
if($_SESSION["basket"])
	foreach($_SESSION["basket"] as $key => $item){
		$summa += $goods[$key]["price"] * $item;
	}
//Выведите строку вида "На сумму $summa руб.<hr>"
echo "На сумму $summa руб.<hr>";
/*Выведите все товары в $goods в формате*/

if($goods)
	foreach($goods as $key => $item):
?>
  <div><strong><?php echo $item["name"]?></strong><br>
  Цена: <?php echo $item["price"]?><br>
  <a href="cart.php?n=<?php echo $key?>">В корзину</a><hr>
  </div>
<?php endforeach; ?>


