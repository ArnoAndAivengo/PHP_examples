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

foreach($books as $book){
	echo <<<BOOK
	<h3>{$book->title}</h3>
	<p>Автор: {$book->author}
	<p>Жанр: {$book->genre}
	<p>Цена: {$book->price}руб.
BOOK;
}


?>