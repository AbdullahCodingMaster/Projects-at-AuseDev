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


<!-- Our Projects -->
<section class="projects-section py-5 bg-light">
    <div class="container">
        <h2 class="text-center display-5 fw-bold mb-5 text-dark">
            Our <span class="text-primary">Projects</span>
        </h2>
        <p class="text-center text-muted lead mb-5">
            Explore some of the groundbreaking projects we've worked on that are driving innovation and transformation.
        </p>
        <div class="row">
            <?php
            try {
                $stmt = $pdo->query("SELECT * FROM projects ORDER BY id DESC");
                if ($stmt->rowCount() > 0):
                    while ($project = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
                        <div class="col-md-4 mb-4">
                            <div class="card shadow-sm h-100 border-0">
                                <div class="position-relative">
                                    <img src="uploads/projects/<?php echo htmlspecialchars($project['image']); ?>"
                                        class="card-img-top rounded-top"
                                        alt="<?php echo htmlspecialchars($project['title']); ?>"
                                        style="height: 200px; object-fit: cover;">
                                    <div class="overlay d-flex justify-content-center align-items-center position-absolute w-100 h-100 top-0 left-0 bg-dark bg-opacity-50 text-white opacity-0 transition-opacity rounded-top">
                                        <h5 class="mb-0"><?php echo htmlspecialchars($project['title']); ?></h5>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title fw-bold"><?php echo htmlspecialchars($project['title']); ?></h5>
                                    <p class="card-text text-muted">
                                        <?php echo substr(htmlspecialchars($project['description']), 0, 100) . '...'; ?>
                                    </p>
                                    <a href="project.php?id=<?php echo $project['id']; ?>" class="btn btn-primary btn-sm">
                                        View Details
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile;
                else: ?>
                    <div class="col-12">
                        <p class="text-center text-muted">No projects to display at the moment. Please check back later!</p>
                    </div>
                <?php endif;
            } catch (Exception $e) { ?>
                <div class="col-12">
                    <p class="text-danger text-center">Error loading projects: <?php echo htmlspecialchars($e->getMessage()); ?></p>
                </div>
            <?php } ?>
        </div>
    </div>
</section>


<section class="cta-section py-5">
    <div class="container text-center">
        <h3 class="fw-bold display-5 mb-4">Ready to Transform Your Business?</h3>
        <p class="lead mb-4">Contact us today to explore how we can help you achieve your goals.</p>
        <a href="contact.php" class="btn btn-primary btn-lg px-4 py-2">Contact Us</a>
    </div>
</section>

<section class="accordion-section py-5 bg-light">
    <div class="container">
        <h2 class="text-center display-5 fw-bold mb-5 text-dark">
            Our <span class="text-primary">Expertise</span>
        </h2>
        <p class="text-center text-muted lead mb-5">
            Discover our core capabilities and how we deliver exceptional value through our expertise in cutting-edge technology and innovation.
        </p>
        <div class="accordion" id="accordionPanelsStayOpenExample">
            <!-- Custom Software Development -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                        Custom Software Development
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                    <div class="accordion-body">
                        <strong>Build software tailored to your unique business needs.</strong> Our team ensures every feature aligns with your goals for efficiency and scalability. We specialize in creating robust, user-friendly applications that streamline your operations and elevate your business potential.
                    </div>
                </div>
            </div>

            <!-- Cloud Solutions -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                        Cloud Solutions
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        <strong>Optimize your operations with secure, scalable cloud technology.</strong> We provide tailored cloud strategies, ensuring seamless migration, reliable infrastructure, and cost-effective solutions that empower your business to operate efficiently and securely.
                    </div>
                </div>
            </div>

            <!-- Artificial Intelligence -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                        Artificial Intelligence
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        <strong>Leverage the power of AI to gain a competitive edge.</strong> From predictive analytics and natural language processing to intelligent automation, our AI-driven solutions help you uncover new opportunities, improve efficiency, and make data-informed decisions.
                    </div>
                </div>
            </div>

            <!-- Data Analytics -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                        Data Analytics
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        <strong>Turn your data into actionable insights.</strong> Our advanced data analytics services help you make smarter business decisions by identifying trends, patterns, and opportunities hidden in your data. Empower your team with real-time reporting and intuitive dashboards.
                    </div>
                </div>
            </div>

            <!-- Digital Transformation -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false" aria-controls="panelsStayOpen-collapseFive">
                        Digital Transformation
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        <strong>Transform your business with cutting-edge digital solutions.</strong> We help you adapt to the digital era by modernizing legacy systems, integrating advanced tools, and adopting agile methodologies for sustained growth and innovation.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include 'includes/footer.php'; ?>