<?php include 'includes/header.php'; ?>
<?php include 'includes/db_connect.php'; ?>

<div class="container my-5">
    <h1 class="text-center mb-4">Our Projects</h1>
    <div class="row">
        <?php
        try {
            $stmt = $pdo->query("SELECT * FROM projects ORDER BY id DESC");
            if ($stmt->rowCount() > 0):
                while ($project = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm h-100">
                            <!-- Project Image -->
                            <img
                                src="<?php echo htmlspecialchars($project['image']); ?>"
                                class="card-img-top img-fluid rounded-top"
                                alt="<?php echo htmlspecialchars($project['title']); ?>"
                                style="max-height: 200px; object-fit: cover;">

                            <!-- Card Body -->
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title text-primary"><?php echo htmlspecialchars($project['title']); ?></h5>
                                <p class="card-text text-muted">
                                    <?php echo htmlspecialchars(substr($project['description'], 0, 100)) . '...'; ?>
                                </p>

                                <!-- Action Buttons -->
                                <div class="mt-auto">
                                    <a href="project.php?id=<?php echo $project['id']; ?>" class="btn btn-primary btn-sm">View Details</a>
                                    <a href="edit_project.php?id=<?php echo $project['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="delete_project.php?id=<?php echo $project['id']; ?>"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Are you sure you want to delete this project?');">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile;
            else: ?>
                <div class="col-12 text-center">
                    <p class="text-muted">No projects found. <a href="add_project.php" class="btn btn-link">Add a new project</a></p>
                </div>
        <?php endif;
        } catch (Exception $e) {
            echo '<div class="alert alert-danger">Error loading projects: ' . htmlspecialchars($e->getMessage()) . '</div>';
        }
        ?>
    </div>
</div>

<?php include 'includes/footer.php'; ?>