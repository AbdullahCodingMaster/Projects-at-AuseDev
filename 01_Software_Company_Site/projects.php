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
                        <div class="text-container position-relative">
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
                        <div class="text-container position-relative">
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
                        <div class="text-container position-relative">
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

<!-- Our Projects -->
<section class="projects-section py-5">
    <div class="container">
        <h2 class="text-center display-4 text-primary mb-4">Our Projects</h2>
        <p class="text-center text-muted lead mb-5">Explore some of the groundbreaking projects we've worked on that are driving innovation and transformation.</p>
        <div class="row">
            <?php
            try {
                $stmt = $pdo->query("SELECT * FROM projects ORDER BY id DESC");
                while ($project = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm h-100">
                            <img src="uploads/projects/<?php echo $project['image']; ?>" class="card-img-top" alt="<?php echo htmlspecialchars($project['title']); ?>">
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
</section>

<!-- Call to Action -->
<section class="cta-section bg-primary text-white py-5">
    <div class="container text-center">
        <h3 class="fw-bold mb-3">Ready to Take Your Business to the Next Level?</h3>
        <p class="lead">Contact us today to learn more about our innovative solutions and how we can help you achieve your goals.</p>
        <a href="contact.php" class="btn btn-light btn-lg">Get Started</a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>