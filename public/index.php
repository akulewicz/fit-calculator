<?php 

const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . 'functions.php';

spl_autoload_register(function ($class) {
    require base_path("Core/{$class}.php");
});

$router = new Router();

require base_path('routes.php');

$uri = $_SERVER['REQUEST_URI'];

$router->route($uri);

$bmi = new BMI(93, 183);

