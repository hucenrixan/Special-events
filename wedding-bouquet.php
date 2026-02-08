<?php 
    $pageTitle = "Wedding Bouquet";
    $currentPage = "services";
    $headerImage = "assets/img/photo6.JPG";
    $pageHeaderSubtitle = "Exquisite Florals for Your Special Day";
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
                        <img src="https://images.unsplash.com/photo-1519741497674-611481863552?auto=format&fit=crop&w=800&q=60" alt="Wedding Bouquet" style="width: 100%; border-radius: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                    </div>
                    <div style="flex: 1;">
                        <h2 style="font-family: var(--font-heading); color: var(--primary-color); margin-bottom: 20px; font-size: 2rem;">Floral Artistry</h2>
                        <p style="margin-bottom: 20px;">Flowers are the soul of a wedding, and the bridal bouquet is its most personal expression. Our floral designers are artists who create stunning arrangements that complement your style and enhance your beauty.</p>
                        <p style="margin-bottom: 20px;">We source the freshest blooms to craft bouquets that are vibrant, fragrant, and perfectly balanced. Whether you prefer a traditional posy, a cascading arrangement, or a modern, architectural design, we ensure your wedding florals are nothing short of perfection.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="work-gallery" style="padding: 80px 0;">
            <div class="container">
                <div class="section-title">
                    <h2>Our Bouquets</h2>
                    <span class="flourish">
                        <svg width="100" height="30" viewBox="0 0 100 30" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10,15 C30,5 70,25 90,15" stroke="#8b947a" fill="transparent" stroke-width="1"/>
                            <path d="M45,15 C50,10 50,10 55,15 C50,20 50,20 45,15" stroke="#8b947a" fill="#8b947a"/>
                        </svg>
                    </span>
                </div>
                <div class="gallery-grid">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1519741497674-611481863552?auto=format&fit=crop&w=600&q=60" alt="Bouquet 1" style="width: 100%; height: 100%; object-fit: cover; transition: var(--transition);">
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1594744803329-e58b31de8bf5?auto=format&fit=crop&w=600&q=60" alt="Bouquet 2" style="width: 100%; height: 100%; object-fit: cover; transition: var(--transition);">
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1522673607200-1648832cee98?auto=format&fit=crop&w=600&q=60" alt="Bouquet 3" style="width: 100%; height: 100%; object-fit: cover; transition: var(--transition);">
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1511795409834-ef04bbd61622?auto=format&fit=crop&w=600&q=60" alt="Bouquet 4" style="width: 100%; height: 100%; object-fit: cover; transition: var(--transition);">
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1465495910483-0d674b0b857e?auto=format&fit=crop&w=600&q=60" alt="Bouquet 5" style="width: 100%; height: 100%; object-fit: cover; transition: var(--transition);">
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1520854221256-17451cc331bf?auto=format&fit=crop&w=600&q=60" alt="Bouquet 6" style="width: 100%; height: 100%; object-fit: cover; transition: var(--transition);">
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
                        <img src="https://images.unsplash.com/photo-1594744803329-e58b31de8bf5?auto=format&fit=crop&w=300&q=60" alt="Lead Florist">
                    </div>
                    <div class="provider-details">
                        <h3>Isabella Rose</h3>
                        <p>Senior Floral Designer specializing in bespoke wedding bouquets and artistic floral arrangements that capture the essence of romance.</p>
                        <div class="provider-socials">
                            <a href="https://instagram.com/isabella_blooms" target="_blank"><i class="fab fa-instagram"></i> @isabella_blooms</a>
                        </div>
                        <div class="provider-contact">
                            <i class="fas fa-phone"></i> +94 77 556 6778
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'includes/footer.php'; ?>
</body>
</html>
