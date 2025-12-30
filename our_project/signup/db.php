<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dashboard_db";

// Enable Error Reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

try {
    // connect to mysql server first
    $pdo = new PDO("mysql:host=$servername", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Create database if it doesn't exist (This makes it a REAL, persistent database)
    $pdo->exec("CREATE DATABASE IF NOT EXISTS `$dbname`");
    
    // Connect to the specific database
    $pdo->exec("USE `$dbname`");

    // Create users table if it doesn't exist
    $sql = "CREATE TABLE IF NOT EXISTS users (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(50) NOT NULL,
        email VARCHAR(50) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL,
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    $pdo->exec($sql);

} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Start session here so it's available globally
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
