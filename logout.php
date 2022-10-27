<?php
session_start();
session_destroy();
$_SESSION['status_login_user'] = false;
header("Location: login.php")
?>