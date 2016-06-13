<?php
session_start();
unset($_SESSION['admin_name']);
header('Location:login_admin.php');

?>

