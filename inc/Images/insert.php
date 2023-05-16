<?php
require('../database.php');
$db = new Database();

if (isset($_POST['add_image'])) {
    try {
        $image = $_POST['image'];

        $query = "INSERT INTO images (img) VALUES (?)";
        $stmt = $db->conn->prepare($query);
        $stmt->execute([$image]);

        echo "New picture added ! ";
        echo '<br><a href="../../admin.php">Back to Admin</a>';
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
}
?>
