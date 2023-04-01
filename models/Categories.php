<?php

class Category
{
  public $pet;
  public $figure;
  
  public function __construct($_pet, $_figure)
  {
  $this->$pet = $_pet;
  $this->$figure = $_figure;
  
}
}
