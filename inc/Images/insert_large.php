<?php
require('../database.php');
$db =  new Database();

if(isset($_POST['add_image_large'])){
    $name_large = $_POST['name_large'];
    $image_large = $_POST['image_large'];

    $query = "INSERT INTO images_large (name, img) VALUES (?, ?)";
    $stmt = $db->conn->prepare($query);
    $stmt->execute([$name_large, $image_large]);
}

?>