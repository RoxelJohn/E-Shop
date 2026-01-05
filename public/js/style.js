document.addEventListener('DOMContentLoaded', function() {

    // ===== THEME SWITCHER =====
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

    // ===== CART BADGE =====
    let cartCount = 0;
    const badge = document.getElementById('cartBadge');
    const buttons = document.querySelectorAll('.add-to-cart-btn');
    if (badge) badge.style.display = 'none';

    buttons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            cartCount++;
            if (badge) {
                badge.textContent = cartCount;
                badge.style.display = cartCount > 0 ? 'inline' : 'none';
            }
        });
    });

    // ===== SEARCH FILTER =====
    const searchInput = document.getElementById('searchInput');
    const searchIcon = document.getElementById('searchIcon');
    const productCards = document.querySelectorAll('.product-card');

    // Create "No products found" message if it doesn't exist
    let noProductMsg = document.getElementById('noProductsMsg');
    if (!noProductMsg) {
        noProductMsg = document.createElement('p');
        noProductMsg.id = 'noProductsMsg';
        noProductMsg.textContent = 'No products found.';
        noProductMsg.className = 'text-center mt-4';
        noProductMsg.style.display = 'none';
        const productsContainer = document.querySelector('.row.g-4');
        productsContainer.appendChild(noProductMsg);
    }

    function filterBySearch() {
        const query = searchInput.value.toLowerCase();
        let anyVisible = false;

        productCards.forEach(card => {
            const name = card.dataset.name.toLowerCase();
            if (name.includes(query)) {
                card.style.display = '';
                anyVisible = true;
            } else {
                card.style.display = 'none';
            }
        });

        noProductMsg.style.display = anyVisible ? 'none' : '';
    }

    if (searchInput) searchInput.addEventListener('input', filterBySearch);
    if (searchIcon) searchIcon.addEventListener('click', filterBySearch);

    // ===== CATEGORY FILTER =====
    const categoryBtns = document.querySelectorAll('.category-btn');
    const showingCount = document.getElementById('showingCount');

    function filterByCategory(category = 'all') {
        let visibleCount = 0;
        productCards.forEach(card => {
            const cardCategory = card.dataset.category.toLowerCase();
            if (category === 'all' || cardCategory === category) {
                card.style.display = '';
                visibleCount++;
            } else {
                card.style.display = 'none';
            }
        });
        showingCount.textContent = `${visibleCount} showing products`;
    }

    categoryBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            categoryBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            filterByCategory(btn.dataset.category.toLowerCase());
        });
    });

    // Initial load: show all products
    filterByCategory('all');
});

