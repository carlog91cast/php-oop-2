<?php
include_once __DIR__ . '/food.php';
include_once __DIR__ . '/game.php';
include_once __DIR__ . '/cleaningProd.php';
include_once __DIR__ . '/user.php';

class products{
    protected $name;
    protected $brand;
    protected $animalGenre;
    protected $price;

    function __construct($_name, $_brand, $_animalGenre, $_price)
    {
        $this->name = $_name;
        $this->brand = $_brand;
        $this->animalGenre = $_animalGenre;
        $this->setPrice($_price);

    }

    public function getName(){
        return $this->name;
    }
    public function setName($_name){
        $this->name = $_name;
    }
    public function getBrand(){
        return $this->brand;
    }
    public function setBrand($_brand){
        $this->brand = $_brand;
    }
    public function getAnimalGenre(){
        return $this->animalGenre;
    }
    public function setAnimalGenre($_animalGenre){
        $this->animalGenre = $_animalGenre;
    }
    public function getPrice(){
        return $this->animalGenre;
    }
    public function setPrice($_price){
        if ($this->discount = 0) {
            $this->price = $_price;
        } else {
            $this->price = ($_price -  $this->discountRegistered) / 100;
        
        }
    }

}




?>