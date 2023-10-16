<?php
$host = 'localhost';
$port = '5433';
$dbname = 'news';
$user = 'root';
$password = 'root';

try {
    $db = new PDO("pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password");
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}
