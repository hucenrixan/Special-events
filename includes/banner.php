<?php if (isset($currentPage) && $currentPage === 'home'): ?>
<section id="home" class="hero">
    <div class="hero-slides">
        <div class="slide active" style="background-image: url('assets/img/hero 1.jpg');"></div>
        <div class="slide" style="background-image: url('assets/img/hero2.jpg');"></div>
        <div class="slide" style="background-image: url('assets/img/hero3.jpg');"></div>
    </div>
    <div class="hero-content">
        <h1>Special Events</h1>
        <p>Creating Unforgettable Moments</p>
    </div>
</section>
<?php else: ?>
<section class="page-header" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('<?php echo isset($headerImage) ? $headerImage : 'assets/img/ELI_8494.jpg'; ?>'); padding: 80px 0; text-align: center; color: #fff;">
    <div class="container">
        <h1 style="font-family: var(--font-heading); font-size: 2.5rem; text-transform: uppercase; letter-spacing: 5px;"><?php echo isset($pageHeaderTitle) ? $pageHeaderTitle : $pageTitle; ?></h1>
        <p style="text-transform: uppercase; letter-spacing: 3px; margin-top: 10px;"><?php echo isset($pageHeaderSubtitle) ? $pageHeaderSubtitle : ''; ?></p>
    </div>
</section>
<?php endif; ?>
