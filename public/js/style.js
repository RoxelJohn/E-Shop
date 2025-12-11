
    const themeItems = document.querySelectorAll('.dropdown-item[data-theme]');
        const body = document.body;
        const navbar = document.querySelector('.navbar');
        const themeIcon = document.getElementById('themeIcon');

        const savedTheme = localStorage.getItem('theme') || 'light';
        applyTheme(savedTheme);

        themeItems.forEach(item => {
        item.addEventListener('click', (e) => {
            e.preventDefault();
            const selectedTheme = item.getAttribute('data-theme');
            applyTheme(selectedTheme);
            localStorage.setItem('theme', selectedTheme);
        });
        });

        function applyTheme(theme) {
        if (theme === 'dark') {
            body.classList.replace('bg-light', 'bg-dark');
            body.classList.replace('text-dark', 'text-light');
            navbar.classList.replace('navbar-light', 'navbar-dark');
            navbar.classList.replace('bg-body-tertiary', 'bg-dark');
            themeIcon.className = 'bi bi-moon-fill fs-5';
        } else {
            body.classList.replace('bg-dark', 'bg-light');
            body.classList.replace('text-light', 'text-dark');
            navbar.classList.replace('navbar-dark', 'navbar-light');
            navbar.classList.replace('bg-dark', 'bg-body-tertiary');
            themeIcon.className = 'bi bi-sun-fill fs-5';
        }
        }


document.addEventListener('DOMContentLoaded', function() {
    let cartCount = 0;
    const badge = document.getElementById('cartBadge');
    const buttons = document.querySelectorAll('.add-to-cart-btn');

    // Initially hide the badge
    badge.style.display = 'none';

    buttons.forEach(function(button) {
        button.addEventListener('click', function(e) {
            e.preventDefault();

            // Increment cart count
            cartCount++;

            // Update badge
            badge.textContent = cartCount;

            // Show badge only if count > 0
            if(cartCount > 0){
                badge.style.display = 'inline';
            }
        });
    });
});

