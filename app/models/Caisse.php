<?php
namespace App\Models;

class Caisse {
    private $db;

     public function __construct() {
    require_once __DIR__ . '/../../config/database.php';
    $this->db = getDB();
}
   
    public function getAll() {
        $stmt = $this->db->query("SELECT * FROM caisse");
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM caisse WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

   
}