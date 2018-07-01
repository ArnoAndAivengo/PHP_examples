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
