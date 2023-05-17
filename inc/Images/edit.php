<?php
require('../database.php');
$db = new Database();

if (isset($_POST['edit_image_submit'])) {
    try {
        $imageID = $_POST['image_id'];
        $imageName = $_POST['image_name'];
        $imagePath = $_POST['image_path'];

        // Formulár, ktorý sa zobrazí po stlačení update
        echo '
        <form action="update.php" method="post">
            <input type="hidden" name="image_id" value="' . $imageID . '">
            <label for="image_name">Image Name:</label>
            <input type="text" name="image_name" id="image_name" value="' . $imageName . '">
            <label for="image_path">Image Path:</label>
            <input type="text" name="image_path" id="image_path" value="' . $imagePath . '">
            <button type="submit" name="update_image_submit">Update</button>
        </form>
        ';

    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
}
?>
