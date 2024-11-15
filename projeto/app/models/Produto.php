<?php
require_once 'Database.php';

class Produto {
    private $conn;
    private $table = 'produtos';

    public function __construct($db) {
        $this -> conn = $db;
    } 
    
    public function listarProdutos() {
        $query = "SELECT * FROM " . $this -> table;
        $stmt = $this -> conn -> prepare($query);
        $stmt -> execute();

        return $stmt ->fetchALL(PDO::FETCH_ASSOC);
    }
}