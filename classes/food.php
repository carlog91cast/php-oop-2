<?php
include_once __DIR__ . '/products.php';

class food extends products{
    protected $ingredient;
    protected $type;

    function  __construct($_name, $_brand, $_animalGenre,$_ingredient,$_type){
        parent:: __construct($_name, $_brand, $_animalGenre);
        $this->ingredient = $_ingredient;
        $this->type = $_type;
    }
}




?>