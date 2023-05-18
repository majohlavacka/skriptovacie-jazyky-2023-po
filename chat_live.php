<?php 
 require('inc/functions.php');
 $chatManager = new TextManager();
 $chat = $chatManager->getChat();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Chat</title>
    <link rel="stylesheet" href="css/chat-live.css" />
</head>
<body>

<div class="chat-container">
    <h2>Live Chat</h2>

    <form action="inc/Chat/insert.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
        <label for="message">Message:</label>
        <input type="text" name="message" id="message" required>
        <input type="submit" value="Send">
    </form>

    <h3>Chat History</h3>
    <ul>
        <?php
        // Výpis správ
        foreach ($chat as $message) {
            echo '<li><strong>' . $message['name'] . ':</strong> ' . $message['message'] . '</li>';
        }
        ?>
    </ul>
    <a href="index.php" class="leave-chat-btn">Leave Chat</a>
</div>
    
<!-- <script src="js/chat.js"></script> -->
<script src="js/chat.js"></script>

</body>
</html>
