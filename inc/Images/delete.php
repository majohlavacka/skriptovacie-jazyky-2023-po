<?php
require('../database.php');
$db = new Database();

if (isset($_POST['delete_image_submit'])) {
    try {
        $id = $_POST["delete_image"];
        $query = 'DELETE FROM images WHERE id = :id';
        $stmt = $db->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        echo "Picture with ID $id has been removed.";
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
}
?>
