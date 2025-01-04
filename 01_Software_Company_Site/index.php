<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<!-- Hero Section with Slider -->
<section class="hero-section text-white text-center" style="min-height: 100vh; width: 100%; position: relative;">
    <div class="container">
        <div id="heroSlider" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url('assets/images/hero-backend.jpg'); background-size: cover; background-position: center; height: 100vh; position: relative;">
                    <div class="overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-color: rgba(0, 0, 0, 0.5);"></div>
                    <div class="row justify-content-center align-items-center h-100 position-relative">
                        <div class="col-md-6">
                            <h1 class="display-4 fw-bold mb-3 animated fadeInUp">Custom Software Solutions</h1>
                            <p class="lead mb-4 animated fadeInUp delay-1s">Empowering businesses with tailored software designed to solve your most complex challenges.</p>
                            <a href="services.php#custom-software" class="btn btn-light btn-lg px-4 py-2 animated fadeInUp delay-2s">Explore Custom Software</a>
                        </div>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url('assets/images/hero-database.jpg'); background-size: cover; background-position: center; height: 100vh; position: relative;">
                    <div class="overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-color: rgba(0, 0, 0, 0.5);"></div>
                    <div class="row justify-content-center align-items-center h-100 position-relative">
                        <div class="col-md-6">
                            <h1 class="display-4 fw-bold mb-3 animated fadeInUp">Mobile App Development</h1>
                            <p class="lead mb-4 animated fadeInUp delay-1s">Transform your business with high-performance mobile apps for iOS and Android platforms.</p>
                            <a href="services.php#mobile-app" class="btn btn-light btn-lg px-4 py-2 animated fadeInUp delay-2s">Explore Mobile Apps</a>
                        </div>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url('assets/images/hero-frontend.jpg'); background-size: cover; background-position: center; height: 100vh; position: relative;">
                    <div class="overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-color: rgba(0, 0, 0, 0.5);"></div>
                    <div class="row justify-content-center align-items-center h-100 position-relative">
                        <div class="col-md-6">
                            <h1 class="display-4 fw-bold mb-3 animated fadeInUp">Cloud Solutions</h1>
                            <p class="lead mb-4 animated fadeInUp delay-1s">Leverage the power of the cloud to scale your business operations and improve efficiency.</p>
                            <a href="services.php#cloud-solutions" class="btn btn-light btn-lg px-4 py-2 animated fadeInUp delay-2s">Explore Cloud Solutions</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#heroSlider" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroSlider" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>


<!-- About Us Section -->
<section class="about-section py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 mb-4 mb-md-0">
                <h2 class="display-5 fw-bold mb-4">About SolutionX</h2>
                <p class="lead text-muted">At SolutionX, we specialize in creating innovative and scalable software solutions that drive business growth. Our team collaborates with clients to deliver tailored solutions that address their unique challenges.</p>
                <p class="text-muted mb-4">We deliver comprehensive solutions across custom software development, mobile apps, cloud computing, and more to help businesses thrive in today's digital landscape.</p>
                <a href="about.php" class="btn btn-outline-primary btn-lg mt-3">Learn More</a>
            </div>
            <div class="col-md-6">
                <img src="assets/images/hero-frontend.jpg" alt="About Us" class="img-fluid rounded shadow-lg">
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services-section py-5">
    <div class="container">
        <h2 class="text-center display-5 fw-bold mb-5">Our Services</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card shadow-lg h-100">
                    <img src="assets/images/hero-backend.jpg" class="card-img-top" alt="Service 1">
                    <div class="card-body">
                        <h5 class="card-title">Custom Software Development</h5>
                        <p class="card-text">Our custom software solutions are designed to meet the specific needs of your business. We build scalable, secure, and high-performing software to elevate your operations.</p>
                        <a href="services.php" class="btn btn-primary btn-sm">View Service</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow-lg h-100">
                    <img src="assets/images/hero-backend.jpg" class="card-img-top" alt="Service 2">
                    <div class="card-body">
                        <h5 class="card-title">Mobile App Development</h5>
                        <p class="card-text">We create intuitive and high-performance mobile applications for both iOS and Android platforms, ensuring a seamless user experience across devices.</p>
                        <a href="services.php" class="btn btn-primary btn-sm">View Service</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow-lg h-100">
                    <img src="assets/images/hero-backend.jpg" class="card-img-top" alt="Service 3">
                    <div class="card-body">
                        <h5 class="card-title">Cloud Solutions</h5>
                        <p class="card-text">Our cloud-based solutions help businesses improve scalability, security, and cost efficiency. We provide end-to-end cloud services, from migration to management.</p>
                        <a href="services.php" class="btn btn-primary btn-sm">View Service</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="features-section py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Our Features</h2>
            <p class="text-muted">
                Discover the qualities that set SolutionX apart. We deliver excellence with every solution.
            </p>
        </div>
        <div class="row g-4">
            <!-- Feature #01 -->
            <div class="col-md-6 col-lg-3">
                <div class="feature-card text-center p-4 bg-white shadow-sm rounded">
                    <img src="assets/icons/flexible-solutions.png" alt="Flexible Solutions Icon" class="mb-3" width="60">
                    <h5 class="fw-semibold">Flexible Solutions</h5>
                    <p class="text-muted mt-2">
                        We tailor our solutions to your unique needs, ensuring seamless integration into your workflow.
                    </p>
                </div>
            </div>
            <!-- Feature #02 -->
            <div class="col-md-6 col-lg-3">
                <div class="feature-card text-center p-4 bg-white shadow-sm rounded">
                    <img src="assets/icons/no-hidden-issues.png" alt="No Hidden Issues Icon" class="mb-3" width="60">
                    <h5 class="fw-semibold">No Hidden Issues</h5>
                    <p class="text-muted mt-2">
                        Transparent processes with a focus on clarity, so you know exactly what you're getting.
                    </p>
                </div>
            </div>
            <!-- Feature #03 -->
            <div class="col-md-6 col-lg-3">
                <div class="feature-card text-center p-4 bg-white shadow-sm rounded">
                    <img src="assets/icons/professional-staff.png" alt="Professional Staff Icon" class="mb-3" width="60">
                    <h5 class="fw-semibold">Professional Staff</h5>
                    <p class="text-muted mt-2">
                        Our experienced team is dedicated to delivering exceptional results for your business.
                    </p>
                </div>
            </div>
            <!-- Feature #04 -->
            <div class="col-md-6 col-lg-3">
                <div class="feature-card text-center p-4 bg-white shadow-sm rounded">
                    <img src="assets/icons/high-performance.png" alt="High Performance Icon" class="mb-3" width="60">
                    <h5 class="fw-semibold">High Performance</h5>
                    <p class="text-muted mt-2">
                        With years of experience, we ensure superior quality and performance in every project we undertake.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Projects Section (Dynamic) -->
