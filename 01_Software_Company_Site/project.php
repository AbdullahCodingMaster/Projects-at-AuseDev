<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>
<?php include 'database/db_connect.php'; ?>

<!-- Hero Section with Enhanced Slider -->
<section class="hero-section text-white text-center" style="min-height: 100vh; width: 100%; position: relative;">
    <div class="container-fluid px-0">
        <div id="heroSlider" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url('assets/images/project-management.jpg'); background-size: cover; background-position: center; height: 100vh;">
                    <div class="overlay" style="background: rgba(0, 0, 0, 0.6); position: absolute; inset: 0;"></div>
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <div class="text-container position-relative">
                            <h1 class="display-4 fw-bold mb-3 fadeInUp">Enterprise Resource Planning (ERP)</h1>
                            <p class="lead mb-4 fadeInUp delay-1s">Streamlined business operations for a multinational client with a tailored ERP solution.</p>
                            <a href="projects.php#erp-solution" class="btn btn-primary btn-lg px-4 py-2 fadeInUp delay-2s">View Project</a>
                        </div>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url('assets/images/mobile-development.jpg'); background-size: cover; background-position: center; height: 100vh;">
                    <div class="overlay" style="background: rgba(0, 0, 0, 0.6); position: absolute; inset: 0;"></div>
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <div class="text-container position-relative">
                            <h1 class="display-4 fw-bold mb-3 fadeInUp">E-Commerce Mobile App</h1>
                            <p class="lead mb-4 fadeInUp delay-1s">Revolutionized online shopping with a feature-rich mobile app for a leading retail chain.</p>
                            <a href="projects.php#ecommerce-app" class="btn btn-primary btn-lg px-4 py-2 fadeInUp delay-2s">View Project</a>
                        </div>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url('assets/images/cloud-computing.jpg'); background-size: cover; background-position: center; height: 100vh;">
                    <div class="overlay" style="background: rgba(0, 0, 0, 0.6); position: absolute; inset: 0;"></div>
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <div class="text-container position-relative">
                            <h1 class="display-4 fw-bold mb-3 fadeInUp">Cloud-Based Inventory System</h1>
                            <p class="lead mb-4 fadeInUp delay-1s">Enhanced supply chain management for a logistics firm with a cloud-based solution.</p>
                            <a href="projects.php#cloud-inventory" class="btn btn-primary btn-lg px-4 py-2 fadeInUp delay-2s">View Project</a>
                        </div>
                    </div>
                </div>
                <!-- Slide 4 -->
                <div class="carousel-item" style="background-image: url('assets/images/ai-automation.jpg'); background-size: cover; background-position: center; height: 100vh;">
                    <div class="overlay" style="background: rgba(0, 0, 0, 0.6); position: absolute; inset: 0;"></div>
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <div class="text-container position-relative">
                            <h1 class="display-4 fw-bold mb-3 fadeInUp">AI-Powered Chatbot</h1>
                            <p class="lead mb-4 fadeInUp delay-1s">Delivered a smart customer support chatbot integrated with NLP for a fintech company.</p>
                            <a href="projects.php#ai-chatbot" class="btn btn-primary btn-lg px-4 py-2 fadeInUp delay-2s">View Project</a>
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

<!-- Project Details Section -->
<section class="bg-light py-5">
    <div class="container">
        <?php
        if (isset($_GET['id'])) {
            $projectId = intval($_GET['id']);
            try {
                $stmt = $pdo->prepare("SELECT * FROM projects WHERE id = ?");
                $stmt->execute([$projectId]);
                $project = $stmt->fetch(PDO::FETCH_ASSOC);

                if ($project): ?>
                    <div class="text-center mb-4">
                        <h1 class="fw-bold"><?php echo htmlspecialchars($project['title']); ?></h1>
                        <p class="text-muted mb-3"><?php echo htmlspecialchars($project['description']); ?></p>
                    </div>
                    <div class="project-details">
                        <div class="row gy-4">
                            <div class="col-lg-6">
                                <img src="uploads/projects/<?php echo htmlspecialchars($project['image']); ?>" class="img-fluid rounded shadow-lg" alt="<?php echo htmlspecialchars($project['title']); ?>">
                            </div>
                            <div class="col-lg-6">
                                <h3 class="fw-bold">Project Overview</h3>
                                <p><?php echo nl2br(htmlspecialchars($project['description'])); ?></p>
                                <?php if (!empty($project['technologies'])): ?>
                                    <div class="technologies mt-3">
                                        <h5 class="fw-bold">Technologies Used:</h5>
                                        <ul class="list-inline">
                                            <?php foreach (explode(',', $project['technologies']) as $tech): ?>
                                                <li class="list-inline-item badge bg-secondary text-white m-1"><?php echo htmlspecialchars(trim($tech)); ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($project['link'])): ?>
                                    <a href="<?php echo htmlspecialchars($project['link']); ?>" target="_blank" class="btn btn-outline-primary mt-3">View Project</a>
                                <?php endif; ?>
                            </div>
                        </div>
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
</section>

<?php include 'includes/footer.php'; ?>