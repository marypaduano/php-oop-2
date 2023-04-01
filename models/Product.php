<?php

require_once __DIR__.'/Categories.php';

class Product
{
    public string $name;
    public INT $price;
    public string $description;
    public Category $category;
   

    public function __construct($_name, $_price, $_description, $_category)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->description = $_description;
        $this->category = $_category;
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