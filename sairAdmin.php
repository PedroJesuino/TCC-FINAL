<?php
session_start();
if(isset($_SESSION["admin_id"])){
    
    unset($_SESSION["admin_id"]);
    unset($_SESSION["admin_name"]);
    unset($_SESSION["admin_email"]);
    session_destroy();
    header("Location: index.php");
}
?>