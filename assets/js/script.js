document.addEventListener('DOMContentLoaded', () => {
    // Smooth scrolling for navigation links
    document.querySelectorAll('a').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            
            // Check if it's an internal anchor or a link to index.php#anchor or about.php#anchor
            const isInternalAnchor = href && href.startsWith('#') && href !== "#";
            const isIndexAnchor = href && (href.startsWith('index.php#') || href.startsWith('index.php/#'));
            const isAboutAnchor = href && (href.startsWith('about.php#') || href.startsWith('about.php/#'));
            const path = window.location.pathname;
            const currentPageIsIndex = path.endsWith('index.php') || path.endsWith('/') || path === "" || !path.includes('.php');
            const currentPageIsAbout = path.endsWith('about.php');

            if (isInternalAnchor || (isIndexAnchor && currentPageIsIndex) || (isAboutAnchor && currentPageIsAbout)) {
                const targetId = isInternalAnchor ? href : '#' + href.split('#')[1];
                let target;
                try {
                    target = document.querySelector(targetId);
                } catch (err) {
                    console.warn('Invalid selector:', targetId);
                }
                
                if (target) {
                    e.preventDefault();
                    const headerHeight = document.querySelector('header').offsetHeight;
                    window.scrollTo({
                        top: target.offsetTop - headerHeight,
                        behavior: 'smooth'
                    });
                    
                    // Update active link
                    document.querySelectorAll('.nav-links a').forEach(a => a.classList.remove('active'));
                    this.classList.add('active');
                    
                    // Update URL without reloading page
                    history.pushState(null, null, targetId);
                }
            }
        });
    });

    // Counter Animation
    const counterElement = document.getElementById('couple-count');
    if (counterElement) {
        const targetNumber = parseInt(counterElement.innerText);
        let currentNumber = 0;
        const duration = 2000; // 2 seconds
        const stepTime = Math.abs(Math.floor(duration / targetNumber));
        
        const observer = new IntersectionObserver((entries) => {
            if (entries[0].isIntersecting) {
                const counter = setInterval(() => {
                    currentNumber++;
                    counterElement.innerText = currentNumber;
                    if (currentNumber === targetNumber) {
                        clearInterval(counter);
                    }
                }, stepTime);
                observer.unobserve(entries[0].target);
            }
        }, { threshold: 0.5 });
        
        observer.observe(counterElement);
    }

    // Testimonial Slider Logic
    const testimonialSlides = document.querySelectorAll('.testimonial-slide');
    const dots = document.querySelectorAll('.dot');
    let currentTestimonial = 0;
    let testimonialInterval;

    if (testimonialSlides.length > 0) {
        function showTestimonial(index) {
            testimonialSlides.forEach(slide => slide.classList.remove('active'));
            dots.forEach(dot => dot.classList.remove('active'));
            
            testimonialSlides[index].classList.add('active');
            dots[index].classList.add('active');
            currentTestimonial = index;
        }

        function nextTestimonial() {
            let next = (currentTestimonial + 1) % testimonialSlides.length;
            showTestimonial(next);
        }

        function startTestimonialSlider() {
            testimonialInterval = setInterval(nextTestimonial, 6000);
        }

        dots.forEach(dot => {
            dot.addEventListener('click', () => {
                clearInterval(testimonialInterval);
                showTestimonial(parseInt(dot.getAttribute('data-index')));
                startTestimonialSlider();
            });
        });

        startTestimonialSlider();
    }

    console.log('Special Events website loaded with custom theme');

    // Hero Slideshow
    const slides = document.querySelectorAll('.hero .slide');
    if (slides.length > 0) {
        let currentSlide = 0;
        const slideInterval = 5000; // 5 seconds

        function nextSlide() {
            slides[currentSlide].classList.remove('active');
            currentSlide = (currentSlide + 1) % slides.length;
            slides[currentSlide].classList.add('active');
        }

        setInterval(nextSlide, slideInterval);
    }

    // Video Modal Logic
    const videoModal = document.getElementById('videoModal');
    const videoPlayer = document.getElementById('videoPlayer');
    const closeModal = document.querySelector('.close-modal');
    const videoThumbnails = document.querySelectorAll('.video-thumbnail');

    if (videoModal && videoPlayer && closeModal) {
        videoThumbnails.forEach(thumb => {
            thumb.addEventListener('click', () => {
                const videoUrl = thumb.getAttribute('data-video');
                videoPlayer.src = videoUrl + "?autoplay=1";
                videoModal.style.display = 'block';
                document.body.style.overflow = 'hidden'; // Disable scroll
            });
        });

        const closeVideo = () => {
            videoModal.style.display = 'none';
            videoPlayer.src = "";
            document.body.style.overflow = 'auto'; // Enable scroll
        };

        closeModal.addEventListener('click', closeVideo);

        window.addEventListener('click', (e) => {
            if (e.target === videoModal) {
                closeVideo();
            }
        });
    }

    // Mobile Menu Toggle
    const mobileMenu = document.getElementById('mobile-menu');
    const navLinks = document.querySelector('.nav-links');
    const dropdowns = document.querySelectorAll('.nav-links .dropdown');

    if (mobileMenu && navLinks) {
        mobileMenu.addEventListener('click', () => {
            navLinks.classList.toggle('mobile-visible');
            const icon = mobileMenu.querySelector('i');
            if (navLinks.classList.contains('mobile-visible')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            } else {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });

        // Toggle dropdowns on mobile
        dropdowns.forEach(dropdown => {
            const link = dropdown.querySelector('a');
            link.addEventListener('click', (e) => {
                if (window.innerWidth <= 768) {
                    e.preventDefault();
                    dropdown.classList.toggle('active');
                }
            });
        });
    }
});
