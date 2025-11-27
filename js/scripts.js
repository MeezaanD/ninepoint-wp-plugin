/**
 * Theme JavaScript
 */

document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu toggle
    const menuToggle = document.getElementById('menuToggle');
    const navOverlay = document.getElementById('navOverlay');
    
    if (menuToggle && navOverlay) {
        menuToggle.addEventListener('click', function() {
            this.classList.toggle('active');
            navOverlay.classList.toggle('active');
            document.body.style.overflow = navOverlay.classList.contains('active') ? 'hidden' : '';
        });
        
        // Close menu when clicking on overlay background
        navOverlay.addEventListener('click', function(e) {
            if (e.target === navOverlay) {
                menuToggle.classList.remove('active');
                navOverlay.classList.remove('active');
                document.body.style.overflow = '';
            }
        });
        
        // Close menu when clicking on a link
        const overlayLinks = navOverlay.querySelectorAll('a');
        overlayLinks.forEach(function(link) {
            link.addEventListener('click', function() {
                menuToggle.classList.remove('active');
                navOverlay.classList.remove('active');
                document.body.style.overflow = '';
            });
        });
    }
    
    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            if (href !== '#' && href !== '') {
                const target = document.querySelector(href);
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            }
        });
    });
});