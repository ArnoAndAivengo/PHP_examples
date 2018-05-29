<?php

spl_autoload_register(function($className){
  include 'classes/' . $className . '.php';   
});

//$goods[] = new \Specialist\Book("PHP","Автор1","фантастика",1200);
$goods[] = new Book("PHP","Автор1","фантастика",1200);
$goods[] = new Book("PHP за 24","Автор2","классика",200);
$goods[] = new Book("JS","Автор3","программирование",800);
$goods[] = clone $goods[0];
$goods[] = new Journal("Наука и жизнь","Автор4","наука",250);
$goods[] = BookFabric::get("MySQL","Автор5","базы данных",2100);

$booksCollection = new BooksCollection($goods);
//print_r($booksCollection->Book);

echo "<p>__toString():",$goods[5],"</p>";
echo "<p>Всего:",Goods::$counter,"</p>";
echo "<p>Всего книг:",Book::$counter,"</p>";
echo "<p>Всего журналов:",Journal::$counter,"</p>";

$goods[5]->someMethod("ISBN...",1000);

foreach($goods as $item){
    echo $item->getHTML();
}

$goods[5]->some = "значение";

$flag = true;
try {
    if($flag){
        throw new Exception("Ошибка...");
    }
} catch (Exception $exc) {
    echo $exc->getMessage(),$exc->getFile(),$exc->getLine();
}

echo $goods[5]();


$instance = new Game;

function some(Goods $a){
    var_dump($a);
}
some($goods[5]);

echo $goods[5]->getPriceWithTax();

echo method_exists($goods[5], "getHTML") ? да : нет ;

foreach($goods[5] as $prop => $value){
    echo "<hr> {$prop} = ${value} <br>";
}

echo "<pre>",print_r(get_declared_classes());

$sfa = SplFixedArray::fromArray($goods);
foreach($sfa as $item){
    $summa += $item->price;
}
echo $summa;
?>