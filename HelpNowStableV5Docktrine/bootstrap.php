<?php
// bootstrap.php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

// Paths to your entities or mapping files
$paths = [__DIR__ . "/src/Mapping"]; // Adjust this path to where your XML files are
$isDevMode = true;

// Configuration for XML mapping
$config = Setup::createXMLMetadataConfiguration($paths, $isDevMode);

// Database connection parameters
$conn = [
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => '',
    'dbname'   => 'helpnow',
    'host'     => '127.0.0.1',
    'port'     => 3306,
    'charset'  => 'utf8mb4',
];

// Obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);
