<?php

// Sanitize input to prevent XSS
function sanitizeInput($data)
{
    return htmlspecialchars(strip_tags(trim($data)));
}

// Validate email
function isValidEmail($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// File upload function
function uploadFile($file, $uploadDir = '/uploads/')
{
    $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
    $extension = pathinfo($file['name'], PATHINFO_EXTENSION);

    if (!in_array(strtolower($extension), $allowedExtensions)) {
        return ['error' => 'Invalid file type. Allowed types: jpg, jpeg, png, gif.'];
    }

    $newFileName = uniqid() . '.' . $extension;
    $destination = $_SERVER['DOCUMENT_ROOT'] . $uploadDir . $newFileName;

    if (move_uploaded_file($file['tmp_name'], $destination)) {
        return ['success' => $uploadDir . $newFileName];
    } else {
        return ['error' => 'Failed to upload file.'];
    }
}

// Function to display flash messages
function displayFlashMessage($type, $message)
{
    if ($type === 'success') {
        echo "<div class='alert alert-success'>{$message}</div>";
    } elseif ($type === 'error') {
        echo "<div class='alert alert-danger'>{$message}</div>";
    }
}
