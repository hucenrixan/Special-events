<?php 
    $pageTitle = "Contact Us";
    $currentPage = "contact";
    $headerImage = "assets/img/ELI_8494.jpg";
    $pageHeaderTitle = "Contact Us";
    $pageHeaderSubtitle = "We'd Love to Hear From You";
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

        <section class="contact-page" style="padding: 80px 0;">
            <div class="container">
                <div class="contact-wrapper" style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px;">
                    <div class="contact-details">
                        <div class="section-title" style="text-align: left; margin-bottom: 30px;">
                            <h2 style="font-family: var(--font-heading); font-size: 2.5rem; color: var(--primary-color);">Get In Touch</h2>
                            <span class="flourish">
                                <svg width="100" height="30" viewBox="0 0 100 30" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0,15 C20,5 60,25 80,15" stroke="#8b947a" fill="transparent" stroke-width="1"/>
                                </svg>
                            </span>
                        </div>
                        <p style="margin-bottom: 40px; font-size: 1.1rem; color: var(--text-muted);">Have a question or ready to start planning your next big event? Reach out to us through any of the channels below. Our team is here to help you create unforgettable memories.</p>
                        
                        <div class="contact-info-list">
                            <div class="info-item" style="display: flex; gap: 20px; margin-bottom: 30px; align-items: flex-start;">
                                <div class="info-icon" style="width: 50px; height: 50px; background: var(--accent-color); border-radius: 50%; display: flex; justify-content: center; align-items: center; color: var(--primary-color); font-size: 1.2rem;">
                                    <i class="fas fa-location-dot"></i>
                                </div>
                                <div class="info-text">
                                    <h4 style="font-family: var(--font-heading); margin-bottom: 5px; font-size: 1.2rem;">Our Location</h4>
                                    <p style="color: var(--text-muted);">H.Landhooge, Henveru, Male, Maldives</p>
                                </div>
                            </div>
                            
                            <div class="info-item" style="display: flex; gap: 20px; margin-bottom: 30px; align-items: flex-start;">
                                <div class="info-icon" style="width: 50px; height: 50px; background: var(--accent-color); border-radius: 50%; display: flex; justify-content: center; align-items: center; color: var(--primary-color); font-size: 1.2rem;">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="info-text">
                                    <h4 style="font-family: var(--font-heading); margin-bottom: 5px; font-size: 1.2rem;">Phone Number</h4>
                                    <p style="color: var(--text-muted);">+960 9707788</p>
                                </div>
                            </div>
                            
                            <div class="info-item" style="display: flex; gap: 20px; margin-bottom: 30px; align-items: flex-start;">
                                <div class="info-icon" style="width: 50px; height: 50px; background: var(--accent-color); border-radius: 50%; display: flex; justify-content: center; align-items: center; color: var(--primary-color); font-size: 1.2rem;">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="info-text">
                                    <h4 style="font-family: var(--font-heading); margin-bottom: 5px; font-size: 1.2rem;">Email Address</h4>
                                    <p style="color: var(--text-muted);">info@specialevents.com</p>
                                </div>
                            </div>
                            
                            <div class="info-item" style="display: flex; gap: 20px; margin-bottom: 30px; align-items: flex-start;">
                                <div class="info-icon" style="width: 50px; height: 50px; background: var(--accent-color); border-radius: 50%; display: flex; justify-content: center; align-items: center; color: var(--primary-color); font-size: 1.2rem;">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="info-text">
                                    <h4 style="font-family: var(--font-heading); margin-bottom: 5px; font-size: 1.2rem;">Business Hours</h4>
                                    <p style="color: var(--text-muted);">Sun - Sat: 9:00 AM - 6:00 PM</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="contact-map">
                        <div style="width: 100%; height: 100%; min-height: 450px; border-radius: 15px; overflow: hidden; box-shadow: 0 20px 40px rgba(0,0,0,0.1);">
                            <!-- Placeholder for Google Map -->
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.1670986566874!2d73.51866467586568!3d4.17511674603953!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b3f7ef33f000001%3A0xc682910795c738e4!2sMale&#39;!5e0!3m2!1sen!2smv!4v1709800000000!5m2!1sen!2smv" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="social-connect" style="padding: 60px 0; background-color: var(--accent-color); text-align: center;">
            <div class="container">
                <h3 style="font-family: var(--font-heading); font-size: 1.8rem; margin-bottom: 30px;">Follow Our Journey</h3>
                <div class="social-links" style="display: flex; justify-content: center; gap: 30px;">
                    <a href="#" style="font-size: 2rem; color: var(--secondary-color); transition: var(--transition);"><i class="fab fa-facebook"></i></a>
                    <a href="https://www.instagram.com/specialevents.mv/" style="font-size: 2rem; color: var(--secondary-color); transition: var(--transition);"><i class="fab fa-instagram"></i></a>
                    <a href="https://wa.me/9609707788" style="font-size: 2rem; color: var(--secondary-color); transition: var(--transition);"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
        </section>
    </main>

    <?php include 'includes/footer.php'; ?>
</body>
</html>
