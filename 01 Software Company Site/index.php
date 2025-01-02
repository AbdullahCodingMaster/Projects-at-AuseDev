<?php include 'includes/header.php'; ?>
<div class="hero-section text-center text-white d-flex align-items-center justify-content-center">
    <div>
        <h1 class="display-4">Welcome to SolutionX</h1>
        <p class="lead">Innovative Software Solutions for Your Business</p>
        <a href="about.php" class="btn btn-primary btn-lg">Learn More</a>
    </div>
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