<?php

function dd($value) {
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    die();
}

function base_path(string $path) {
    return BASE_PATH . $path;
}

function view(string $path) {
    require base_path("views/{$path}");
}