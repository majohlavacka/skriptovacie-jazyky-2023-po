<?php
require('../database.php');
$db = new Database();

if (isset($_POST['update_image_submit'])) {
    try {
        $imageID = $_POST['image_id'];
        $imageName = $_POST['image_name'];
        $imagePath = $_POST['image_path'];
        
        $query = "UPDATE images SET name = ?, img = ? WHERE id = ?";
        $stmt = $db->conn->prepare($query);
        $stmt->execute([$imageName, $imagePath, $imageID]);

        echo "Image updated! ";
        echo '<br><a href="../../admin.php">Back to Admin</a>';
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
}
?>
