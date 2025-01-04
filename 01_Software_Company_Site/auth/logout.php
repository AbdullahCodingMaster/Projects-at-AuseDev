<?php
// Include the config file to access BASE_URL
include '../includes/config.php';

// Start the session
session_start();

// Destroy all session variables and the session itself
session_unset();
session_destroy();

// Redirect to login page
header('Location: ' . BASE_URL . 'auth/login.php');
exit();
