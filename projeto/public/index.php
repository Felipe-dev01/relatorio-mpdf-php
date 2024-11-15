<?php
// Carrega as Config banco de dados
$config = require_once __DIR__ . '/../config/config.php';

// inicializa o banco 
require_once __DIR__ . '/../app/models/Database.php';
$db = (new Database($config)) -> getConnection();

// Inicializa o controlador e gera o PDF
require_once __DIR__ . '/../app/controllers/ProdutoController.php';
$controller = new ProdutoController($db);
$controller -> gerarRelatorioPDF();