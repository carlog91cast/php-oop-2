<?php 

include_once __DIR__ . '/products.php';
class cleaningProd extends products{
    protected $weight;
    protected $bodyPart;

    function  __construct($_name, $_brand, $_animalGenre,$_weight,$_bodyPart){
        parent:: __construct($_name, $_brand, $_animalGenre);
        $this->weight = $_weight;
        $this->bodyPart = $_bodyPart;
    
    }
    public function getWeight(){
        return $this->weight;
    }
    public function setWeight($_weight){
        $this->weight = $_weight;
    }
    public function getBodyPart(){
        return $this->bodyPart;
    }
    public function setBodyPart($_bodyPart){
        $this->bodyPart = $_bodyPart;
    }
}







?>