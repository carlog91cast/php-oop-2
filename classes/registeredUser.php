<?php
    include_once __DIR__ . '/user.php';

    class registeredUser extends user{
        protected $discountRegistered = 20;
        function __construct($_name,$_mail,$_cart_date,$_discountRegistered)
        {
            parent::__construct($_name,$_mail,$_cart_date);
            $this->setDiscount($_discountRegistered);
        }
        public function getDiscount(){
            return $this->discountRegistered;
        }
        public function setDiscount($_discountRegistered){
            $this->discountRegistered = $_discountRegistered;
        }
    }
