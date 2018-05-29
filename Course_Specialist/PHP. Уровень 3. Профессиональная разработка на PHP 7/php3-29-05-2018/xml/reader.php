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

?>