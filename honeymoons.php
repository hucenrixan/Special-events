<?php 
    $pageTitle = "Honeymoons";
    $currentPage = "services";
    $headerImage = "assets/img/photo4.jpg";
    $pageHeaderSubtitle = "The Perfect Start to Your Forever";
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
                        <h2 style="font-family: var(--font-heading); color: var(--primary-color); margin-bottom: 20px; font-size: 2rem;">Romantic Getaways</h2>
                        <p style="margin-bottom: 20px;">Your honeymoon should be as unique and special as your wedding. We specialize in curating romantic, luxury honeymoon experiences that allow you to unwind and celebrate your new life together.</p>
                        <p style="margin-bottom: 20px;">From secluded tropical beaches and private villas to culturally rich city escapes and adventurous journeys, we handle every detail of your travel. Let us take care of the planning so you can focus on creating unforgettable memories with your partner.</p>
                    </div>
                    <div style="flex: 1;">
                        <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=800&q=60" alt="Honeymoons" style="width: 100%; border-radius: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                    </div>
                </div>
            </div>
        </section>
        <section class="work-gallery" style="padding: 80px 0;">
            <div class="container">
                <div class="section-title">
                    <h2>Recent Escapes</h2>
                    <span class="flourish">
                        <svg width="100" height="30" viewBox="0 0 100 30" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10,15 C30,5 70,25 90,15" stroke="#8b947a" fill="transparent" stroke-width="1"/>
                            <path d="M45,15 C50,10 50,10 55,15 C50,20 50,20 45,15" stroke="#8b947a" fill="#8b947a"/>
                        </svg>
                    </span>
                </div>
                <div class="gallery-grid">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=600&q=60" alt="Honeymoon 1" style="width: 100%; height: 100%; object-fit: cover; transition: var(--transition);">
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1515238152791-8216bfdf89a7?auto=format&fit=crop&w=600&q=60" alt="Honeymoon 2" style="width: 100%; height: 100%; object-fit: cover; transition: var(--transition);">
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1473116763249-2faaef81ccda?auto=format&fit=crop&w=600&q=60" alt="Honeymoon 3" style="width: 100%; height: 100%; object-fit: cover; transition: var(--transition);">
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1437719417032-8595fd9e9dc6?auto=format&fit=crop&w=600&q=60" alt="Honeymoon 4" style="width: 100%; height: 100%; object-fit: cover; transition: var(--transition);">
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1471922694854-ff1b63b20054?auto=format&fit=crop&w=600&q=60" alt="Honeymoon 5" style="width: 100%; height: 100%; object-fit: cover; transition: var(--transition);">
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1520483601560-389dff434f1c?auto=format&fit=crop&w=600&q=60" alt="Honeymoon 6" style="width: 100%; height: 100%; object-fit: cover; transition: var(--transition);">
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
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=crop&w=300&q=60" alt="Travel Consultant">
                    </div>
                    <div class="provider-details">
                        <h3>Daniel Evans</h3>
                        <p>Senior Travel Consultant specializing in luxury romantic getaways and adventurous honeymoon experiences across the globe.</p>
                        <div class="provider-socials">
                            <a href="https://instagram.com/daniel_travels" target="_blank"><i class="fab fa-instagram"></i> @daniel_travels</a>
                        </div>
                        <div class="provider-contact">
                            <i class="fas fa-phone"></i> +94 77 667 7889
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'includes/footer.php'; ?>
</body>
</html>
