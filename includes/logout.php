<?php
session_start(); // Start session (if not already started)

// Unset all session variables
$_SESSION = array();

// Destroy session
session_destroy();

// Redirect to login page
header("Location: ../index.php");
exit;
?>