<?php
include __DIR__ . '/classes/product.php';
include __DIR__ . '/classes/user.php';

echo 'prova';
$foodDog = new food('chappy', 'ciccio', 'dog','12','pollo','secco');
var_dump($foodDog);
$userCostumer = new user('carlo','carlo@becco.it','12/12/2023');
var_dump($userCostumer);




?>
