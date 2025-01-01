<?php
// Simulated dynamic data
$projectId = $_GET['id'] ?? 1; // Default project ID
$project = [
    'title' => 'Project Alpha',
    'description' => 'This is a detailed description of Project Alpha.',
    'image' => 'assets/images/alpha.jpg'
];
?>
<?php include 'includes/header.php'; ?>
<div class="container my-5">
    <h1 class="text-center"><?php echo $project['title']; ?></h1>
    <div class="text-center">
        <img src="<?php echo $project['image']; ?>" alt="<?php echo $project['title']; ?>" class="img-fluid">
    </div>
    <p class="mt-4"><?php echo $project['description']; ?></p>
    <a href="projects.php" class="btn btn-secondary">Back to Projects</a>
</div>
<?php include 'includes/footer.php'; ?>