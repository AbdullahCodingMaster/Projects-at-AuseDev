<?php include 'includes/header.php'; ?>
<div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active">
            <div class="hero-section text-center text-white d-flex align-items-center justify-content-center" style="background: url('assets/images/hero-frontend.jpg') no-repeat center center/cover; height: 100vh;">
                <div>
                    <h1 class="display-4">Frontend Development</h1>
                    <p class="lead">Crafting stunning and responsive interfaces.</p>
                    <a href="about.php" class="btn btn-primary btn-lg">Learn More</a>
                </div>
            </div>
        </div>
        <!-- Slide 2 -->
        <div class="carousel-item">
            <div class="hero-section text-center text-white d-flex align-items-center justify-content-center" style="background: url('assets/images/hero-backend.jpg') no-repeat center center/cover; height: 100vh;">
                <div>
                    <h1 class="display-4">Backend Development</h1>
                    <p class="lead">Building powerful and scalable server-side solutions.</p>
                    <a href="services.php" class="btn btn-primary btn-lg">Explore Services</a>
                </div>
            </div>
        </div>
        <!-- Slide 3 -->
        <div class="carousel-item">
            <div class="hero-section text-center text-white d-flex align-items-center justify-content-center" style="background: url('assets/images/hero-database.jpg') no-repeat center center/cover; height: 100vh;">
                <div>
                    <h1 class="display-4">Database Management</h1>
                    <p class="lead">Organizing and managing your data efficiently.</p>
                    <a href="projects.php" class="btn btn-primary btn-lg">View Projects</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


<div class="container my-5">
    <section id="services" class="text-center">
        <h2>Our Services</h2>
        <p>We deliver cutting-edge solutions tailored to your needs.</p>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="service-box p-4 shadow-sm">
                    <i class="fas fa-laptop-code fa-3x mb-3 text-primary"></i>
                    <h5>Web Development</h5>
                    <p>Building modern, scalable web applications.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-box p-4 shadow-sm">
                    <i class="fas fa-mobile-alt fa-3x mb-3 text-success"></i>
                    <h5>Mobile Apps</h5>
                    <p>Creating intuitive mobile experiences.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-box p-4 shadow-sm">
                    <i class="fas fa-cloud fa-3x mb-3 text-info"></i>
                    <h5>Cloud Solutions</h5>
                    <p>Empowering businesses with cloud technology.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="projects" class="mt-5">
        <h2>Our Projects</h2>
        <p>Explore the work we’ve done for our clients.</p>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card">
                    <img src="assets/images/project1.jpg" class="card-img-top" alt="Project 1">
                    <div class="card-body">
                        <h5 class="card-title">Project Alpha</h5>
                        <p class="card-text">An AI-powered task manager.</p>
                        <a href="project.php?id=1" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="assets/images/project2.jpg" class="card-img-top" alt="Project 2">
                    <div class="card-body">
                        <h5 class="card-title">Project Beta</h5>
                        <p class="card-text">E-commerce platform for small businesses.</p>
                        <a href="project.php?id=2" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include 'includes/footer.php'; ?>