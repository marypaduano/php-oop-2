<?php

class Category
{
  public string $pet;
  public $figure;
  
  public function __construct($_pet)
  {
  $this->pet = $_pet;
  $this->setFigure($_pet);
  
}
function setFigure($pet){
  if ($pet == 'cat'){
    $figure = '<i class="fas fa-cat"></i>';
  }else if ($pet == 'dog'){
    $figure = '<i class="fas fa-dog"></i>';
  }
  $this->figure = $figure;      

}


}
