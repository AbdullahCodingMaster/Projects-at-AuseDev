<?php include 'includes/header.php'; ?>
<?php include 'includes/db_connect.php'; ?>

<?php
$projectId = $_GET['id'] ?? null;
if (!$projectId) {
    header("Location: projects.php");
    exit;
}

// Fetch existing project details
$stmt = $pdo->prepare("SELECT * FROM projects WHERE id = ?");
$stmt->execute([$projectId]);
$project = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$project) {
    echo "<div class='container my-5'><h1>Project not found.</h1></div>";
    include 'includes/footer.php';
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $image = $_POST['image'];

    $updateStmt = $pdo->prepare("UPDATE projects SET title = ?, description = ?, image = ? WHERE id = ?");
    $updateStmt->execute([$title, $description, $image, $projectId]);

    header("Location: projects.php");
    exit;
}
?>

<div class="container my-5">
    <h1 class="text-center">Edit Project</h1>
    <form action="edit_project.php?id=<?php echo $projectId; ?>" method="POST" class="mt-4">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="<?php echo htmlspecialchars($project['title']); ?>" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="4" required><?php echo htmlspecialchars($project['description']); ?></textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image URL</label>
            <input type="text" class="form-control" id="image" name="image" value="<?php echo htmlspecialchars($project['image']); ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Project</button>
    </form>
</div>

<?php include 'includes/footer.php'; ?>