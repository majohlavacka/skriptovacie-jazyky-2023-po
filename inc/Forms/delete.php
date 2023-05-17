<?php
require_once('../database.php');
$db = new Database();

if (isset($_POST['delete_form_submit'])) {
    try {
        $formID = $_POST['delete_form'];

        // Odstráni záznam z databázy
        $query = "DELETE FROM form WHERE id = ?";
        $stmt = $db->conn->prepare($query);
        $stmt->execute([$formID]);

        echo "Form deleted!";
        echo '<br><a href="../../admin.php">Back to Admin</a>';
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
}
?>
