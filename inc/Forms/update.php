<?php
require('../database.php');
$db = new Database();

if (isset($_POST['update_form_submit'])) {
    try {
        $formID = $_POST['form_id'];
        $formName = $_POST['form_name'];
        $formEmail = $_POST['form_email'];
        $formMessage = $_POST['form_message'];

        $query = "UPDATE form SET name = ?, email = ?, message = ? WHERE id = ?";
        $stmt = $db->conn->prepare($query);
        $stmt->execute([$formName, $formEmail, $formMessage, $formID]);

        echo "Form updated! ";
        echo '<br><a href="../../admin.php">Back to Admin</a>';
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
}
?>
