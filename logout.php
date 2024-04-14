<?php
session_start();
$_SESSION = [];
session_unset(); // untuk memastikan 
session_destroy();

header("Location: login.php");
exit;
?>