<section class="projects-section py-5 bg-light">
    <div class="container">
        <h2 class="text-center display-5 fw-bold mb-5">Our Recent Projects</h2>
        <div class="row">
            <?php
            // Include database connection
            include 'database/db_connect.php';  // Ensure the path is correct

            try {
                // Fetch projects from the database without the link field
                $sql = "SELECT title, description, image FROM projects ORDER BY created_at DESC LIMIT 3";
                $stmt = $pdo->query($sql);  // Execute query

                // Check if there are any projects
                if ($stmt->rowCount() > 0) {
                    // Loop through the projects and display them
                    while ($project = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        echo '<div class="col-md-4 mb-4">
                                <div class="card shadow-lg h-100">
                                    <img src="uploads/projects/' . $project['image'] . '" class="card-img-top" alt="' . $project['title'] . '">
                                    <div class="card-body">
                                        <h5 class="card-title">' . $project['title'] . '</h5>
                                        <p class="card-text">' . $project['description'] . '</p>
                                        <a href="#" class="btn btn-primary btn-sm">View Project</a> <!-- Remove or update this link if needed -->
                                    </div>
                                </div>
                            </div>';
                    }
                } else {
                    echo '<p class="text-center">No projects found.</p>';
                }
            } catch (PDOException $e) {
                // Handle errors
                echo "Error fetching projects: " . $e->getMessage();
            }
            ?>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonials-section py-5 bg-primary text-white">
    <div class="container">
        <h2 class="text-center display-5 fw-bold mb-5">What Our Clients Say</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="testimonial-card bg-light p-4 rounded shadow-lg text-center">
                    <img src="assets/images/hero-backend.jpg" alt="Client 1" class="rounded-circle mb-3" style="width: 100px; height: 100px;">
                    <h5 class="mb-2">Jane Doe</h5>
                    <p class="lead text-muted">"SolutionX transformed our business operations with their custom software solutions. The team is professional, reliable, and truly understands our needs."</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="testimonial-card bg-light p-4 rounded shadow-lg text-center">
                    <img src="assets/images/hero-database.jpg" alt="Client 2" class="rounded-circle mb-3" style="width: 100px; height: 100px;">
                    <h5 class="mb-2">John Smith</h5>
                    <p class="lead text-muted">"Their mobile app development team exceeded our expectations. The app is fast, responsive, and user-friendly. Highly recommended!"</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="testimonial-card bg-light p-4 rounded shadow-lg text-center">
                    <img src="assets/images/hero-frontend.jpg" alt="Client 3" class="rounded-circle mb-3" style="width: 100px; height: 100px;">
                    <h5 class="mb-2">Emily Johnson</h5>
                    <p class="lead text-muted">"SolutionX's cloud solutions helped us save on infrastructure costs and improved scalability. Their team was professional throughout the process."</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="contact-section py-5">
    <div class="container text-center">
        <h2 class="display-5 fw-bold mb-4">Get In Touch With Us</h2>
        <p class="lead mb-4">Have a question or need a quote? We are here to help! Get in touch with our team for any inquiries or to discuss your next project.</p>
        <a href="contact.php" class="btn btn-outline-primary btn-lg px-4 py-2">Contact Us</a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

<!-- AOS Animation Library -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1200,
        once: true
    });
</script>