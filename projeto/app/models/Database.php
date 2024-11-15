<?php
class  Database {
    private $conn;

    public function __contruct($config) {
        try {
            $this -> conn = new PDO("mysql:host=" . $config['host'] . ";dbname=" . $config['db_name'], $config['username'], $config['password']);
            $this -> conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            echo "Erro na conexão " . $exception -> getMessage();
        }
    }

    public function getConnection() {
        return $this -> conn;
    }
}