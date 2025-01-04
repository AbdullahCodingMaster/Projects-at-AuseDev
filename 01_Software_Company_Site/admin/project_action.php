<?php
include '../database/db_connect.php';

// Handle Add, Update, or Delete project
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the form contains the necessary data (title, description, etc.)
    if (isset($_POST['title']) && isset($_POST['description'])) {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $image = isset($_FILES['image']['name']) ? $_FILES['image']['name'] : null;

        // Handle file upload for image
        if ($image) {
            $targetDir = "../uploads/projects/";
            move_uploaded_file($_FILES['image']['tmp_name'], $targetDir . $image);
        } elseif (isset($_POST['existing_image'])) {
            // Retain existing image if no new one is uploaded
            $image = $_POST['existing_image'];
        }

        // If an ID is set, it's an update, else it's an insert
        if (isset($_POST['id']) && !empty($_POST['id'])) {
            // Update project
            $id = $_POST['id'];
            $stmt = $pdo->prepare("UPDATE projects SET title = ?, description = ?, image = ? WHERE id = ?");
            $stmt->execute([$title, $description, $image, $id]);
        } else {
            // Insert new project
            $stmt = $pdo->prepare("INSERT INTO projects (title, description, image) VALUES (?, ?, ?)");
            $stmt->execute([$title, $description, $image]);
        }
    } else {
        // Display an error if required fields are missing
        die("Title and Description are required!");
    }

    header("Location: manage_projects.php");
    exit;
}

// Handle Delete project
if (isset($_POST['delete'])) {
    $id = $_POST['delete'];
    $stmt = $pdo->prepare("DELETE FROM projects WHERE id = ?");
    $stmt->execute([$id]);
    header("Location: manage_projects.php");
    exit;
}
