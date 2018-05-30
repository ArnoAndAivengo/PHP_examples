<?php
$str = <<<XML
<?xml version='1.0'?>
<catalog>
	<book>
		<title>PHP5</title>
		<author>John Smith</author>
		<price>570</price>
	</book>
	<book>
		<title>PHP and XML</title>
		<author>Mike Doe</author>
		<price>480</price>
	</book>
	<book>
		<title>HTML and CSS</title>
		<author>Ivan Petrov</author>
		<price>320</price>
	</book>
</catalog>
XML;
error_reporting(E_ALL);
$reader = new XMLReader();
$reader->XML($str); //$reader->open("catalog.xml");


while($reader->read()){

//echo "Название элемента: ",$reader->name, "<hr>";
//echo "Содержимое элемента: ",$reader->value, "<hr>";
//echo "Тип элемента: ",$reader->nodeType, "<hr>";
//echo "Глубина элемента: ",$reader->depth, "<hr>";
 if($reader->name == "book"){   echo "<hr>"; }
 if( in_array($reader->name,["title","author","price"])){  
     $node = $reader->expand();
     echo $reader->name,": ",$node->nodeValue, "<br>";
     $reader->read();
     $reader->read();
 }
}
//var_dump($reader->expand());//возвращение DOM-узла










?>