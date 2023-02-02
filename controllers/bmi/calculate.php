<?php

use Core\Bmi;

$height = $_POST['height'];
$weight = $_POST['weight'];

$bmi = new BMI($height, $weight);

$result = $bmi->calculate();

dd($result);