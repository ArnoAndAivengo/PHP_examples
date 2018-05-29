<?php
/**
 * Книги - товары
 */
class Book 
{
  public $title = "й";
  public $author= "";  
  public $genre = "";  
  public $price = 0; 

  const FORMAT_HTML = "HTML"; 
  const FORMAT_CSV  = "CSV"; 
  
  public function get($format = Book::FORMAT_HTML){
	$method = "get".$format;  
	return $this->$method();  
  }
  public function getHTML(){
	return <<<BOOK
	<h3>{$this->title}</h3>
	<p>Автор: {$this->author}
	<p>Жанр: {$this->genre}
	<p>Цена: {$this->price}руб.
BOOK;
  }	  
}
$books[] = new Book;
$books[] = new Book;
$books[] = new Book;

$books[0]->title  = "PHP";
$books[0]->author = "Автор1";
$books[0]->genre  = "фантастика";
$books[0]->price  = 1200;

$books[1]->title  = "PHP за 24";
$books[1]->author = "Автор2";
$books[1]->genre  = "классика";
$books[1]->price  = 200;

$books[2]->title  = "JS";
$books[2]->author = "Автор3";
$books[2]->genre  = "программирование";
$books[2]->price  = 800;

/*
echo Book::FORMAT_HTML, "<br />";
$tmp = new Book;
$tmp->title = "dfgdfg";
echo $tmp->get(Book::FORMAT_HTML);
*/

foreach($books as $book){
	echo $book->getHTML();
}


?>