<?php
namespace App\Controllers;

use App\Models\Caisse;

class CaisseController  {
    private $model;

    public function __construct() {
        $this->model = new Caisse();
    }

    public function index() {
        $caisses = $this->model->getAll();
        $view = 'app/views/caisse/index.php';
        require 'app/views/layouts/main.php';
    }

    public function choisir() {
        $caisse_id = Flight::request()->data->caisse_id;
        session_start();
        $_SESSION['caisse_id'] = $caisse_id;
        $caisse = $this->model->getById($caisse_id);
$_SESSION['caisse_libelle'] = $caisse['numero'];    
    Flight::redirect('/achat');
    }
}
