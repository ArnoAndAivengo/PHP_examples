<?php
header("Content-Type: text/xml");
$writer = new XMLWriter();
$writer->openMemory();
$writer->startDocument('1.0');

$writer->startElement('catalog');

while($i < 10){
  
    $i++;
    $writer->startElement('book');
    
            $writer->startElement('title');
            $writer->text("Книга $i");
            $writer->endElement();
    
            $writer->startElement('author');
            $writer->text("Автор $i");
            $writer->endElement();
    
            $writer->startElement('pubdate');
            $writer->text("202$i");
            $writer->endElement();
    
            $writer->startElement('price');
            $writer->text($i."340");
            $writer->endElement();
    
    $writer->endElement();
}
$writer->endElement();

$writer->endDocument();
echo $writer->outputMemory();
?>