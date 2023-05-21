<?php
session_start();

// Zruší všetký nastavené premenné
$_SESSION = array();

// Zničí relácie
session_destroy();

header('Location: ../../login.php');
exit();
?>
