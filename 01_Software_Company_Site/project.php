<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>
<?php include 'database/db_connect.php'; ?>

<div class="container my-5">
    <?php
    if (isset($_GET['id'])) {
        $projectId = intval($_GET['id']);
        try {
            $stmt = $pdo->prepare("SELECT * FROM projects WHERE id = ?");
            $stmt->execute([$projectId]);
            $project = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($project): ?>
                <h1 class="text-center mb-4"><?php echo htmlspecialchars($project['title']); ?></h1>
                <img src="uploads/projects/' . $project['image'] . '" class="img-fluid mb-4" alt="<?php echo htmlspecialchars($project['title']); ?>">
                <p><?php echo htmlspecialchars($project['description']); ?></p>
            <?php else: ?>
                <p class="text-danger">Project not found.</p>
    <?php endif;
        } catch (Exception $e) {
            echo '<p class="text-danger">Error loading project: ' . htmlspecialchars($e->getMessage()) . '</p>';
        }
    } else {
        echo '<p class="text-danger">Invalid project ID.</p>';
    }
    ?>
</div>

<?php include 'includes/footer.php'; ?>