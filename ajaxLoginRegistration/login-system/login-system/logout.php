<?php

session_start();
unset($_SESSION['id']);

if (session_destroy()) {
    header("Location: login.php");
}
?>