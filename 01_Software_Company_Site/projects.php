<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>
<?php include 'database/db_connect.php'; ?>

<div class="container my-5">
    <h1 class="text-center mb-4">Our Projects</h1>
    <div class="row">
        <?php
        try {
            $stmt = $pdo->query("SELECT * FROM projects ORDER BY id DESC");
            while ($project = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm h-100">
                        <img src="uploads/projects/' . $project['image'] . '" class="card-img-top" alt="<?php echo htmlspecialchars($project['title']); ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo htmlspecialchars($project['title']); ?></h5>
                            <p class="card-text"><?php echo substr(htmlspecialchars($project['description']), 0, 100) . '...'; ?></p>
                            <a href="project.php?id=<?php echo $project['id']; ?>" class="btn btn-primary btn-sm">View Details</a>
                        </div>
                    </div>
                </div>
        <?php endwhile;
        } catch (Exception $e) {
            echo '<p class="text-danger">Error loading projects: ' . htmlspecialchars($e->getMessage()) . '</p>';
        }
        ?>
    </div>
</div>

<?php include 'includes/footer.php'; ?>