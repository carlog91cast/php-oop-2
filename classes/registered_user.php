<?php
    include_once __DIR__ . '/user.php';

    class registeredUser extends user{
        protected $discount;

        function __construct($_name,$_mail,$_cart_date,$_discount)
        {
            parent::__construct($_name,$_mail,$_cart_date,$_discount);
            $this->discount = 20;
        }
        public function GetDiscount(){
            return $this->discount;
        }
    }
