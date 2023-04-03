<?php

require_once __DIR__.'/Product.php';

class Food extends Product
{
    public string $ingredients;
    public INT $calories;
    public string $type;
   

    public function __construct($_name, $_price, $_description, $_category, $_ingredients, $_calories, $_type)
    {
       parent::__construct($_name, $_price, $_description, $_category);
        $this->ingredients = $_ingredients;
    }

    function getIngredients($ingredients)
    {
        if ($ingredients === ''){
            return 'Non ci sono informazioni sugli ingredienti';
        }
        return 'Ingredienti: '.$ingredients;
    }
      
}