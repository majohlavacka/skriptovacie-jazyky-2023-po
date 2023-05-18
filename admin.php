<?php
require_once('inc/functions.php');
$textManager = new TextManager();
$images = $textManager->getImages();
$imageIDs = $textManager->get_ID_images();
$imageNames = $textManager->getTextImages();
$textID = 10;
$textName = $textManager->get_text_name($textID);
$forms = $textManager->getForms();
$chat = $textManager->getChat();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $textName?></title>
    <link rel="stylesheet" href="css/admin-interface.css" />
</head>
<body>
    <section>
        <h1><?php echo $textName?></h1>
    </section>

    <section>
        <h2>Images</h2>
        <form action="inc/Images/insert.php" method="post">
            <input type="text" name="name" id="name" placeholder="Image Name">
            <input type="text" name="image" id="image" placeholder="Image Path">
            <input type="submit" value="Add" name="add_image">
        </form>

        <br>
        <table>
        <?php
            foreach ($images as $index => $image) {
                echo '<tr>';
                echo '<td><img width="150" src="' . $image . '"></td>';
                echo '<td>' . $imageNames[$index] . '</td>';
                echo '<td>';
                echo '<form action="inc/Images/delete.php" method="post">';
                echo '<input type="hidden" name="delete_image" value="' . ($index + 1) . '">';
                echo '<input type="hidden" name="image_ids" value="' . implode(',', $imageIDs) . '">';
                echo '<button type="submit" name="delete_image_submit">Delete</button>';
                echo '</form>';
                echo '</td>';
                echo '<td>';
                echo '<form action="inc/Images/edit.php" method="post">';
                echo '<input type="hidden" name="image_id" value="' . $imageIDs[$index] . '">';
                echo '<input type="hidden" name="image_name" value="' . $imageNames[$index] . '">';
                echo '<input type="hidden" name="image_path" value="' . $image . '">';
                echo '<button type="submit" name="edit_image_submit">Edit</button>';
                echo '</form>';
                echo '</td>';
                echo '</tr>';
            }
        ?>
        </table>   
    </section>

    <section>
    <h2>Forms</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
            </tr>
            <?php 
            foreach ($forms as $form) {
                echo '<tr>';
                echo '<td>' . $form['id'] . '</td>';
                echo '<td>' . $form['name'] . '</td>';
                echo '<td>' . $form['email'] . '</td>';
                echo '<td>' . $form['message'] . '</td>';
                echo '<td>';
                echo '<form action="inc/Forms/delete.php" method="post">';
                echo '<input type="hidden" name="delete_form" value="' . $form['id'] . '">';
                echo '<button type="submit" name="delete_form_submit">Delete</button>';
                echo '</form>';
                echo '</td>';
                echo '<td>';
                echo '<form action="inc/Forms/edit.php" method="post">';
                echo '<input type="hidden" name="form_id" value="' . $form['id'] . '">';
                echo '<input type="hidden" name="form_name" value="' . $form['name'] . '">';
                echo '<input type="hidden" name="form_email" value="' . $form['email'] . '">';
                echo '<input type="hidden" name="form_message" value="' . $form['message'] . '">';
                echo '<button type="submit" name="edit_form_submit">Edit</button>';
                echo '</form>';
                echo '</td>';
                echo '</tr>';
            }?>
        </table>
    </section>

    <section>
        <h2>Live Chat</h2>
        <form action="inc/Chat/admin_insert.php" method="post">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" placeholder="Name">
            <label for="message">Message:</label>
            <input type="text" name="message" id="message" placeholder="Name" required>
            <input type="submit" value="Send">
        </form>

        <table>
            <tr>
                <th>Name</th>
                <th>Message</th>
            </tr>
            
            <?php
                foreach ($chat as $message) {
                    echo '<tr>';
                    echo '<td><strong>' . $message['name'] . '</strong>' . '</td>';
                    echo '<td>' . $message['message'] . '</td>';
                    echo '</tr>';
                }
            ?>
        </table>

        <form action="inc/Chat/delete.php" method="post">
            <input type="submit" name="delete_chat_submit" value="Delete Chat History">
        </form>
    </section>


    <!-- <script src="js/chat.js"></script> -->
    <script src="js/chat.js"></script>

</body>
</html>
