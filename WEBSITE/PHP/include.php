<?php
// Include van onbekende classes
spl_autoload_register(function ($class_name) {
    require 'classes/' . $class_name . '.php';
});

function e($var) {
    echo htmlspecialchars($var);
}

function s($var) {
    $json = json_encode($var);

    echo base64_encode($json);
}

function redirect($url) {
    header("Location: $url");
}

function dd($var) {
    var_dump($var);
    die();
}