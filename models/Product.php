<?php

require_once __DIR__.'/Category.php';
require_once __DIR__.'/Food.php';

class Product
{
    public string $name;
    public float $price;
    public string $description;
    public Category $category;
    public $figure;
   

    public function __construct($_name, $_price, $_description, $_category, $_figure)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->description = $_description;
        $this->Category = $_category;
        // $this->figure = setFigure($newFigure);
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
    function setFigure($newFigure){
        if ($pet == 'cat'){
          $figure = '<i class="fa-regular fa-cat"></i>';
        }else if ($pet == 'dog'){
          $figure = '<i class="fa-regular fa-dog"></i>';
        }
        return
        $this->figure = $newFigure;      
      
}
}