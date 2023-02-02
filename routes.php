<?php

$router->get('/', 'controllers/bmi/index.php');
$router->get('/bmi', 'controllers/bmi/index.php');

$router->post('/', 'controllers/bmi/calculate.php');