<?php
include __DIR__ . '/classes/products.php';
include __DIR__ . '/classes/user.php';

echo 'prova';
$foodDog = new food('chappy', 'ciccio', 'dog','pollo','secco');
var_dump($foodDog);
$userCostumer = new user('carlo','carlo@becco.it','12/12/2023');
var_dump($userCostumer);




?>
