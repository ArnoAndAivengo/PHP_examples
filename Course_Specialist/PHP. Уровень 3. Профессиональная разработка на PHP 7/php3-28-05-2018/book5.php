<?php


class Goods 
{
  public $title;
  public $price;  
  public function __construct($title, $price) {
      $this->title = $title;
      $this->price = $price;
  }
}
/**
 * Книги - товары
 */
class Book extends Goods
{
  public $author;  
  public $genre;  

  const FORMAT_HTML = "HTML"; 
  const FORMAT_CSV  = "CSV"; 
  
  public function __construct(
          $title,
          $author,
          $genre,
          $price
  ) {
      parent::__construct($title, $price);
      $this->author = $author;
      $this->genre = $genre;
      echo "Был вызван ",__METHOD__,"<br>";
  }

  public function __destruct() {
      echo $this->title, " удалена... <br>";
      echo "Был вызван ",__METHOD__,"<br>"; 
  }

  public function __clone() {
      echo "Через ",__METHOD__;
      echo " клонирован объект",$this->title,"<br>"; 
  }

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
$books[] = new Book("PHP","Автор1","фантастика",1200);
$books[] = new Book("PHP за 24","Автор2","классика",200);
$books[] = new Book("JS","Автор3","программирование",800);
$books[] = clone $books[0];

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