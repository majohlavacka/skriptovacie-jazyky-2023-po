<?php
require_once('../database.php');
$db = new Database();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $name = $_POST['name'];
        $message = $_POST['message'];

        $query = "INSERT INTO chat (name, message) VALUES (?, ?)";
        $stmt = $db->conn->prepare($query);
        $stmt->execute([$name, $message]);

        // Presmerovanie na stránku chat_live.php
        header("Location: ../../chat_live.php");
        exit();
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
}
?>
