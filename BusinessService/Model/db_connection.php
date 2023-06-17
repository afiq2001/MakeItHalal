<?php
// Database credentials
$host = 'localhost';
$dbname = 'make_it_halal';
$usernameDB = 'root';
$passwordDB = 'admin';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $usernameDB, $passwordDB);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
