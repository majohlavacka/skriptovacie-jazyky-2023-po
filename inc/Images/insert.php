<?php
require('../database.php');
$db = new Database();

if (isset($_POST['add_image'])) {
    try {
        $image = $_POST['image'];

        $query = "INSERT INTO images (img) VALUES (?)";
        $stmt = $db->conn->prepare($query);
        $stmt->execute([$image]);

    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
}
?>
