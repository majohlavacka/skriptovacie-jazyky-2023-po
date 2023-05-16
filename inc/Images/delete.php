<?php
require('../database.php');
$db = new Database();

if (isset($_POST['delete_image_submit'])) {
    try {
        $imageIndex = $_POST["delete_image"] - 1; // Index v poli sa počíta od nuly
        $imageIDs = explode(',', $_POST["image_ids"]); // Rozdelíme reťazec na pole
        
        $id = $imageIDs[$imageIndex] ?? null; // Získanie ID podľa indexu, pomocou ?? sa pýtam či existuje hodnota s daným indexom
        
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
