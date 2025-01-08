<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<!-- Hero Section with Enhanced Slider -->
<section class="hero-section text-white text-center" style="min-height: 100vh; width: 100%; position: relative;">
    <div class="container-fluid px-0">
        <div id="heroSlider" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url('assets/images/custom-software-development.jpg'); background-size: cover; background-position: center; height: 100vh;">
                    <div class="overlay" style="background: rgba(0, 0, 0, 0.6); position: absolute; inset: 0;"></div>
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <div class="text-container position-relative">
                            <h1 class="display-4 fw-bold mb-3 fadeInUp">Innovative Software Solutions</h1>
                            <p class="lead mb-4 fadeInUp delay-1s">Crafting tailored software to drive innovation, efficiency, and growth for your business.</p>
                            <a href="services.php#custom-software" class="btn btn-primary btn-lg px-4 py-2 fadeInUp delay-2s">Discover Our Expertise</a>
                        </div>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url('assets/images/mobile-app-development.jpg'); background-size: cover; background-position: center; height: 100vh;">
                    <div class="overlay" style="background: rgba(0, 0, 0, 0.6); position: absolute; inset: 0;"></div>
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <div class="text-container position-relative">
                            <h1 class="display-4 fw-bold mb-3 fadeInUp">Transformative Mobile Apps</h1>
                            <p class="lead mb-4 fadeInUp delay-1s">Delivering seamless mobile experiences to connect, engage, and empower your audience.</p>
                            <a href="services.php#mobile-app" class="btn btn-primary btn-lg px-4 py-2 fadeInUp delay-2s">View Mobile Solutions</a>
                        </div>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url('assets/images/cloud-solutions.jpg'); background-size: cover; background-position: center; height: 100vh;">
                    <div class="overlay" style="background: rgba(0, 0, 0, 0.6); position: absolute; inset: 0;"></div>
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <div class="text-container position-relative">
                            <h1 class="display-4 fw-bold mb-3 fadeInUp">Scalable Cloud Solutions</h1>
                            <p class="lead mb-4 fadeInUp delay-1s">Empowering businesses with secure, scalable cloud solutions for future-ready operations.</p>
                            <a href="services.php#cloud-solutions" class="btn btn-primary btn-lg px-4 py-2 fadeInUp delay-2s">Explore the Cloud</a>
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
            <!-- Service #01 -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-lg h-100">
                    <img src="assets/images/custom-software-development.jpg" alt="Custom Software Development" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Custom Software Development</h5>
                        <p class="card-text">Our custom software solutions are designed to meet the specific needs of your business. We build scalable, secure, and high-performing software to elevate your operations.</p>
                    </div>
                </div>
            </div>

            <!-- Service #02 -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-lg h-100">
                    <img src="assets/images/mobile-app-development.jpg" alt="Mobile App Development" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Mobile App Development</h5>
                        <p class="card-text">We create intuitive and high-performance mobile applications for both iOS and Android platforms, ensuring a seamless user experience across devices.</p>
                    </div>
                </div>
            </div>

            <!-- Service #03 -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-lg h-100">
                    <img src="assets/images/cloud-solutions.jpg" alt="Cloud Solutions" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Cloud Solutions</h5>
                        <p class="card-text">Our cloud-based solutions help businesses improve scalability, security, and cost efficiency. We provide end-to-end cloud services, from migration to management.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer text-center">
        <a href="services.php" class="btn btn-primary btn-lg px-4 py-2">View Service</a>
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
            <div class="col-12">
                <div class="d-flex flex-column flex-lg-row align-items-center">
                    <img src="assets/images/feature-2.jpg" alt="Flexible Solutions" class="img-fluid rounded shadow-sm mb-4 mb-lg-0" style="width: 100%; height: 250px; object-fit: cover; margin-right: 20px;">
                    <div class="text-center text-lg-left">
                        <h3 class="fw-semibold">Flexible Solutions</h3>
                        <p class="text-muted">
                            We tailor our solutions to your unique needs, ensuring seamless integration into your workflow. With adaptability at the core, our services are designed to grow and evolve with your business. Whether you're a small startup or an established enterprise, our flexible approach ensures we can meet your challenges head-on.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Feature #02 -->
            <div class="col-12">
                <div class="d-flex flex-column flex-lg-row align-items-center">
                    <div class="text-center text-lg-left">
                        <h3 class="fw-semibold">No Hidden Issues</h3>
                        <p class="text-muted">
                            Transparent processes with a focus on clarity, so you know exactly what you're getting. Trust and openness are the foundation of all our interactions and services. With SolutionX, you can always count on full transparency in pricing, project timelines, and deliverables.
                        </p>
                    </div>
                    <img src="assets/images/feature-3.jpg" alt="No Hidden Issues" class="img-fluid rounded shadow-sm mb-4 mb-lg-0" style="width: 100%; height: 250px; object-fit: cover; margin-left: 20px;">
                </div>
            </div>

            <!-- Feature #03 -->
            <div class="col-12">
                <div class="d-flex flex-column flex-lg-row align-items-center">
                    <img src="assets/images/feature-4.jpg" alt="Professional Staff" class="img-fluid rounded shadow-sm mb-4 mb-lg-0" style="width: 100%; height: 250px; object-fit: cover; margin-right: 20px;">
                    <div class="text-center text-lg-left">
                        <h3 class="fw-semibold">Professional Staff</h3>
                        <p class="text-muted">
                            Our experienced team is dedicated to delivering exceptional results for your business. Each project is handled with precision and professionalism, ensuring your satisfaction. From technical experts to project managers, every member of our staff is committed to providing you with the highest level of service.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Feature #04 -->
            <div class="col-12">
                <div class="d-flex flex-column flex-lg-row align-items-center">
                    <div class="text-center text-lg-left">
                        <h3 class="fw-semibold">High Performance</h3>
                        <p class="text-muted">
                            With years of experience, we ensure superior quality and performance in every project we undertake. Our commitment to excellence drives measurable results for our clients. We deliver high-performing solutions designed to meet the demands of today's fast-paced business environment.
                        </p>
                    </div>
                    <img src="assets/images/feature-1.jpg" alt="High Performance" class="img-fluid rounded shadow-sm mb-4 mb-lg-0" style="width: 100%; height: 250px; object-fit: cover; margin-left: 20px;">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Projects Section (Dynamic) -->
