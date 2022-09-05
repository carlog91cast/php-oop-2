<?php 

include_once __DIR__ . '/product.php';
class games extends products{
    protected $shape;
    protected $color;
    protected $function;

    function  __construct($_name, $_brand, $_animalGenre,$_price,$_shape,$_color,$_function){
        parent:: __construct($_name, $_brand, $_animalGenre, $_price);
        $this->shape = $_shape;
        $this->color = $_color;
        $this->function = $_function;
    }
    public function getShape(){
        return $this->shape;
    }
    public function setShape($_shape){
        $this->shape = $_shape;
    }
    public function getColor(){
        return $this->color;
    }
    public function setColor($_color){
        $this->color = $_color;
    }
    public function getFunction(){
        return $this->type;
    }
    public function setFunction($_function){
        $this->function = $_function;
    }
}





?>