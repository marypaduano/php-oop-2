<?php

require_once __DIR__.'/models/Categories.php'

class Product
{
    public string $name;
    public INT $price;
    public string $description;
   

    public function __construct($_name, $_price, $_description)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->description = $_description;
    }

    function getName() {
        return $this->name;
      }

    function getDescription() {
        return $this->description;
      }
    function getPrice() {
        return $this->price;
      }
      
}