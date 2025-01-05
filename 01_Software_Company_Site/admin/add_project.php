<?php include '../includes/header.php'; ?>
<?php include '../includes/db_connect.php'; ?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];

    // Handle file upload
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = 'assets/images/';
        $fileName = basename($_FILES['image']['name']);
        $filePath = $uploadDir . $fileName;

        // Check if the folder exists; create if not
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }

        // Move uploaded file to the destination folder
        if (move_uploaded_file($_FILES['image']['tmp_name'], $filePath)) {
            // Store the project in the database
            $stmt = $pdo->prepare("INSERT INTO projects (title, description, image) VALUES (?, ?, ?)");
            $stmt->execute([$title, $description, $filePath]);

            header("Location: projects.php");
            exit;
        } else {
            $error = "Failed to upload image.";
        }
    } else {
        $error = "Image upload error.";
    }
}
?>

<div class="container my-5">
    <h1 class="text-center">Add New Project</h1>

    <?php if (!empty($error)): ?>
        <div class="alert alert-danger"><?php echo $error; ?></div>
    <?php endif; ?>

    <form action="add_project.php" method="POST" enctype="multipart/form-data" class="mt-4">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Upload Image</label>
            <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Project</button>
    </form>
</div>

<?php include '../includes/footer.php'; ?>