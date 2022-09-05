<?php
    include_once __DIR__ . '/user.php';

    class registeredUser extends user{
        protected $discount;

        function __construct($_name,$_mail,$_cart_date,$_discount)
        {
            parent::__construct($_name,$_mail,$_cart_date);
            $this->discount = $_discount;
        }
        public function getDiscount(){
            return $this->discount;
        }
        public function setDiscount($_discount){
            $this->discount = $_discount;
        }
    }
