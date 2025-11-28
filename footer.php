<script>
(function() {
    document.addEventListener('DOMContentLoaded', function() {
        const menuToggle = document.getElementById('menuToggle');
        const navOverlay = document.getElementById('navOverlay');
        const body = document.body;
        
        if (menuToggle && navOverlay) {
            // Toggle menu when hamburger is clicked
            menuToggle.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                
                const isActive = this.classList.contains('active');
                
                if (isActive) {
                    // Close menu
                    this.classList.remove('active');
                    navOverlay.classList.remove('active');
                    body.classList.remove('menu-open');
                    console.log('Menu closed');
                } else {
                    // Open menu
                    this.classList.add('active');
                    navOverlay.classList.add('active');
                    body.classList.add('menu-open');
                    console.log('Menu opened');
                }
            });
            
            // Close menu when clicking on overlay background (dark area)
            navOverlay.addEventListener('click', function(e) {
                if (e.target === navOverlay) {
                    console.log('Overlay background clicked - closing menu');
                    menuToggle.classList.remove('active');
                    navOverlay.classList.remove('active');
                    body.classList.remove('menu-open');
                }
            });
            
            // Close menu when clicking on any menu link
            const overlayLinks = navOverlay.querySelectorAll('a');
            overlayLinks.forEach(function(link) {
                link.addEventListener('click', function(e) {
                    console.log('Menu link clicked - closing menu');
                    menuToggle.classList.remove('active');
                    navOverlay.classList.remove('active');
                    body.classList.remove('menu-open');
                });
            });
            
            // Close menu when pressing Escape key
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && navOverlay.classList.contains('active')) {
                    console.log('Escape key pressed - closing menu');
                    menuToggle.classList.remove('active');
                    navOverlay.classList.remove('active');
                    body.classList.remove('menu-open');
                }
            });
            
        }
    });
})();
</script>