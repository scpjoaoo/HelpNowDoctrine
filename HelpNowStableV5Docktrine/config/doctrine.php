<?php
use Doctrine\ORM\ORMSetup;
use Doctrine\ORM\EntityManager;
use Symfony\Component\Cache\Adapter\ArrayAdapter;

// Caminho onde você armazenará suas entidades (classes)
$paths = [__DIR__ . "/../src/Entity"];
$isDevMode = true;

// Configuração do cache usando ArrayAdapter diretamente
$cache = new ArrayAdapter();

// Parâmetros de conexão com o banco de dados
$dbParams = [
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => '',
    'dbname'   => 'helpnow',
    'host'     => '127.0.0.1',
    'port'     => 3306,
    'charset'  => 'utf8mb4',
];

// Configuração do Doctrine com ORMSetup usando attributes
$config = ORMSetup::createAttributeMetadataConfiguration($paths, $isDevMode, null, $cache);

// Instanciando o EntityManager usando o método estático create()
$entityManager = EntityManager::create($dbParams, $config);
