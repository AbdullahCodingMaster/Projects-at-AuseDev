<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

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
<!-- Our Services -->
<section class="services-section py-5 bg-light">
    <div class="container">
        <h2 class="text-center display-4 text-primary fw-bold mb-4">Our Services</h2>
        <p class="text-center text-muted fs-5 mb-5">
            Empowering businesses with cutting-edge solutions tailored to meet unique challenges and goals.
        </p>
        <div class="row g-4">
            <?php
            $services = [
                ['icon' => 'laptop-code', 'title' => 'Custom Software Development', 'text' => 'Tailored solutions to meet your business needs, built with cutting-edge technology.'],
                ['icon' => 'paint-brush', 'title' => 'UI/UX Design', 'text' => 'Creating intuitive, visually appealing interfaces that enhance user experience.'],
                ['icon' => 'chart-line', 'title' => 'Data Analytics', 'text' => 'Unlocking insights with powerful analytics tools for data-driven decisions.'],
                ['icon' => 'cloud', 'title' => 'Cloud Solutions', 'text' => 'Providing scalable, secure cloud solutions for seamless operations.'],
                ['icon' => 'mobile-alt', 'title' => 'Mobile App Development', 'text' => 'Innovative mobile apps for iOS and Android to engage users effectively.'],
                ['icon' => 'headset', 'title' => 'IT Consulting', 'text' => 'Offering expert strategies to align your technology with business goals.'],
            ];
            foreach ($services as $service): ?>
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 shadow-sm border-0 text-center">
                        <div class="card-body">
                            <div class="icon-wrapper bg-primary text-white rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                                <i class="fas fa-<?= $service['icon'] ?> fa-2x"></i>
                            </div>
                            <h5 class="card-title fw-bold text-primary mb-3"><?= $service['title'] ?></h5>
                            <p class="card-text text-muted"><?= $service['text'] ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="cta-section bg-primary text-white py-5">
    <div class="container text-center">
        <h3 class="fw-bold display-5 mb-4">Ready to Transform Your Business?</h3>
        <p class="lead mb-4">Contact us today to explore how we can help you achieve your goals.</p>
        <a href="contact.php" class="btn btn-light btn-lg px-5 py-3 shadow">
            Get Started
        </a>
    </div>
</section>


<?php include 'includes/footer.php'; ?>