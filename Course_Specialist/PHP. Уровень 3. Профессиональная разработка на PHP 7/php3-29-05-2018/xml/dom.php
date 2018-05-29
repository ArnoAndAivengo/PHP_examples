<?php
header("Content-Type: text/html;charset=utf-8");	
$dom = new DOMDocument('1.0','UTF-8');	
//загрузка документа
$dom->load('catalog.xml');
$root = $dom->documentElement;

//echo $root->nodeName,$root->nodeValue,$root->nodeType;
$books = $root -> childNodes;
?>
<!doctype html>
<html>
	<head>
		<title>Каталог</title>
	</head>
	<body>
	<h1>Каталог книг</h1>
	<table border="1" width="100%">
		<tr>
			<th>Автор</th>
			<th>Название</th>
			<th>Год издания</th>
			<th>Цена, руб</th>
		</tr>
	<?php
	//Парсинг
        $title   = $dom->getElementsByTagName('title');
        $author  = $dom->getElementsByTagName('author');
        $pubyear = $dom->getElementsByTagName('pubyear');
        $price   = $dom->getElementsByTagName('price');
        
        for($i = 0; $i < $title->length; $i++ ){
            echo "<tr>";
            echo "<td>",$author->item($i)->textContent;
            echo "<td>",$title ->item($i)->textContent;
            echo "<td>",$pubyear->item($i)->textContent;
            echo "<td>",$price ->item($i)->textContent;
            
        }
	?>
	</table>
	</body>
</html>
	