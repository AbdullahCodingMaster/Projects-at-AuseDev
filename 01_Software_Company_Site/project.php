<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>
<?php include 'database/db_connect.php'; ?>

<!-- Hero Section with Enhanced Slider -->
<section class="hero-section text-white text-center" style="min-height: 100vh; width: 100%; position: relative;">
    <div class="container-fluid px-0">
        <div id="heroSlider" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url('assets/images/hero-backend.jpg'); background-size: cover; background-position: center; height: 100vh;">
                    <div class="overlay" style="background: rgba(0, 0, 0, 0.6); position: absolute; inset: 0;"></div>
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <div class="text-container position-relative text-center px-4">
                            <h1 class="display-4 fw-bold mb-3 fadeInUp">Custom Software Solutions</h1>
                            <p class="lead mb-4 fadeInUp delay-1s">Empowering businesses with tailored software designed to solve your most complex challenges.</p>
                            <a href="services.php#custom-software" class="btn btn-primary btn-lg px-4 py-2 fadeInUp delay-2s">Explore Custom Software</a>
                        </div>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url('assets/images/hero-database.jpg'); background-size: cover; background-position: center; height: 100vh;">
                    <div class="overlay" style="background: rgba(0, 0, 0, 0.6); position: absolute; inset: 0;"></div>
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <div class="text-container position-relative text-center px-4">
                            <h1 class="display-4 fw-bold mb-3 fadeInUp">Mobile App Development</h1>
                            <p class="lead mb-4 fadeInUp delay-1s">Transform your business with high-performance mobile apps for iOS and Android platforms.</p>
                            <a href="services.php#mobile-app" class="btn btn-primary btn-lg px-4 py-2 fadeInUp delay-2s">Explore Mobile Apps</a>
                        </div>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url('assets/images/hero-frontend.jpg'); background-size: cover; background-position: center; height: 100vh;">
                    <div class="overlay" style="background: rgba(0, 0, 0, 0.6); position: absolute; inset: 0;"></div>
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <div class="text-container position-relative text-center px-4">
                            <h1 class="display-4 fw-bold mb-3 fadeInUp">Cloud Solutions</h1>
                            <p class="lead mb-4 fadeInUp delay-1s">Leverage the power of the cloud to scale your business operations and improve efficiency.</p>
                            <a href="services.php#cloud-solutions" class="btn btn-primary btn-lg px-4 py-2 fadeInUp delay-2s">Explore Cloud Solutions</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#heroSlider" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroSlider" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>

<div class="container my-5">
    <?php
    if (isset($_GET['id'])) {
        $projectId = intval($_GET['id']);
        try {
            $stmt = $pdo->prepare("SELECT * FROM projects WHERE id = ?");
            $stmt->execute([$projectId]);
            $project = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($project): ?>
                <div class="text-center mb-4">
                    <h1 class="text-primary font-weight-bold text-3xl"><?php echo htmlspecialchars($project['title']); ?></h1>
                    <p class="text-muted text-xl mb-3"><?php echo htmlspecialchars($project['description']); ?></p>
                </div>
                <div class="project-details">
                    <img src="uploads/projects/<?php echo $project['image']; ?>" class="img-fluid rounded shadow-lg mb-4" alt="<?php echo htmlspecialchars($project['title']); ?>" style="max-height: 400px; object-fit: cover;">
                    <p class="text-lg"><?php echo nl2br(htmlspecialchars($project['description'])); ?></p>
                    <!-- Optional Additional Info -->
                    <?php if (!empty($project['technologies'])): ?>
                        <div class="technologies mt-4">
                            <h3 class="text-xl font-weight-bold">Technologies Used:</h3>
                            <ul class="list-inline">
                                <?php foreach (explode(',', $project['technologies']) as $tech): ?>
                                    <li class="list-inline-item badge bg-secondary text-white m-1"><?php echo htmlspecialchars(trim($tech)); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                </div>
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