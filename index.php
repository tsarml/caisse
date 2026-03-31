<?php
session_start();
require 'app/views/layouts/main.php';
require 'vendor/autoload.php';
require 'config/database.php';


Flight::route('GET /', function() {
    $controller = new App\Controllers\CaisseController();
    $controller->index();
});

Flight::route('POST /caisse/choisir', function() {
    $controller = new App\Controllers\CaisseController();
    $controller->choisir();
});
#


Flight::start();