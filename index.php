<?php

session_start();
if(!empty($_SESSION["userId"])) {
    header("Location: ./view/dashboard.php");
} else {
    header("Location: ./view/auth/login-form.php");
}
?>