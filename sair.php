<?php
session_start();
unset($_SESSION['usuario_name']);
unset($_SESSION['usuario_id']);
unset($_SESSION['usuario_email']);
session_destroy();
header("Location: index.php");
