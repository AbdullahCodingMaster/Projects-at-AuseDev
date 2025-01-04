<?php
include_once 'middleware.php';  // Ensure this is included before using functions
?>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm" id="navbar">
    <div class="container">
        <!-- Brand Name -->
        <a class="navbar-brand fw-bold fs-4" href="<?php echo BASE_URL; ?>index.php">
            <span class="text-primary">Solution</span><span class="text-secondary">X</span>
        </a>

        <!-- Hamburger Menu Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <?php
                $menuItems = [
                    ['name' => 'Home', 'url' => 'index.php'],
                    ['name' => 'About', 'url' => 'about.php'],
                    ['name' => 'Services', 'url' => 'services.php'],
                    ['name' => 'Projects', 'url' => 'projects.php'],
                    ['name' => 'Contact', 'url' => 'contact.php'],
                ];
                $currentPage = basename($_SERVER['PHP_SELF']); // Get the current file name

                foreach ($menuItems as $item):
                    $isActive = $currentPage === $item['url'] ? 'active' : '';
                ?>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $isActive; ?>" href="<?php echo BASE_URL . $item['url']; ?>">
                            <?php echo htmlspecialchars($item['name']); ?>
                        </a>
                    </li>
                <?php endforeach; ?>

                <?php if (isAuthenticated()): ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="<?php echo BASE_URL . 'uploads/avatars/' . getUserAvatar(); ?>" alt="Avatar" class="rounded-circle" style="width: 35px; height: 35px; margin-right: 8px;">
                            <?php echo htmlspecialchars(getUserName()); ?>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end shadow-lg" aria-labelledby="navbarDropdown">
                            <?php if (getUserRole() === 'admin'): ?>
                                <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>admin/dashboard.php">Dashboard</a></li>
                            <?php else: ?>
                                <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>user/dashboard.php">Dashboard</a></li>
                                <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>user/my_requests.php">My Requests</a></li>
                            <?php endif; ?>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item text-danger" href="<?php echo BASE_URL; ?>auth/logout.php">Logout</a></li>
                        </ul>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $currentPage === 'auth/login.php' ? 'active' : ''; ?>" href="<?php echo BASE_URL; ?>auth/login.php">
                            <i class="bi bi-box-arrow-in-right"></i> Sign In
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $currentPage === 'auth/register.php' ? 'active' : ''; ?>" href="<?php echo BASE_URL; ?>auth/register.php">
                            <i class="bi bi-person-plus"></i> Register
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>

<!-- Add this script below the navbar or in an external JS file -->
<script>
    // Add scroll event listener to navbar
    window.onscroll = function() {
        stickyNavbar()
    };

    var navbar = document.getElementById("navbar");
    var sticky = navbar.offsetTop;

    // Add sticky class to navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
    function stickyNavbar() {
        if (window.pageYOffset > sticky) {
            navbar.classList.add("sticky");
        } else {
            navbar.classList.remove("sticky");
        }
    }
</script>

<!-- Add CSS -->
<style>
    /* Sticky Navbar Effect */
    .navbar.sticky {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 1000;
        transition: top 1.5s ease, background-color 0.5s ease-in-out, box-shadow 0.3s ease;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        /* Deeper shadow for a more pronounced effect */
        background-color: #f8f9fa !important;
        /* Slight background change for better visibility */
    }

    /* Smooth transition when navbar becomes sticky */
    .navbar {
        transition: top 1.5s ease, transform 0.3s ease-in-out;
    }

    /* Smooth transition for the navbar-toggler */
    .navbar .navbar-toggler {
        transition: transform 0.5s ease-in-out;
        /* Slight delay for hamburger icon */
    }

    /* Optional: Add background color change on scroll */
    .navbar.sticky {
        background-color: #f8f9fa !important;
    }

    /* For mobile view adjustments */
    .navbar .navbar-toggler-icon {
        transition: transform 0.5s ease-in-out;
    }

    /* Optional: Add more space on the navbar when sticky */
    .navbar.sticky .navbar-brand,
    .navbar.sticky .navbar-nav .nav-link {
        transition: padding-top 0.5s ease-out;
    }
</style>