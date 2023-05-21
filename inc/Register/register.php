<?php
require_once('../database.php');
$db = new Database();
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Skontrolujte, či používateľské meno už neexistuje
    $query = "SELECT * FROM users WHERE username = ?";
    $stmt = $db->conn->prepare($query);
    $stmt->execute([$username]);
    $existingUser = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($existingUser) {
        // Ak používateľ s rovnakým používateľským menom už existuje, ukáže hlášku
        echo 'Username already exists. Go back !';
        echo'<a href="login.php">Back to Admin</a>';
    } else {
        // Ak neexistuje, vloží nového do tabuľky users
        $query = "INSERT INTO users (username, password) VALUES (?, ?)";
        $stmt = $db->conn->prepare($query);
        $stmt->execute([$username, $password]);

        echo 'Registration successful.';
        echo '<br><a href="../../login.php">Back to Admin</a>';
    }
}
?>