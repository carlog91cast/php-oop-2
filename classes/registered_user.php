<?php
    include_once __DIR__ . '/user.php';

    class registeredUser extends user{
        protected $discount;

        function __construct($_discount)
        {
            parent::__construct($_name,$_mail,$_cart_date);
            $this->discount = 20;
        }
    }
