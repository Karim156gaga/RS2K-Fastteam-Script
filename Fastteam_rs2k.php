<?php
// Chemin du fichier RS2K.js
$file_path = __DIR__ . '/RS2K.js';

// Clé d'authentification attendue
$expected_auth_key = '121212';

// Vérification de la clé d'authentification
if (!isset($_GET['key']) || $_GET['key'] !== $expected_auth_key) {
    header('HTTP/1.0 403 Forbidden');
    die('Va voir ailleurs ');
}

// Autoriser l'accès depuis toutes les origines
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization");

// Serveur du fichier avec le bon en-tête
header('Content-Type: application/javascript');
readfile($file_path);
?>

