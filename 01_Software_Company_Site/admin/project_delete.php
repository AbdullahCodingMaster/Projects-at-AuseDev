<?php
include '../database/db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the delete request has been made
    if (isset($_POST['delete'])) {
        $id = $_POST['delete'];

        // First, fetch the image path to delete it from the file system
        $stmt = $pdo->prepare("SELECT image FROM projects WHERE id = ?");
        $stmt->execute([$id]);
        $project = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($project && $project['image']) {
            // Delete the project image file from the server
            $imagePath = "../uploads/projects/" . $project['image'];
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        // Now, delete the project from the database
        $stmt = $pdo->prepare("DELETE FROM projects WHERE id = ?");
        $stmt->execute([$id]);

        // Redirect to the manage projects page after deletion
        header("Location: manage_projects.php");
        exit;
    }
} else {
    // If accessed directly without a POST request
    die("Invalid request.");
}
