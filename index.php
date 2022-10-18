<?php
session_start();
if(!empty($_SESSION["userId"])) {
    require_once './logIn/view/dashboard.php';
} else {
    require_once './logIn/view/login-form.php';
}
?>