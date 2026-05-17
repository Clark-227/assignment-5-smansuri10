<?php
// Database connection settings
$host = 'localhost';
$dbname = 'ideajam';   // your IdeaJam database name
$username = 'root';    // your MySQL username
$password = '';        // your MySQL password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
