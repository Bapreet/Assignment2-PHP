<?php
// Include the header file
require './include/header.php';

// Start or access an existing session
session_start();

// Remove all session variables
session_unset();

// Destroy the session
session_destroy();

// Redirect to the login page
header('location:index.php');

// Include the footer file
require './include/footer.php';
?>
