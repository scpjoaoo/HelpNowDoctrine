<?php
require_once "../vendor/autoload.php";
require_once "../config/doctrine.php";

use Doctrine\ORM\Tools\SchemaTool;

try {
    $schemaTool = new SchemaTool($entityManager);
    echo "Conexão com o Doctrine e o banco de dados realizada com sucesso!";
} catch (Exception $e) {
    echo "Erro ao conectar: " . $e->getMessage();
}
