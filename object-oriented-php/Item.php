<?php

class Item {
  CONST MAX_ORDERS = 24;
  public $name;
  public $description;
  public $price = 199;
  private $rating;

  public static $count = 0;
//constructor 
  public function __construct($name,$description,$price, $rating) {
      $this->name = $name;
      $this->description = $description;
      $this->price = $price;
      $this->rating = $rating;

      static::$count++ ;
  }

  public static function showCount(){
    echo static::$count ;
  }

  public function getContent(){
     return "New Stock in ". $this->name ." includes ". $this->description ." starting at ". $this->price ;
  }
  public function getRating(){
    return $this->rating;
  }
}