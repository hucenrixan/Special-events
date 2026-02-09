<?php 
    $pageTitle = "About Us";
    $currentPage = "about";
    $headerImage = "https://images.unsplash.com/photo-1511795409834-ef04bbd61622?auto=format&fit=crop&w=1920&q=60";
    $pageHeaderTitle = "About Us";
    $pageHeaderSubtitle = "Bringing Elegance, Precision, and Passion to Every Celebration";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'includes/head.php'; ?>
</head>
<body>
    <?php include 'includes/navbar.php'; ?>

    <main>
        <?php include 'includes/banner.php'; ?>

        <section class="about-page-content" style="padding: 80px 0;">
            <div class="container">
                <div class="about-container" style="display: flex; gap: 50px; align-items: center;">
                    <div class="about-image" style="flex: 1;">
                        <img src="https://images.unsplash.com/photo-1511795409834-ef04bbd61622?auto=format&fit=crop&w=800&q=60" alt="About Special Events" style="width: 100%; border-radius: 15px; box-shadow: 0 20px 40px rgba(0,0,0,0.1);">
                    </div>
                    <div class="about-content" style="flex: 1;">
                        <div class="section-title" style="text-align: left; margin-bottom: 30px;">
                            <h2 style="font-family: var(--font-heading); font-size: 2.5rem; color: var(--primary-color);">Our Story</h2>
                            <span class="flourish">
                                <svg width="100" height="30" viewBox="0 0 100 30" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0,15 C20,5 60,25 80,15" stroke="#8b947a" fill="transparent" stroke-width="1"/>
                                </svg>
                            </span>
                        </div>
                        <p style="font-size: 1.1rem; margin-bottom: 20px; color: var(--text-dark);">Special Events is a premier event planning and management company dedicated to creating unforgettable experiences. With years of expertise in the industry, we bring elegance, precision, and passion to every celebration.</p>
                        <p style="font-size: 1.1rem; margin-bottom: 30px; color: var(--text-dark);">Whether it's a grand wedding, a corporate gala, or an intimate private gathering, our team works tirelessly to ensure every detail is perfect, reflecting your unique style and vision.</p>
                        
                        <div class="mission-vision" style="margin-top: 40px; display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
                            <div class="mission">
                                <h3 style="font-family: var(--font-heading); color: var(--primary-color); margin-bottom: 15px;">Our Mission</h3>
                                <p>To exceed our clients' expectations by delivering exceptional events through creativity, attention to detail, and a commitment to excellence.</p>
                            </div>
                            <div class="vision">
                                <h3 style="font-family: var(--font-heading); color: var(--primary-color); margin-bottom: 15px;">Our Vision</h3>
                                <p>To be the leading event planning partner recognized for transforming visions into extraordinary realities across the globe.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main>

    <?php include 'includes/footer.php'; ?>
</body>
</html>
