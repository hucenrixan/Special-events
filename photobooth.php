<?php 
    $pageTitle = "Photobooth";
    $currentPage = "services";
    $headerImage = "assets/img/photo8.JPG";
    $pageHeaderSubtitle = "Fun & Interactive Memories";
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
                        <img src="/assets/img/photobooth.jpg" alt="Photobooth" style="width: 100%; border-radius: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                    </div>
                    <div style="flex: 1;">
                        <h2 style="font-family: var(--font-heading); color: var(--primary-color); margin-bottom: 20px; font-size: 2rem;">Unleash the Fun</h2>
                        <p style="margin-bottom: 20px;">Add an extra layer of excitement to your event with our premium photobooth experience, provided in collaboration with our specialist partners. It's the perfect way to keep your guests entertained and give them a tangible memory to take home.</p>
                        <p style="margin-bottom: 20px;">Our photobooths come equipped with high-resolution cameras, professional lighting, and a wide variety of fun props and custom backdrops. Whether it's a wedding, birthday party, or corporate gala, our photobooth is always a hit with guests of all ages.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="work-gallery" style="padding: 80px 0;">
            <div class="container">
                <div class="section-title">
                    <h2>Recent Fun</h2>
                    <span class="flourish">
                        <svg width="100" height="30" viewBox="0 0 100 30" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10,15 C30,5 70,25 90,15" stroke="#8b947a" fill="transparent" stroke-width="1"/>
                            <path d="M45,15 C50,10 50,10 55,15 C50,20 50,20 45,15" stroke="#8b947a" fill="#8b947a"/>
                        </svg>
                    </span>
                </div>
                <div class="gallery-grid">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1533174072545-7a4b6ad7a6c3?auto=format&fit=crop&w=600&q=60" alt="Photobooth 1" style="width: 100%; height: 100%; object-fit: cover; transition: var(--transition);">
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1517263904808-5dc91e3e7044?auto=format&fit=crop&w=600&q=60" alt="Photobooth 2" style="width: 100%; height: 100%; object-fit: cover; transition: var(--transition);">
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1520367445093-50df9c72e90f?auto=format&fit=crop&w=600&q=60" alt="Photobooth 3" style="width: 100%; height: 100%; object-fit: cover; transition: var(--transition);">
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1520854221256-17451cc331bf?auto=format&fit=crop&w=600&q=60" alt="Photobooth 4" style="width: 100%; height: 100%; object-fit: cover; transition: var(--transition);">
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1492684223066-81342ee5ff30?auto=format&fit=crop&w=600&q=60" alt="Photobooth 5" style="width: 100%; height: 100%; object-fit: cover; transition: var(--transition);">
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1519741497674-611481863552?auto=format&fit=crop&w=600&q=60" alt="Photobooth 6" style="width: 100%; height: 100%; object-fit: cover; transition: var(--transition);">
                    </div>
                </div>
            </div>
        </section>

        <section class="professional-info">
            <div class="container">
                <div class="section-title">
                    <h2>Service Partner</h2>
                    <span class="flourish">
                        <svg width="100" height="30" viewBox="0 0 100 30" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10,15 C30,5 70,25 90,15" stroke="#8b947a" fill="transparent" stroke-width="1"/>
                            <path d="M45,15 C50,10 50,10 55,15 C50,20 50,20 45,15" stroke="#8b947a" fill="#8b947a"/>
                        </svg>
                    </span>
                </div>
                <div class="provider-card">
                    <div class="provider-image">
                        <img src="https://via.placeholder.com/300x300?text=SnapMagic+Events" alt="SnapMagic Events">
                    </div>
                    <div class="provider-details">
                        <h3>SnapMagic Events</h3>
                        <p>Our trusted partner for premium photobooth experiences. SnapMagic Events specializes in high-end interactive photo solutions for luxury weddings and corporate galas.</p>
                        <div class="provider-socials">
                            <a href="https://instagram.com/snapmagic_events" target="_blank"><i class="fab fa-instagram"></i> @snapmagic_events</a>
                        </div>
                        <div class="provider-contact">
                            <i class="fas fa-globe"></i> www.snapmagicevents.com
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'includes/footer.php'; ?>
</body>
</html>