<section class="projects-section py-5 ">
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
    <div class="card-footer text-center">
        <a href="projects.php" class="btn btn-primary btn-lg px-4 py-2">View Project</a>
    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonials-section py-5 bg-light">
    <div class="container">
        <h2 class="text-center display-5 fw-bold mb-5">What Our Clients Say</h2>
        <div class="row">
            <!-- Testimonial Card 1 -->
            <div class="col-md-4 mb-4">
                <div class="testimonial-card bg-light p-4 rounded shadow-lg text-center">
                    <img src="assets/images/team-1.jpg" alt="Jane Doe" class="rounded-circle mb-3" style="width: 100px; height: 100px; object-fit: cover;">
                    <h5 class="fw-bold mb-2">Jane Doe</h5>
                    <p class="text-muted">"SolutionX transformed our business operations with their custom software solutions. The team is professional, reliable, and truly understands our needs."</p>
                </div>
            </div>
            <!-- Testimonial Card 2 -->
            <div class="col-md-4 mb-4">
                <div class="testimonial-card bg-light p-4 rounded shadow-lg text-center">
                    <img src="assets/images/team-2.jpg" alt="John Smith" class="rounded-circle mb-3" style="width: 100px; height: 100px; object-fit: cover;">
                    <h5 class="fw-bold mb-2">John Smith</h5>
                    <p class="text-muted">"Their mobile app development team exceeded our expectations. The app is fast, responsive, and user-friendly. Highly recommended!"</p>
                </div>
            </div>
            <!-- Testimonial Card 3 -->
            <div class="col-md-4 mb-4">
                <div class="testimonial-card bg-light p-4 rounded shadow-lg text-center">
                    <img src="assets/images/team-3.jpg" alt="Emily Johnson" class="rounded-circle mb-3" style="width: 100px; height: 100px; object-fit: cover;">
                    <h5 class="fw-bold mb-2">Emily Johnson</h5>
                    <p class="text-muted">"SolutionX's cloud solutions helped us save on infrastructure costs and improved scalability. Their team was professional throughout the process."</p>
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
        <a href="contact.php" class="btn btn-primary btn-lg px-4 py-2">Contact Us</a>
    </div>
</section>

<!-- Accordion Section -->
<section class="accordion-section py-5 bg-light">
    <div class="container">
        <div class="accordion" id="accordionPanelsStayOpenExample">
            <!-- Accordion Item 1 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                        Why Choose Us?
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                    <div class="accordion-body">
                        <strong>SolutionX delivers innovative, scalable, and reliable software solutions.</strong> We combine cutting-edge technologies with a client-first approach, ensuring your business achieves its full potential.
                    </div>
                </div>
            </div>
            <!-- Accordion Item 2 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                        Our Expertise
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        <strong>We specialize in custom software development, cloud solutions, and AI-powered tools.</strong> Our team ensures seamless integration and outstanding performance for every project.
                    </div>
                </div>
            </div>
            <!-- Accordion Item 3 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                        Trusted by Industry Leaders
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        <strong>Join the ranks of satisfied clients worldwide.</strong> We have worked with startups, SMEs, and large enterprises to build robust solutions that stand the test of time.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include 'includes/footer.php'; ?>