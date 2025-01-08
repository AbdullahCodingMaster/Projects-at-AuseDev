<?php
include_once 'middleware.php'; // Ensure middleware is included
?>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm sticky-top" id="navbar">
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
            <ul class="navbar-nav ms-auto text-center">
                <?php
                $menuItems = [
                    ['name' => 'Home', 'url' => 'index.php'],
                    ['name' => 'About', 'url' => 'about.php'],
                    ['name' => 'Services', 'url' => 'services.php'],
                    ['name' => 'Projects', 'url' => 'projects.php'],
                    ['name' => 'Contact', 'url' => 'contact.php'],
                ];
                $currentPage = basename($_SERVER['PHP_SELF']);

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
                        <a class="nav-link dropdown-toggle d-flex align-items-center justify-content-center" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="<?php echo BASE_URL . 'uploads/avatars/' . getUserAvatar(); ?>" alt="Avatar" class="rounded-circle user-avatar me-2">
                            <?php echo htmlspecialchars(getUserName()); ?>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end shadow-lg" aria-labelledby="navbarDropdown">
                            <?php if (getUserRole() === 'admin'): ?>
                                <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>admin/dashboard.php">Admin Dashboard</a></li>
                            <?php else: ?>
                                <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>user/dashboard.php">User Dashboard</a></li>
                                <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>user/my_requests.php">My Requests</a></li>
                            <?php endif; ?>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item text-danger" href="<?php echo BASE_URL; ?>auth/logout.php">Logout</a></li>
                        </ul>
                    </li>
                <?php else: ?>
                    <li class="nav-item my-2 my-lg-0">
                        <a class="btn btn-outline-primary btn-sm w-100 mb-2 mb-lg-0 nav-btn" href="<?php echo BASE_URL; ?>auth/login.php">
                            <i class="bi bi-box-arrow-in-right"></i> Sign In
                        </a>
                    </li>
                    <li class="nav-item ms-lg-2">
                        <a class="btn btn-primary btn-sm w-100 nav-btn" href="<?php echo BASE_URL; ?>auth/register.php">
                            <i class="bi bi-person-plus"></i> Register
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>