<header>
    <div class="container navbar">
        <div class="logo">
            <a href="index.php"><img src="assets/img/logo.PNG" alt="Special Events"></a>
        </div>
        <div class="menu-toggle" id="mobile-menu">
            <i class="fas fa-bars"></i>
        </div>
        <ul class="nav-links">
            <li><a href="index.php" class="<?php echo (isset($currentPage) && $currentPage == 'home') ? 'active' : ''; ?>">Home</a></li>
            <li class="dropdown">
                <a href="index.php#services" class="<?php echo (isset($currentPage) && $currentPage == 'services') ? 'active' : ''; ?>">Services <i class="fas fa-chevron-down"></i></a>
                <ul class="dropdown-content">
                    <li><a href="decoration.php">Decoration</a></li>
                    <li><a href="photo-video.php">Photo & Video</a></li>
                    <li><a href="photobooth.php">Photobooth</a></li>
                    <li><a href="cake.php">Cake</a></li>
                    <li><a href="wedding-bouquet.php">Wedding Bouquet</a></li>
                    <li><a href="honeymoons.php">Honeymoons</a></li>
                    <li><a href="destination-events.php">Destination Events</a></li>
                </ul>
            </li>
            <li><a href="destination-events.php" class="<?php echo (isset($currentPage) && $currentPage == 'destination') ? 'active' : ''; ?>">Destination Events</a></li>
            <li><a href="about.php" class="<?php echo (isset($currentPage) && $currentPage == 'about') ? 'active' : ''; ?>">About Us</a></li>
            <li><a href="contact.php" class="<?php echo (isset($currentPage) && $currentPage == 'contact') ? 'active' : ''; ?>">Contact Us</a></li>
        </ul>
        <div class="social-icons-header">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/specialevents.mv/"><i class="fab fa-instagram"></i></a>
            <a href="https://wa.me/9609707788"><i class="fab fa-whatsapp"></i></a>
        </div>
    </div>
</header>
