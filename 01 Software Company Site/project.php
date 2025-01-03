<?php include 'includes/header.php'; ?>
<?php include 'includes/db_connect.php'; ?>

<?php
$projectId = $_GET['id'] ?? 1; // Default project ID
$stmt = $pdo->prepare("SELECT * FROM projects WHERE id = ?");
$stmt->execute([$projectId]);
$project = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$project) {
    echo "<div class='container my-5'><h1>Project not found.</h1></div>";
    include 'includes/footer.php';
    exit;
}
?>

<div class="container my-5">
    <div class="text-center mb-5">
        <h1 class="display-4 font-weight-bold text-primary"><?php echo htmlspecialchars($project['title']); ?></h1>
        <img src="<?php echo htmlspecialchars($project['image']); ?>" alt="<?php echo htmlspecialchars($project['title']); ?>" class="img-fluid rounded-3 shadow-lg">
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-light rounded-3">
                <div class="card-body">
                    <h4 class="card-title text-primary font-weight-bold">Project Description</h4>
                    <p class="card-text text-muted"><?php echo htmlspecialchars($project['description']); ?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-4 text-center">
        <a href="projects.php" class="btn btn-secondary btn-lg px-5">Back to Projects</a>
    </div>
</div>

<?php include 'includes/footer.php'; ?>