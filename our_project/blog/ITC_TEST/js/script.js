// Bootstrap 5 Native Dark Mode Toggle
document.addEventListener('DOMContentLoaded', () => {
    // --- Theme Toggle ---
    let toggleBtn = document.getElementById('theme-toggle');
    let icon = toggleBtn.querySelector('i');

    // Check local storage or system preference
    let getPreferredTheme = () => {
        let savedTheme = localStorage.getItem('theme');
        if (savedTheme) {
            return savedTheme;
        }
        return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
    };

    let setTheme = (theme) => {
        document.documentElement.setAttribute('data-bs-theme', theme);
        localStorage.setItem('theme', theme);

        if (theme === 'dark') {
            icon.classList.remove('fa-moon');
            icon.classList.add('fa-sun');
            toggleBtn.classList.remove('btn-dark');
            toggleBtn.classList.add('btn-light');
        } else {
            icon.classList.remove('fa-sun');
            icon.classList.add('fa-moon');
            toggleBtn.classList.remove('btn-light');
            toggleBtn.classList.add('btn-dark');
        }
    };

    setTheme(getPreferredTheme());

    toggleBtn.addEventListener('click', () => {
        let currentTheme = document.documentElement.getAttribute('data-bs-theme');
        let newTheme = currentTheme === 'dark' ? 'light' : 'dark';
        setTheme(newTheme);
    });

    // --- Search Functionality (Improved) ---
    let searchInput = document.getElementById('search-input');
    let searchBtn = document.getElementById('search-btn');
    let blogGrid = document.getElementById('blog-posts-grid');

    if (searchInput && blogGrid) {

        let performSearch = () => {
            let query = searchInput.value.toLowerCase().trim();
            // Select only the columns directly inside the grid
            // Grid structure: #blog-posts-grid > .col-12 > .card
            let posts = blogGrid.querySelectorAll('.col-12');

            posts.forEach(postCol => {
                let card = postCol.querySelector('.card');
                if (!card) return;

                let title = card.querySelector('.card-title')?.textContent.toLowerCase() || "";
                let text = card.querySelector('.card-text')?.textContent.toLowerCase() || "";

                // Check if query matches title or text
                if (title.includes(query) || text.includes(query)) {
                    postCol.style.display = ''; // Show (reset to default/flex)
                } else {
                    postCol.style.display = 'none'; // Hide
                }
            });
        };

        // Listen for typing (Live Search)
        searchInput.addEventListener('keyup', performSearch);

        // Listen for "Go" button click
        if (searchBtn) {
            searchBtn.addEventListener('click', performSearch);
        }

        // Prevent form submission if applicable (though strictly there is no form tag)
        searchInput.addEventListener('keydown', (e) => {
            if (e.key === 'Enter') {
                e.preventDefault();
                performSearch();
            }
        });
    } else {
        console.warn("Search elements not found in DOM");
    }
});
