<?php 
    $pageTitle = "Special Events - Premium Event Planner";
    $currentPage = "home";
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

        <section id="services" class="services" style="scroll-margin-top: 80px;">
            <div class="container">
                <div class="section-title">
                    <h2>Our Services</h2>
                    <span class="flourish">
                        <svg width="100" height="30" viewBox="0 0 100 30" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10,15 C30,5 70,25 90,15" stroke="#8b947a" fill="transparent" stroke-width="1"/>
                            <path d="M45,15 C50,10 50,10 55,15 C50,20 50,20 45,15" stroke="#8b947a" fill="#8b947a"/>
                        </svg>
                    </span>
                </div>
                <div class="services-grid">
                    <a href="decoration.php" class="service-item" style="text-decoration: none; color: inherit; display: block;">
                        <div class="service-icon"><i class="fas fa-holly-berry"></i></div>
                        <h3>Decoration</h3>
                        <p>Breathtaking decorations that set the perfect mood for your special celebration.</p>
                    </a>
                    <a href="photo-video.php" class="service-item" style="text-decoration: none; color: inherit; display: block;">
                        <div class="service-icon"><i class="fas fa-camera-retro"></i></div>
                        <h3>Photo & Video</h3>
                        <p>Professional photography and cinematic videography to capture and relive your most precious moments.</p>
                    </a>
                    <a href="photobooth.php" class="service-item" style="text-decoration: none; color: inherit; display: block;">
                        <div class="service-icon"><i class="fas fa-camera"></i></div>
                        <h3>Photobooth</h3>
                        <p>Fun and interactive photobooth experiences for you and your guests to enjoy.</p>
                    </a>
                    <a href="cake.php" class="service-item" style="text-decoration: none; color: inherit; display: block;">
                        <div class="service-icon"><i class="fas fa-birthday-cake"></i></div>
                        <h3>Cake</h3>
                        <p>Exquisite and delicious custom cakes designed to be the centerpiece of your event.</p>
                    </a>
                    <a href="wedding-bouquet.php" class="service-item" style="text-decoration: none; color: inherit; display: block;">
                        <div class="service-icon"><i class="fas fa-seedling"></i></div>
                        <h3>Wedding Bouquet</h3>
                        <p>Artfully crafted floral arrangements and bouquets tailored to your wedding style.</p>
                    </a>
                    <a href="honeymoons.php" class="service-item" style="text-decoration: none; color: inherit; display: block;">
                        <div class="service-icon"><i class="fas fa-plane-departure"></i></div>
                        <h3>Honeymoons</h3>
                        <p>Romantic and curated honeymoon packages for a perfect start to your new journey.</p>
                    </a>
                </div>
            </div>
        </section>

        <section id="vendors" class="vendors-section">
            <div class="container">
                <div class="section-title">
                    <h2>Trusted Vendors</h2>
                    <span class="flourish">
                        <svg width="100" height="30" viewBox="0 0 100 30" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10,15 C30,5 70,25 90,15" stroke="#8b947a" fill="transparent" stroke-width="1"/>
                            <path d="M45,15 C50,10 50,10 55,15 C50,20 50,20 45,15" stroke="#8b947a" fill="#8b947a"/>
                        </svg>
                    </span>
                </div>
                <div class="vendors-slider">
                    <div class="vendors-track">
                        <div class="vendor-logo"><img src="https://via.placeholder.com/200x100?text=Luxury+Florals" alt="Vendor 1"></div>
                        <div class="vendor-logo"><img src="https://via.placeholder.com/200x100?text=Elite+Catering" alt="Vendor 2"></div>
                        <div class="vendor-logo"><img src="https://via.placeholder.com/200x100?text=Grand+Venues" alt="Vendor 3"></div>
                        <div class="vendor-logo"><img src="https://via.placeholder.com/200x100?text=Classic+Cars" alt="Vendor 4"></div>
                        <div class="vendor-logo"><img src="https://via.placeholder.com/200x100?text=Sound+Masters" alt="Vendor 5"></div>
                        <!-- Duplicate for infinite loop -->
                        <div class="vendor-logo"><img src="https://via.placeholder.com/200x100?text=Luxury+Florals" alt="Vendor 1"></div>
                        <div class="vendor-logo"><img src="https://via.placeholder.com/200x100?text=Elite+Catering" alt="Vendor 2"></div>
                        <div class="vendor-logo"><img src="https://via.placeholder.com/200x100?text=Grand+Venues" alt="Vendor 3"></div>
                        <div class="vendor-logo"><img src="https://via.placeholder.com/200x100?text=Classic+Cars" alt="Vendor 4"></div>
                        <div class="vendor-logo"><img src="https://via.placeholder.com/200x100?text=Sound+Masters" alt="Vendor 5"></div>
                    </div>
                </div>
            </div>
        </section>

        <section id="portfolio" class="gallery-section">
            <div class="container">
                <div class="section-title">
                    <h2>Our Event Photos</h2>
                    <span class="flourish">
                        <svg width="100" height="30" viewBox="0 0 100 30" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10,15 C30,5 70,25 90,15" stroke="#8b947a" fill="transparent" stroke-width="1"/>
                            <path d="M45,15 C50,10 50,10 55,15 C50,20 50,20 45,15" stroke="#8b947a" fill="#8b947a"/>
                        </svg>
                    </span>
                </div>
                <div class="gallery-grid index-gallery">
                    <div class="gallery-item item-1">
                        <img src="assets/img/photo2.JPG" alt="Wedding 1">
                    </div>
                    <div class="gallery-item item-2">
                        <img src="assets/img/photo8.JPG" alt="Wedding 2">
                        <div class="gallery-overlay">
                            <div class="gallery-text">YAANU & NAANU</div>
                        </div>
                    </div>
                    <div class="gallery-item item-3">
                        <img src="assets/img/photo3.JPG" alt="Wedding 3">
                    </div>
                    <div class="gallery-item item-4">
                        <img src="assets/img/photo4.JPG" alt="Wedding 4">
                    </div>
                    <div class="gallery-item item-5">
                        <img src="assets/img/photo5.JPG" alt="Wedding 5">
                    </div>
                </div>
                <div class="view-more-container">
                    <a href="#" class="btn-view-more">View More</a>
                </div>
            </div>
        </section>

        <section id="videos" class="video-highlights">
            <div class="container">
                <div class="section-title">
                    <h2>Video Highlights</h2>
                    <span class="flourish">
                        <svg width="100" height="30" viewBox="0 0 100 30" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10,15 C30,5 70,25 90,15" stroke="#8b947a" fill="transparent" stroke-width="1"/>
                            <path d="M45,15 C50,10 50,10 55,15 C50,20 50,20 45,15" stroke="#8b947a" fill="#8b947a"/>
                        </svg>
                    </span>
                </div>
                <div class="video-grid">
                    <div class="video-item">
                        <div class="video-thumbnail" data-video="https://www.youtube.com/embed/dQw4w9WgXcQ">
                            <img src="https://images.unsplash.com/photo-1511795409834-ef04bbd61622?auto=format&fit=crop&w=600&q=60" alt="Video Highlight 1">
                            <div class="play-btn">
                                <i class="fas fa-play"></i>
                            </div>
                        </div>
                        <h3>The Grand Wedding</h3>
                        <p>A beautiful celebration of love and togetherness.</p>
                    </div>
                    <div class="video-item">
                        <div class="video-thumbnail" data-video="https://www.youtube.com/embed/dQw4w9WgXcQ">
                            <img src="https://images.unsplash.com/photo-1519225421980-715cb0215aed?auto=format&fit=crop&w=600&q=60" alt="Video Highlight 2">
                            <div class="play-btn">
                                <i class="fas fa-play"></i>
                            </div>
                        </div>
                        <h3>Corporate Excellence</h3>
                        <p>Elegant solutions for professional corporate events.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="testimonials" class="testimonials-section">
            <div class="container">
                <div class="section-title">
                    <h2>Happy Couples</h2>
                    <span class="flourish">
                        <svg width="100" height="30" viewBox="0 0 100 30" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10,15 C30,5 70,25 90,15" stroke="#8b947a" fill="transparent" stroke-width="1"/>
                            <path d="M45,15 C50,10 50,10 55,15 C50,20 50,20 45,15" stroke="#8b947a" fill="#8b947a"/>
                        </svg>
                    </span>
                </div>
                
                <div class="testimonials-container">
                    <div class="testimonial-slider">
                        <div class="testimonial-slide active">
                            <div class="testimonial-content">
                                <div class="quote-icon"><i class="fas fa-quote-left"></i></div>
                                <p>"Thank you so much for the  beautiful wedding decoration u made my biggest day very special  ❤️❤️ the time i entered to venue i couldn't even say any word i was speechless decoration was really really amazing 🤩 Thank you for your excellent work.Everyone was complimenting how beautiful decoration was and people was asking for your page id "</p>
                                <div class="couple-name">Ziyan & Hamna</div>
                                <div class="event-date">Feb 2026</div>
                            </div>
                            <div class="testimonial-image">
                                <img src="https://images.unsplash.com/photo-1583939003579-730e3918a45a?auto=format&fit=crop&w=600&q=60" alt="Couple 1">
                            </div>
                        </div>
                        
                        <div class="testimonial-slide">
                            <div class="testimonial-content">
                                <div class="quote-icon"><i class="fas fa-quote-left"></i></div>
                                <p>"The photography and video team captured every emotion so beautifully. Looking at our wedding album feels like reliving the magic all over again."</p>
                                <div class="couple-name">Emily & David</div>
                                <div class="event-date">December 2025</div>
                            </div>
                            <div class="testimonial-image">
                                <img src="https://images.unsplash.com/photo-1511795409834-ef04bbd61622?auto=format&fit=crop&w=600&q=60" alt="Couple 2">
                            </div>
                        </div>

                        <div class="testimonial-slide">
                            <div class="testimonial-content">
                                <div class="quote-icon"><i class="fas fa-quote-left"></i></div>
                                <p>"From the stunning bouquet to the delicious cake, everything was handled with such professionalism. They truly are the best event planners in town!"</p>
                                <div class="couple-name">Jessica & James</div>
                                <div class="event-date">October 2025</div>
                            </div>
                            <div class="testimonial-image">
                                <img src="https://images.unsplash.com/photo-1519225421980-715cb0215aed?auto=format&fit=crop&w=600&q=60" alt="Couple 3">
                            </div>
                        </div>
                    </div>
                    
                    <div class="testimonial-dots">
                        <span class="dot active" data-index="0"></span>
                        <span class="dot" data-index="1"></span>
                        <span class="dot" data-index="2"></span>
                    </div>
                </div>

                <div class="counter-mini">
                    <div class="counter-item">
                        <i class="fas fa-heart"></i>
                        <span class="counter-number" id="couple-count">987</span>
                        <span class="counter-text">Happy Couples</span>
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
        </div>';
        include 'includes/footer.php'; 
    ?>
</body>
</html>
