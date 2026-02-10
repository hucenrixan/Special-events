<?php 
    $pageTitle = "Photo & Video";
    $currentPage = "services";
    $headerImage = "assets/img/faathihuphotos-5762.jpg";
    $pageHeaderSubtitle = "Capturing Your Timeless Moments";
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
                        <h2 style="font-family: var(--font-heading); color: var(--primary-color); margin-bottom: 20px; font-size: 1.8rem;">Professional Cinematography</h2>
                        <p style="margin-bottom: 20px;">Every event has a story to tell, and our mission is to capture it in the most beautiful way possible. Our team of professional photographers and videographers are experts at capturing both the grand moments and the subtle details.</p>
                        <p style="margin-bottom: 20px;">We use high-end equipment and creative storytelling techniques to ensure your memories are preserved forever. From cinematic wedding films to high-quality event photography, we provide a complete visual experience that you will cherish for a lifetime.</p>
                    </div>
                    <div style="flex: 1;">
                        <img src="https://images.unsplash.com/photo-1511795409834-ef04bbd61622?auto=format&fit=crop&w=800&q=60" alt="Photo & Video" style="width: 100%; border-radius: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                    </div>
                </div>
            </div>
        </section>

        <section class="video-highlights" style="padding: 80px 0; background-color: #f9f9f7;">
            <div class="container">
                <div class="section-title">
                    <h2>Cinematic Highlights</h2>
                    <span class="flourish">
                        <svg width="100" height="30" viewBox="0 0 100 30" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10,15 C30,5 70,25 90,15" stroke="#8b947a" fill="transparent" stroke-width="1"/>
                            <path d="M45,15 C50,10 50,10 55,15 C50,20 50,20 45,15" stroke="#8b947a" fill="#8b947a"/>
                        </svg>
                    </span>
                </div>
                <div class="video-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(400px, 1fr)); gap: 30px;">
                    <div class="video-item">
                        <div class="video-thumbnail" style="height: 350px; border-radius: 10px; overflow: hidden; position: relative; cursor: pointer;" data-video="https://www.youtube.com/embed/xKfkyfVDp5c">
                            <img src="https://images.unsplash.com/photo-1511795409834-ef04bbd61622?auto=format&fit=crop&w=800&q=60" alt="Cinematic Wedding" style="width: 100%; height: 100%; object-fit: cover;">
                            <div class="play-btn" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 70px; height: 70px; background: rgba(139,148,122,0.8); border-radius: 50%; display: flex; justify-content: center; align-items: center; color: #fff; font-size: 1.5rem;">
                                <i class="fas fa-play"></i>
                            </div>
                        </div>
                        <h3 style="margin-top: 15px; font-family: var(--font-heading); color: var(--primary-color);">Elegant Maldives Wedding</h3>
                        <p>A cinematic journey through a beautiful beachfront celebration.</p>
                    </div>
                    <div class="video-item">
                        <div class="video-thumbnail" style="height: 350px; border-radius: 10px; overflow: hidden; position: relative; cursor: pointer;" data-video="https://www.youtube.com/embed/5U9v9_00R0Y">
                            <img src="https://images.unsplash.com/photo-1520854221256-17451cc331bf?auto=format&fit=crop&w=800&q=60" alt="Event Highlight" style="width: 100%; height: 100%; object-fit: cover;">
                            <div class="play-btn" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 70px; height: 70px; background: rgba(139,148,122,0.8); border-radius: 50%; display: flex; justify-content: center; align-items: center; color: #fff; font-size: 1.5rem;">
                                <i class="fas fa-play"></i>
                            </div>
                        </div>
                        <h3 style="margin-top: 15px; font-family: var(--font-heading); color: var(--primary-color);">Luxury Island Celebration</h3>
                        <p>Capturing the essence of joy and luxury in paradise.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="work-gallery" style="padding: 80px 0;">
            <div class="container">
                <div class="section-title">
                    <h2>Work Gallery</h2>
                    <span class="flourish">
                        <svg width="100" height="30" viewBox="0 0 100 30" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10,15 C30,5 70,25 90,15" stroke="#8b947a" fill="transparent" stroke-width="1"/>
                            <path d="M45,15 C50,10 50,10 55,15 C50,20 50,20 45,15" stroke="#8b947a" fill="#8b947a"/>
                        </svg>
                    </span>
                </div>
                <div class="gallery-grid">
                    <div class="gallery-item">
                        <img src="assets/img/photo5.jpg" alt="Work 1" style="width: 100%; height: 100%; object-fit: cover; transition: var(--transition);">
                    </div>
                    <div class="gallery-item">
                        <img src="assets/img/photo8.JPG" alt="Work 2" style="width: 100%; height: 100%; object-fit: cover; transition: var(--transition);">
                    </div>
                    <div class="gallery-item">
                        <img src="assets/img/photo1.JPG" alt="Work 3" style="width: 100%; height: 100%; object-fit: cover; transition: var(--transition);">
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1532712938310-34cb3982ef74?auto=format&fit=crop&w=600&q=60" alt="Work 4" style="width: 100%; height: 100%; object-fit: cover; transition: var(--transition);">
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1465495910483-0d674b0b857e?auto=format&fit=crop&w=600&q=60" alt="Work 5" style="width: 100%; height: 100%; object-fit: cover; transition: var(--transition);">
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1520854221256-17451cc331bf?auto=format&fit=crop&w=600&q=60" alt="Work 6" style="width: 100%; height: 100%; object-fit: cover; transition: var(--transition);">
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
                        <img src="assets/img/shifau photo.jpg" alt="Lead Photographer">
                    </div>
                    <div class="provider-details">
                        <h3>Shifau Photographer</h3>
                        <p>Lead Photographer & Cinematographer with over 8 years of experience in capturing high-end events from Maldives.</p>
                        <div class="provider-socials">
                            <a href="https://www.instagram.com/shifau.photographer/" target="_blank"><i class="fab fa-instagram"></i> @shifau.photographer</a>
                        </div>
                        <div class="provider-contact">
                            <i class="fas fa-phone"></i> +960 7770181
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php 
        $extraFooterContent = '
        <!-- Video Modal -->
        <div id="videoModal" class="video-modal">
            <div class="modal-content">
                <span class="close-modal">&times;</span>
                <div class="video-container">
                    <iframe id="videoPlayer" src="" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        ';
    ?>
    <?php include 'includes/footer.php'; ?>
</body>
</html>
