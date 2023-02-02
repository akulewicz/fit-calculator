<?php

use Core\BMI;

$height = $_POST['height'];
$weight = $_POST['weight'];

$bmi = new BMI($height, $weight);

$result = $bmi->calculate();

view('bmi/index.view.php', [
    'result' => $result
]);