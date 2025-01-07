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
        <h1 class="display-4 fw-bold text-primary">About SolutionX</h1>
        <p class="lead text-muted">
            At SolutionX, we bring ideas to life through innovative and cutting-edge software solutions. Our dedicated team empowers businesses and individuals to achieve their goals through tailored software solutions that create long-lasting value.
        </p>
    </div>

    <div class="row g-4">
        <div class="col-md-6">
            <div class="card shadow-lg border-light">
                <div class="card-body">
                    <h4 class="card-title text-primary fw-bold">Our Mission</h4>
                    <p class="card-text text-muted">
                        We strive to provide top-tier technology solutions that enable businesses to enhance their operational efficiency, unlock growth potential, and achieve their strategic goals. Our mission is to foster a culture of innovation and collaboration.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow-lg border-light">
                <div class="card-body">
                    <h4 class="card-title text-primary fw-bold">Our Vision</h4>
                    <p class="card-text text-muted">
                        Our vision is to become a globally recognized leader in the software development industry. Through our commitment to excellence and innovation, we empower organizations to succeed in an increasingly digital and connected world.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Services Section -->
<section class="services-section py-5">
    <div class="container">
        <h2 class="text-center display-5 fw-bold mb-5">Our Services</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card shadow-lg h-100">
                    <div class="card-body">
                        <h5 class="card-title">Custom Software Development</h5>
                        <p class="card-text">Our custom software solutions are designed to meet the specific needs of your business. We build scalable, secure, and high-performing software to elevate your operations.</p>
                    </div>
                    <div class="ratio ratio-16x9">
                        <video controls>
                            <source src="assets/videos/custom-software-development.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow-lg h-100">
                    <div class="card-body">
                        <h5 class="card-title">Mobile App Development</h5>
                        <p class="card-text">We create intuitive and high-performance mobile applications for both iOS and Android platforms, ensuring a seamless user experience across devices.</p>
                    </div>
                    <div class="ratio ratio-16x9">
                        <video controls>
                            <source src="assets/videos/mobile-app-development.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow-lg h-100">
                    <div class="card-body">
                        <h5 class="card-title">Cloud Solutions</h5>
                        <p class="card-text">Our cloud-based solutions help businesses improve scalability, security, and cost efficiency. We provide end-to-end cloud services, from migration to management.</p>
                    </div>
                    <div class="ratio ratio-16x9">
                        <video controls>
                            <source src="assets/videos/cloud-solutions.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
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
            <h2 class="fw-bold text-primary">Our Team</h2>
            <p class="text-muted">Meet the talented professionals behind our success.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4 text-center">
                <img src="assets/images/team-1.jpg" alt="Team Member 1" class="img-fluid rounded-circle shadow mb-3" style="width: 150px; height: 150px;">
                <h5 class="fw-bold text-primary">John Doe</h5>
                <p class="text-muted">CEO & Founder</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="assets/images/team-2.jpg" alt="Team Member 2" class="img-fluid rounded-circle shadow mb-3" style="width: 150px; height: 150px;">
                <h5 class="fw-bold text-primary">Jane Smith</h5>
                <p class="text-muted">CTO</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="assets/images/team-3.jpg" alt="Team Member 3" class="img-fluid rounded-circle shadow mb-3" style="width: 150px; height: 150px;">
                <h5 class="fw-bold text-primary">Alice Johnson</h5>
                <p class="text-muted">Project Manager</p>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>