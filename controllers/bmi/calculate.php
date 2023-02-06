<?php

use Core\BMI;
use Core\Validator;

$errors = [];

$height = $_POST['height'];
$weight = $_POST['weight'];

$errors['height'] = Validator::number($height) ? '' : 'Podaj prawidłowy wzrost';
$errors['weight'] = Validator::number($weight) ? '' : 'Podaj prawidłową wagę';

$invalid = implode($errors);

if(!$invalid) {
    $bmi = new BMI($height, $weight);
    $result = $bmi->calculate();
    $definition = $bmi->getDefinition();
}

view('bmi/index.view.php', [
    'result' => $result ?? '',
    'definition' => $definition ?? '',
    'errors' => $errors,
]);


