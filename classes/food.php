<?php
include_once __DIR__ . '/products.php';

class food extends products{
    protected $ingredient;
    protected $type;

    function  __construct($_name, $_brand, $_animalGenre, $_price,$_ingredient,$_type){
        parent:: __construct($_name, $_brand, $_animalGenre, $_price);
        $this->ingredient = $_ingredient;
        $this->type = $_type;
    }
    public function getIngredient(){
        return $this->ingredient;
    }
    public function setIngredient($_ingredient){
        $this->ingredient = $_ingredient;
    }
    public function getType(){
        return $this->type;
    }
    public function setType($_type){
        $this->type = $_type;
    }
}





?>