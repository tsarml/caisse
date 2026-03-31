<?php
session_start();
require 'vendor/autoload.php';
require 'config/database.php';


Flight::route('GET /', function() {
    $controller = new app\controllers\CaisseController();
    $controller->index();
});

Flight::route('POST /caisse/choisir', function() {
    $controller = new app\controllers\CaisseController();
    $controller->choisir();
});
#


Flight::start();