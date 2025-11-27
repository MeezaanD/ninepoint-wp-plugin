<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Navigation Overlay -->
<div class="nav-overlay" id="navOverlay">
    <div class="nav-overlay-content">
        <div class="nav-overlay-left">
            <!-- Left side content area (can add logo or hero content here) -->
        </div>
        <div class="nav-overlay-right">
            <nav class="overlay-navigation">
                <ul class="overlay-menu">
                    <li><a href="#section1">Section 1</a></li>
                    <li><a href="#section2">Section 2</a></li>
                    <li><a href="#section3">Section 3</a></li>
                    <li><a href="#section4">Section 4</a></li>
                    <li><a href="#section5">Section 5</a></li>
                    <li><a href="#section6">Section 6</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>

<!-- Header -->
<header class="site-header">
    <div class="header-inner">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="site-logo">9.</a>
        
        <button class="mobile-menu-toggle" id="menuToggle" aria-label="Toggle menu">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
    </div>
</header>

<div class="site-wrapper">