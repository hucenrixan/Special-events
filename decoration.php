<?php 
    $pageTitle = "Decoration";
    $currentPage = "services";
    $headerImage = "assets/img/photo3.JPG";
    $pageHeaderTitle = "Decoration";
    $pageHeaderSubtitle = "Elegant & Breathtaking Event Styling";
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

        <section class="service-detail">
            <div class="container">
                <div style="display: flex; gap: 50px; align-items: center; margin-bottom: 50px;">
                    <div style="flex: 1;">
                        <img src="assets/img/photo8.JPG" alt="Decoration" style="width: 100%; border-radius: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                    </div>
                    <div style="flex: 1;">
                        <h2 style="font-family: var(--font-heading); color: var(--primary-color); margin-bottom: 20px; font-size: 2rem;">Elevate Your Event</h2>
                        <p style="margin-bottom: 20px;">At Special Events, we believe that the right decoration can transform any venue into a magical space that reflects your personality and the essence of your celebration.</p>
                        <p style="margin-bottom: 20px;">Our team of expert stylists works closely with you to design a cohesive look, from floral arrangements and table settings to lighting and backdrop designs. Whether you envision a classic, romantic wedding or a modern, vibrant corporate event, we bring your vision to life with meticulous attention to detail.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="work-gallery" style="padding: 80px 0;">
            <div class="container">
                <div class="section-title">
                    <h2>Our Decorations</h2>
                    <span class="flourish">
                        <svg width="100" height="30" viewBox="0 0 100 30" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10,15 C30,5 70,25 90,15" stroke="#8b947a" fill="transparent" stroke-width="1"/>
                            <path d="M45,15 C50,10 50,10 55,15 C50,20 50,20 45,15" stroke="#8b947a" fill="#8b947a"/>
                        </svg>
                    </span>
                </div>
                <div class="gallery-grid">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1519225421980-715cb0215aed?auto=format&fit=crop&w=600&q=60" alt="Decoration 1" style="width: 100%; height: 100%; object-fit: cover; transition: var(--transition);">
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1511795409834-ef04bbd61622?auto=format&fit=crop&w=600&q=60" alt="Decoration 2" style="width: 100%; height: 100%; object-fit: cover; transition: var(--transition);">
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1478146896981-b80fe463b330?auto=format&fit=crop&w=600&q=60" alt="Decoration 3" style="width: 100%; height: 100%; object-fit: cover; transition: var(--transition);">
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1519741497674-611481863552?auto=format&fit=crop&w=600&q=60" alt="Decoration 4" style="width: 100%; height: 100%; object-fit: cover; transition: var(--transition);">
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1502635385003-ee1e6a1a742d?auto=format&fit=crop&w=600&q=60" alt="Decoration 5" style="width: 100%; height: 100%; object-fit: cover; transition: var(--transition);">
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1520854221256-17451cc331bf?auto=format&fit=crop&w=600&q=60" alt="Decoration 6" style="width: 100%; height: 100%; object-fit: cover; transition: var(--transition);">
                    </div>
                </div>
            </div>
        </section>

        <section class="professional-info">
            <div class="container">
                <div class="section-title">
                    <h2>Our Lead Expert</h2>
                    <span class="flourish">
                        <svg width="100" height="30" viewBox="0 0 100 30" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10,15 C30,5 70,25 90,15" stroke="#8b947a" fill="transparent" stroke-width="1"/>
                            <path d="M45,15 C50,10 50,10 55,15 C50,20 50,20 45,15" stroke="#8b947a" fill="#8b947a"/>
                        </svg>
                    </span>
                </div>
                <div class="provider-card">
                    <div class="provider-image">
                        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=300&q=60" alt="Lead Stylist">
                    </div>
                    <div class="provider-details">
                        <h3>Sarah Mitchell</h3>
                        <p>Lead Event Stylist with a passion for creating elegant and breathtaking atmospheres that tell a unique story.</p>
                        <div class="provider-socials">
                            <a href="https://instagram.com/sarah_stylist" target="_blank"><i class="fab fa-instagram"></i> @sarah_stylist</a>
                        </div>
                        <div class="provider-contact">
                            <i class="fas fa-phone"></i> +94 77 112 2334
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'includes/footer.php'; ?>
</body>
</html>
