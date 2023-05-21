<?php
require_once('../database.php');
$db = new Database();
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Mena a hesla z formulára
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username = ? AND password = ?";
    $stmt = $db->conn->prepare($query);
    $stmt->execute([$username, $password]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Ak bol používateľský účet nájdený, nastavíme relačnú premennú
    if ($user) {
        $_SESSION['username'] = $username; // Uchováva informáciu o prihlásenom používateľovi medzi stránkami
        $_SESSION['logged_in'] = true; // Ak sa užívateľ našiel, nastaví na hodnotu true, čím sa označuje, že používateľ je prihlásený
        header('Location: ../../admin.php');
        exit();
    } else {
        // Neplatné prihlasovacie údaje
        echo 'Invalid username or password';
        echo '<br><a href="../../login.php">Back to Login</a>';
    }
}
?>