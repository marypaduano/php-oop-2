<?php

require_once __DIR__.'/Category.php';
require_once __DIR__.'/Food.php';

class Product
{
    public string $name;
    public float $price;
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