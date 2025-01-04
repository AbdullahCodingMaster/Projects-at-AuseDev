<?php
// Ensure session is started if not already
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Define BASE_URL if it's not already defined
if (!defined('BASE_URL')) {
    define('BASE_URL', 'http://127.0.0.1/Projects_at_AuseDev/01_Software_Company_Site/');  // Update the base URL accordingly
}

// Redirect to login page if not authenticated
function redirectToLoginIfNotAuthenticated()
{
    if (!isset($_SESSION['user_id'])) {
        header('Location: ' . BASE_URL . 'auth/login.php');
        exit();
    }
}

// Restrict access to admin users only
function restrictToAdmin()
{
    if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
        header('Location: ' . BASE_URL . 'index.php');
        exit();
    }
}

// Restrict access to buyer users only
function restrictToBuyer()
{
    if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'buyer') {
        header('Location: ' . BASE_URL . 'index.php');
        exit();
    }
}

// Helper function to check if the user is authenticated
function isAuthenticated()
{
    return isset($_SESSION['user_id']);
}

// Helper function to get the user's role
function getUserRole()
{
    return isset($_SESSION['role']) ? $_SESSION['role'] : null;
}

// Helper function to get the user's name
function getUserName()
{
    return isset($_SESSION['name']) ? $_SESSION['name'] : null;
}

// Helper function to get the user's avatar
function getUserAvatar()
{
    return isset($_SESSION['avatar']) ? $_SESSION['avatar'] : 'default-avatar.png';
}
