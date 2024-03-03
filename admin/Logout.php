<?php
// Start the session
session_start();

// Check if the user is already logged out
if (!isset($_SESSION['user_id'])) {
    // Redirect to the login page or any other appropriate action
    header("Location: registration.php");
    exit();
}

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to the login page or any other appropriate action
header("Location: registration.php");
exit();
?>