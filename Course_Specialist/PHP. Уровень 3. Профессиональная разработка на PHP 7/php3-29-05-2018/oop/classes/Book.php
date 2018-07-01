<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of newPHPClass
 *
 * @author student
 */

 class Book extends Goods implements IGoods
{
  use Tax;
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
  
  public function __invoke() {
      return json_encode($this);
  }
  
  public function __toString() {
      return $this->title;
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