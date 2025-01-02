<?php
// Simulated dynamic data
$projectId = $_GET['id'] ?? 1; // Default project ID
$project = [
    'title' => 'Project Alpha',
    'description' => 'This is a detailed description of Project Alpha. This project aims to revolutionize the way businesses handle their daily operations through cutting-edge technology solutions. The scope includes development, design, testing, and deployment phases to ensure the project meets the highest standards.',
    'image' => 'assets/images/project1.jpg'
];
?>
<?php include 'includes/header.php'; ?>
<div class="container my-5">
    <!-- Title and Image Section -->
    <div class="text-center mb-5">
        <h1 class="display-4 font-weight-bold text-primary"><?php echo $project['title']; ?></h1>
        <img src="<?php echo $project['image']; ?>" alt="<?php echo $project['title']; ?>" class="img-fluid rounded-3 shadow-lg">
    </div>

    <!-- Project Description -->
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-light rounded-3">
                <div class="card-body">
                    <h4 class="card-title text-primary font-weight-bold">Project Description</h4>
                    <p class="card-text text-muted"><?php echo $project['description']; ?></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Back Button -->
    <div class="mt-4 text-center">
        <a href="projects.php" class="btn btn-secondary btn-lg px-5">Back to Projects</a>
    </div>
</div>
<?php include 'includes/footer.php'; ?>