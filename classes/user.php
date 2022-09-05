<?php
class user {
    protected $name;
    protected $mail;
    protected $cart_date;
    
    protected $choosenProducts = [];

    function __construct($_name,$_mail,$_cart_date)
    {
        $this->name = $_name;
        $this->mail = $_mail;
        $this->cart_date = $_cart_date;
    }

    public function GetName(){
        return $this->name;
    }

    public function GetMail(){
        return $this->mail;
    }
    public function GetCartDate(){
        return $this->cart_date;
    }

    public function addProds($product){
        array_push($this->choosenProducts,$product);
    }
}





?>