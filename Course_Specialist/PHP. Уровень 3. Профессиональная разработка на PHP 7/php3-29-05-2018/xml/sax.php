<?php
header("Content-Type: text/html;charset=utf-8");	
	// Создание парсера
	$sax = xml_parser_create("UTF-8");
	// Назначение обработчиков начальных и конечных тегов
	xml_set_element_handler($sax, "startHandler", "endHandler");
	//  Назначение обработчика текстового содержимого
	xml_set_character_data_handler($sax, "textHandler");
	// Функция обработчик начальных тегов
	function startHandler($sax, $tag, $attrs){
            if( !in_array($tag,["CATALOG","BOOK"]) ){
                    echo "<td>";
                    return;
            }
            if( in_array($tag,["BOOK"]) ){
                    echo "<tr>";
                    return;
            }
        }
	// Функция обработчик закрывающих тегов
	function endHandler($sax, $tag){ 
            
        }	
        
	// Функция обработчик текстового содержимого
	function textHandler($sax, $txt){
            echo $txt;
        }
        
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
        xml_parse($sax, file_get_contents("catalog.xml"));
	?>
	</table>
	</body>
</html>