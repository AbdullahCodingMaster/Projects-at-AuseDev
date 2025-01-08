<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<!-- Hero Section with Carousel -->
<section id="hero-carousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active" style="background: url('assets/images/hero-slide1.jpg') center/cover no-repeat; height: 100vh;">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center h-100 text-white">
                <h1 class="display-3 fw-bold mb-3">Welcome to SolutionX</h1>
                <p class="lead mb-4">Innovating the future with cutting-edge software solutions.</p>
                <a href="#about-content" class="btn btn-primary btn-lg px-4">Learn More</a>
            </div>
        </div>
        <!-- Slide 2 -->
        <div class="carousel-item" style="background: url('assets/images/hero-slide2.jpg') center/cover no-repeat; height: 100vh;">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center h-100 text-white">
                <h1 class="display-3 fw-bold mb-3">Empowering Your Vision</h1>
                <p class="lead mb-4">Tailored software solutions for your success.</p>
                <a href="#services-section" class="btn btn-success btn-lg px-4">Our Services</a>
            </div>
        </div>
        <!-- Slide 3 -->
        <div class="carousel-item" style="background: url('assets/images/hero-slide3.jpg') center/cover no-repeat; height: 100vh;">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center h-100 text-white">
                <h1 class="display-3 fw-bold mb-3">Driving Innovation</h1>
                <p class="lead mb-4">Redefining technological standards worldwide.</p>
                <a href="#team-section" class="btn btn-info btn-lg px-4">Meet the Team</a>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</section>

<!-- About Section -->

<div id="about-content" class="container py-5">
    <div class="text-center mb-5">
        <h1 class="display-4 fw-bold text-dark">About <span class="text-primary">SolutionX</span></h1>
        <p class="lead text-secondary">
            At SolutionX, we transform ideas into impactful realities. Through innovative and cutting-edge software solutions, we empower businesses to achieve goals, driving sustainable growth and long-term value.
        </p>
    </div>

    <div class="row g-5">
        <!-- Mission Section -->
        <div class="col-lg-6">
            <div class="card h-100 border-0 shadow">
                <div class="card-body text-center p-4">
                    <div class="icon mb-3">
                        <i class="bi bi-flag-fill text-primary fs-2"></i>
                    </div>
                    <h4 class="card-title text-dark fw-bold">Our Mission</h4>
                    <p class="card-text text-secondary mt-3">
                        To deliver state-of-the-art technology solutions that enhance business efficiency, unlock growth, and empower strategic success. We embrace innovation and collaboration as core values in our journey.
                    </p>
                </div>
            </div>
        </div>
        <!-- Vision Section -->
        <div class="col-lg-6">
            <div class="card h-100 border-0 shadow">
                <div class="card-body text-center p-4">
                    <div class="icon mb-3">
                        <i class="bi bi-eye-fill text-primary fs-2"></i>
                    </div>
                    <h4 class="card-title text-dark fw-bold">Our Vision</h4>
                    <p class="card-text text-secondary mt-3">
                        To be a global leader in software innovation, empowering organizations to thrive in the digital age. We are driven by excellence and a vision to create lasting impact through technology.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Services Section -->
<section id="services-section" class="services-section py-5 bg-light">
    <div class="container">
        <h2 class="text-center display-5 fw-bold mb-5 text-dark">Our <span class="text-primary">Services</span></h2>
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
        <a href="services.php" class="btn btn-primary btn-sm">View Service</a>
    </div>
</section>

<!-- Team Section -->
<section id="team-section" class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark">Meet <span class="text-primary">Our Team</span></h2>
            <p class="text-secondary">The driving force behind our success, innovation, and excellence.</p>
        </div>
        <div class="row g-5 justify-content-center">
            <!-- Team Member 1 -->
            <div class="col-lg-3 col-md-6 text-center">
                <div class="team-card bg-white rounded shadow py-4 px-3">
                    <img src="assets/images/team-1.jpg" alt="John Doe" class="img-fluid rounded-circle mb-3" style="width: 120px; height: 120px; object-fit: cover;">
                    <h5 class="fw-bold text-dark">John Doe</h5>
                    <p class="text-primary fw-semibold">CEO & Founder</p>
                    <p class="text-muted">Leading the company with vision and expertise.</p>
                </div>
            </div>
            <!-- Team Member 2 -->
            <div class="col-lg-3 col-md-6 text-center">
                <div class="team-card bg-white rounded shadow py-4 px-3">
                    <img src="assets/images/team-2.jpg" alt="Jane Smith" class="img-fluid rounded-circle mb-3" style="width: 120px; height: 120px; object-fit: cover;">
                    <h5 class="fw-bold text-dark">Jane Smith</h5>
                    <p class="text-primary fw-semibold">CTO</p>
                    <p class="text-muted">Driving technology innovation and strategy.</p>
                </div>
            </div>
            <!-- Team Member 3 -->
            <div class="col-lg-3 col-md-6 text-center">
                <div class="team-card bg-white rounded shadow py-4 px-3">
                    <img src="assets/images/team-3.jpg" alt="Alice Johnson" class="img-fluid rounded-circle mb-3" style="width: 120px; height: 120px; object-fit: cover;">
                    <h5 class="fw-bold text-dark">Alice Johnson</h5>
                    <p class="text-primary fw-semibold">Project Manager</p>
                    <p class="text-muted">Ensuring projects are delivered with precision and quality.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Accordion Section -->
<section id="about-vision-mission" class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark">Our <span class="text-primary">Core Values</span></h2>
            <p class="text-secondary">Discover what drives us to deliver exceptional solutions.</p>
        </div>
        <div class="accordion shadow-sm rounded" id="accordionPanelsStayOpenExample">
            <!-- Vision -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button fw-semibold text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                        Our Vision
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                    <div class="accordion-body">
                        <strong>To revolutionize the way businesses leverage technology.</strong> Our vision is to create intelligent solutions that simplify processes and foster innovation for global growth.
                    </div>
                </div>
            </div>
            <!-- Mission -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed fw-semibold text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                        Our Mission
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        <strong>Empowering businesses through tailored software solutions.</strong> By prioritizing customer success, we focus on reliability, innovation, and outstanding support.
                    </div>
                </div>
            </div>
            <!-- Values -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed fw-semibold text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                        Our Values
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        <strong>Commitment, Innovation, and Collaboration.</strong> These principles define how we approach every project and deliver transformative solutions.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php include 'includes/footer.php'; ?>