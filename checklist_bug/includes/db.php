<?php
$host = 'localhost';
$db = 'checklist_db';
$user = 'root'; // Change this to your MySQL username
$pass = '';     // Change this to your MySQL password

$dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    echo 'Database connection failed: ' . $e->getMessage();
}
?>
