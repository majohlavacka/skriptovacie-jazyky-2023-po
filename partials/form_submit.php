<?php
require_once('../inc/database.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['contact_name'];
    $email = $_POST['contact_email'];
    $message = $_POST['contact_message'];

    // Vytvorenie pripojenia k databáze
    $database = new Database();
    $conn = $database->conn;

    // Príprava a vykonanie SQL príkazu pre vloženie údajov do tabuľky "form"
    $query = "INSERT INTO form (name, email, message) VALUES (:name, :email, :message)";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':message', $message);
    $stmt->execute();

    // Pokiaľ všetko prebehne v poriadku, budeme presmerovaný na stranku s poďakovaním
    header("Location: ../thankyou.php");
    exit();

} else {
    // Prípad, keď súbor bol priamo prístupný bez odoslaného formulára
    echo "Invalid access!";
}
?>
