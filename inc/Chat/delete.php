<?php
require_once('../database.php');
$db = new Database();

if (isset($_POST['delete_chat_submit'])) {
    try {
        $query = "DELETE FROM chat";
        $stmt = $db->conn->prepare($query);
        $stmt->execute();

        header("Location: ../../admin.php");
        exit();
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
}
?>
