<?php 
    $pageTitle = "Cake";
    $currentPage = "services";
    $headerImage = "assets/img/photo7.JPG";
    $pageHeaderTitle = "Custom Cakes";
    $pageHeaderSubtitle = "A Sweet Masterpiece for Your Celebration";
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
                        <h2 style="font-family: var(--font-heading); color: var(--primary-color); margin-bottom: 20px; font-size: 2rem;">Deliciously Crafted</h2>
                        <p style="margin-bottom: 20px;">A cake is more than just a dessert; it's a centerpiece of your celebration. Our expert pâtissiers specialize in creating bespoke cakes that are as beautiful as they are delicious.</p>
                        <p style="margin-bottom: 20px;">From multi-tiered wedding cakes with intricate fondant work to elegant, minimalist designs for intimate gatherings, we tailor every cake to your specific taste and theme. We use only the finest ingredients to ensure every bite is a moment of pure bliss.</p>
                    </div>
                    <div style="flex: 1;">
                        <img src="https://images.unsplash.com/photo-1535141192574-5d4897c12636?auto=format&fit=crop&w=800&q=60" alt="Cake" style="width: 100%; border-radius: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                    </div>
                </div>
            </div>
        </section>
        <section class="work-gallery" style="padding: 80px 0;">
            <div class="container">
                <div class="section-title">
                    <h2>Cake Gallery</h2>
                    <span class="flourish">
                        <svg width="100" height="30" viewBox="0 0 100 30" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10,15 C30,5 70,25 90,15" stroke="#8b947a" fill="transparent" stroke-width="1"/>
                            <path d="M45,15 C50,10 50,10 55,15 C50,20 50,20 45,15" stroke="#8b947a" fill="#8b947a"/>
                        </svg>
                    </span>
                </div>
                <div class="gallery-grid">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1535141192574-5d4897c12636?auto=format&fit=crop&w=600&q=60" alt="Cake 1" style="width: 100%; height: 100%; object-fit: cover; transition: var(--transition);">
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1578985545062-69928b1d9587?auto=format&fit=crop&w=600&q=60" alt="Cake 2" style="width: 100%; height: 100%; object-fit: cover; transition: var(--transition);">
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1563729784474-d77dbb933a9e?auto=format&fit=crop&w=600&q=60" alt="Cake 3" style="width: 100%; height: 100%; object-fit: cover; transition: var(--transition);">
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1562285804-8a31e4504035?auto=format&fit=crop&w=600&q=60" alt="Cake 4" style="width: 100%; height: 100%; object-fit: cover; transition: var(--transition);">
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1464195244916-405fa0a82545?auto=format&fit=crop&w=600&q=60" alt="Cake 5" style="width: 100%; height: 100%; object-fit: cover; transition: var(--transition);">
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1557925923-33b27f891f88?auto=format&fit=crop&w=600&q=60" alt="Cake 6" style="width: 100%; height: 100%; object-fit: cover; transition: var(--transition);">
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
                        <img src="/assets/img/sofa%20.jpg" alt="Lead Baker">
                    </div>
                    <div class="provider-details">
                        <h3>Sofa </h3>
                        <p>Award-winning the “Dreamee Master Class” conducted by Dreamee Cakes in Ho Chi Minh City, Vietnam.</p>
                        <div class="provider-socials">
                            <a href="https://www.instagram.com/sofaa_collections?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank"><i class="fab fa-instagram"></i> @sofaa_collections</a>
                        </div>
                        <div class="provider-contact">
                            <i class="fas fa-phone"></i> +960 7456123
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'includes/footer.php'; ?>
</body>
</html>
