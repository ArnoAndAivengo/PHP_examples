<?php

interface IGoods {
  public function getHTML();
  public function getCSV();
  public function getJSON();
}

abstract class Goods 
{    
  const FORMAT_HTML = "HTML"; 
  const FORMAT_CSV  = "CSV"; 
  
  public $title;
  public $price;  
  protected $goodsType = "товар";  
  private $some = 234;  
  static $counter;
  
  public function __construct($title, $price) {
      $this->title = $title;
      $this->price = $price;
      self::$counter++;
  }
  abstract function get();
  
  public function getGoodsType(){
      return $this->goodsType;
  }
}

/**
 * Журналы - товары
 */
class Journal extends Goods
{
  public $author;  
  public $genre;  
  static $counter = 0;
  
  public function __construct(
          $title,
          $author,
          $genre,
          $price
  ) {
      parent::__construct($title, $price);
      $this->author = $author;
      $this->genre = $genre;
      self::$counter++;
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

  public function get($format = Goods::FORMAT_HTML){
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
/**
 * Книги - товары
 */
/*interface IGoods {
  public function getHTML();
  public function getCSV();
  public function getJSON();
}
*/
 class Book extends Goods implements IGoods
{
  public $author;  
  public $genre;  
  static $counter = 0;
  
  final public function getCSV(){}
  final public function getJSON(){}
  
  public function __construct(
          $title,
          $author,
          $genre,
          $price
  ) {
      parent::__construct($title, $price);
      $this->author = $author;
      $this->genre = $genre;
      self::$counter++;
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

  public function __call($name, $arguments) {
      echo "<p>Был вызван $name";
      echo "<pre>",print_r($arguments),"</pre>";
  }
  
  final public function get($format = Goods::FORMAT_HTML){
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
class BookFabric
{
    static function get($title,$author,$genre,$price){
        return new Book($title,$author,$genre,$price);
    }
}
class BooksCollection
{
    const BOOK    = "Book";
    const JOURNAL = "Journal";
    
    private $data = [];
    public function __construct(array $data){
        $this->data = $data;
    }
    function __get($type = BooksCollection::BOOK){
        $arr = [];
        foreach($this->data as $item)
            if(get_class($item) == $type)
                array_push($arr,$item);
        return $arr;
    }
}

$goods[] = new Book("PHP","Автор1","фантастика",1200);
$goods[] = new Book("PHP за 24","Автор2","классика",200);
$goods[] = new Book("JS","Автор3","программирование",800);
$goods[] = clone $goods[0];
$goods[] = new Journal("Наука и жизнь","Автор4","наука",250);
$goods[] = BookFabric::get("MySQL","Автор5","базы данных",2100);
$booksCollection = new BooksCollection($goods);
//print_r($booksCollection->Book);
echo "<p>Всего:",Goods::$counter,"</p>";
echo "<p>Всего книг:",Book::$counter,"</p>";
echo "<p>Всего журналов:",Journal::$counter,"</p>";

$goods[5]->someMethod("ISBN...",1000);

foreach($goods as $item){
    echo $item->getHTML();
}

$goods[5]->some = "значение";

/*$goods1 = new Goods("foo",1000);
echo "<p>",$goods1->title;
echo "<p>",$goods[1]->getGoodsType();
echo "<p>",$goods[1]->some;*/

$flag = true;
try {
    if($flag){
        throw new Exception("Ошибка...");
    }
} catch (Exception $exc) {
    echo $exc->getMessage(),$exc->getFile(),$exc->getLine();
}



?>