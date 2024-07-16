<?php
require_once 'Product.php';
require_once 'PersistenceInterface.php';
require_once 'ProductRepository.php';
require_once 'Database.php';
require_once 'DatabaseAdapter.php';
require_once 'JsonFileAdapter.php';

$product = new Product();
$product->id = 1;
$product->designation = "Exemple de produit";
$product->univers = "Test";
$product->price = 9999;

// Utilisation avec la base de données
$database = new Database();
$connection = new \PDO('mysql:host=localhost;dbname=test', 'user', 'password');
$databaseAdapter = new DatabaseAdapter($database, $connection);
$repository = new ProductRepository($databaseAdapter);
$repository->save($product);

// Utilisation avec le fichier JSON
$jsonAdapter = new JsonFileAdapter('products.json');
$repository = new ProductRepository($jsonAdapter);
$repository->save($product);