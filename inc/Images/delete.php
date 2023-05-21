<?php
require('../database.php');
$db = new Database();

if (isset($_POST['delete_image_submit'])) {
    try {
        $imageIndex = $_POST["delete_image"]; // Index v poli sa počíta od nuly
        $imageIDs = explode(',', $_POST["image_ids"]); // Rozdelíme reťazec na pole
        
        if (isset($imageIDs[$imageIndex])) { // Priraďuje hodnotu ImageIDs na index imageIndex
            $id = $imageIDs[$imageIndex]; // Ak existuje hodnota, priradí sa 
        } else {
            $id = null; // Ak neexistuje hodnota, priradí sa null
        }
        
        if ($id) {
            $conn = $db->conn;
        
            $query = "DELETE FROM images WHERE id = :id";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            
            echo "Picture with ID $id has been removed";
            echo '<br><a href="../../admin.php">Back to Admin</a>';
        } else {
            echo "Invalid image ID";
        }
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
}
?>
