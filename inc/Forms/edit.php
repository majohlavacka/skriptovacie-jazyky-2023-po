<?php
require_once('../database.php');
$db = new Database();

if (isset($_POST['edit_form_submit'])) {
    try {
        $formID = $_POST['form_id'];
        $formName = $_POST['form_name'];
        $formEmail = $_POST['form_email'];
        $formMessage = $_POST['form_message'];

        echo '
        <form action="update.php" method="post">
            <input type="hidden" name="form_id" value="' . $formID . '">
            <label for="form_name">Name:</label>
            <input type="text" name="form_name" id="form_name" value="' . $formName . '">
            <label for="form_email">Email:</label>
            <input type="text" name="form_email" id="form_email" value="' . $formEmail . '">
            <label for="form_message">Message:</label>
            <textarea name="form_message" id="form_message">' . $formMessage . '</textarea>
            <button type="submit" name="update_form_submit">Update</button>
        </form>
        ';

    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
}
?>
