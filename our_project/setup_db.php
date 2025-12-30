<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dashboard_db";

error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<h1>Database Setup Status</h1>";

try {
    // Connect to MySQL
    $pdo = new PDO("mysql:host=$servername", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<p style='color:green'>✔ Connected to MySQL server successfully.</p>";

    // Create Database
    echo "<p>Attempting to create database '$dbname'...</p>";
    $pdo->exec("CREATE DATABASE IF NOT EXISTS `$dbname`");
    echo "<p style='color:green'>✔ Database '$dbname' created or already exists.</p>";

    // Select Database
    $pdo->exec("USE `$dbname`");
    echo "<p style='color:green'>✔ Selected database '$dbname'.</p>";

    // Create Table
    echo "<p>Attempting to create 'users' table...</p>";
    $sql = "CREATE TABLE IF NOT EXISTS users (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(50) NOT NULL,
        email VARCHAR(50) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL,
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    $pdo->exec($sql);
    echo "<p style='color:green'>✔ Table 'users' created or already exists.</p>";

    echo "<h2 style='color:blue'>SETUP COMPLETE! The database is real and ready.</h2>";
    echo "<p>You can now go to <a href='register.php'>Register</a> or <a href='login.php'>Login</a>.</p>";
} catch (PDOException $e) {
    echo "<h2 style='color:red'>SETUP FAILED</h2>";
    echo "<p>Error: " . $e->getMessage() . "</p>";
}
