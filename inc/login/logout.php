<?php
    session_start();
     unset($_SESSION["user_name"]);
     unset($_SESSION["user_email"]); 
     echo 'Boli ste odhlásení';
    //session_destroy(); 
    header('URL = index.php');

?>