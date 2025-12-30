<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITC Blog | Innovation Tech Centre</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="blog1.css">
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>
<body id="body">

      <div class="nav rounded shadow ">
            <div class="logo"><img src="logo.png" width="120">
            </div>
             <h2 class="h0">Innovation <span class="tech-center">Tech Center</span></h2>
          <div class="nav-bar">
            <a href="../home.php">Home</a>
            <a href="../courses/courses.php">Courses</a>
            <a href="blog.php">Blog</a>
            <a href="../about/About.php">About</a>
            <a href="../ITC/contact.php">Contact</a>

            <!-- <button type="button" onclick="window.location.href='register.php'">Sign Up</button> -->
             <button type="button" onclick="window.location.href='../register.php'">Sign Up</button>

            <button class="boton" id="theme-toggle"><i class="fas fa-moon"></i></button>
            </div>
       </div>
   
    <header class="hero-wrapper">
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="hero-content">
                <h1>ITC <span>Tech Blog</span></h1>
                <p class="lead">Your daily dose of innovation, coding tutorials, and industry insights <br> from the experts at Innovation Tech Centre.</p>
                <div class="mt-4">
                    <input type="text" placeholder="Search topics..." class="form-control d-inline-block w-50 rounded-pill px-4 py-2">
                </div>
            </div>
        </div>
    </header>

    <div class="filter-section">
        <div class="container text-center">
            <button class="filter-btn active" onclick="filterSelection('all')">All</button>
            <button class="filter-btn" onclick="filterSelection('dev')">Development</button>
            <button class="filter-btn" onclick="filterSelection('security')">Security</button>
            <button class="filter-btn" onclick="filterSelection('design')">Design</button>
        </div>
    </div>

    <main class="container">
        <div class="featured-card shadow-sm border-0 mb-5">
            <div class="row g-0">
                <div class="col-md-6">
                    <img src="ai1.jpg" class="img-fluid h-100 rounded-start" alt="Featured">
                </div>
                <div class="col-md-6 p-5 d-flex flex-column justify-content-center">
                    <span class="text-uppercase fw-bold text-warning small mb-2">Editor's Pick</span>
                    <h2 class="fw-bold mb-3">Why Python is the King of AI in 2025</h2>
                    <p class=" mb-4">Discover why Python continues to dominate the artificial intelligence landscape and how you can get started...</p>
                    <a href="#" class="read-more">Read Full Article &rarr;</a>
                </div>
            </div>
        </div>

        <div class="row" id="blog-grid">
            <div class="col-md-4 blog-item dev">
                <div class="blog-card shadow-sm h-100">
                    <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=600" class="card-img-top" alt="Dev">
                    <div class="card-body p-4">
                        <small class="text-orange fw-bold">Development</small>
                        <h5 class="mt-2">10 Clean Code Tips for Junior Developers</h5>
                        <p class="">Write code that humans can read, not just machines...</p>
                        <a href="#" class="read-more">More &rarr;</a>
                    </div>
                </div>
            </div>
            <style>
                .card-body p{
                    color: rgb(62, 62, 63);
                    font-size: 14px;
                }
            </style>
            <div class="col-md-4 blog-item security">
                <div class="blog-card shadow-sm h-100">
                    <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&w=600" class="card-img-top" alt="Security">
                    <div class="card-body p-4">
                        <small class="text-orange fw-bold">Security</small>
                        <h5 class="mt-2">Cybersecurity Trends to Watch in Somalia</h5>
                        <p class="">Protecting your digital assets in a changing landscape...</p>
                        <a href="#" class="read-more">More &rarr;</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 blog-item design">
                <div class="blog-card shadow-sm h-100">
                    <img src="ui.jpg" class="card-img-top" alt="Design">
                    <div class="card-body p-4">
                        <small class="text-orange fw-bold">UI/UX Design</small>
                        <h5 class="mt-2">The Power of Minimalist Design</h5>
                        <p class="">Why less is often more when it comes to user interfaces...</p>
                        <a href="#" class="read-more">More &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
 
   <!-- footer -->
       <footer class="footer py-5">
    <div class="container">   <!-- CHANGE container2 → container -->

        <div class="row g-4">
            
            <div class="col-md-4">
                <h5 class="fw-bold text-white mb-3">ITC - Innovation Tech Centre</h5>
                <p class="text-white-50 small pe-lg-5">
                    Empowering the next generation of tech leaders through cutting-edge, practical, and certified online education.
                </p>
                <div class="social-icons mt-4">
                    <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                </div>
            </div>

            <div class="col-md-2 col-6">
                <h6 class="fw-bold text-white mb-3 text-uppercase">Navigation</h6>
                <ul class="list-unstyled footer-links small">
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="blog.html">Blog & Insights</a></li>
                    <li><a href="dashboard.html">Student Dashboard</a></li>
                </ul>
            </div>

            <div class="col-md-3 col-6">
                <h6 class="fw-bold text-white mb-3 text-uppercase">Top Courses</h6>
                <ul class="list-unstyled footer-links small">
                    <li><a href="courses.html">Web Development</a></li>
                    <li><a href="courses.html">Data Science & AI</a></li>
                    <li><a href="courses.html">Cyber Security</a></li>
                    <li><a href="courses.html">Cloud Computing</a></li>
                </ul>
            </div>

            <div class="col-md-3">
                <h6 class="fw-bold text-white mb-3 text-uppercase">Get in Touch</h6>
                <p class="text-white small mb-2">
                    <i class="fas fa-envelope text-primary me-2"></i> info@itccentre.com
                </p>
                <p class="text-white small mb-4">
                    <i class="fas fa-phone-alt text-primary me-2"></i> (252) 612345678
                </p>
                <a href="register.html" class="btn btn-primary btn-sm fw-bold px-4">
                    Enroll Free Today
                </a>
            </div>

        </div>

        <div class="row border-top border-secondary mt-4 pt-3">
            <div class="col-12 text-center">
                <p class="text-white-50 small mb-0">
                    &copy; 2025 ITC - Innovation Tech Centre. All Rights Reserved.
                </p>
            </div>
        </div>

    </div>
</footer>
    <script>
        // --- 1. THEME TOGGLE LOGIC ---
        const themeToggle = document.getElementById('theme-toggle');
        const body = document.getElementById('body');
        const icon = themeToggle.querySelector('i');

        themeToggle.addEventListener('click', () => {
            body.classList.toggle('dark-mode');
            if (body.classList.contains('dark-mode')) {
                icon.classList.replace('fa-moon', 'fa-sun');
                localStorage.setItem('selected-theme', 'dark');
            } else {
                icon.classList.replace('fa-sun', 'fa-moon');
                localStorage.setItem('selected-theme', 'light');
            }
        });

        // Maintain theme on refresh
        if (localStorage.getItem('selected-theme') === 'dark') {
            body.classList.add('dark-mode');
            icon.classList.replace('fa-moon', 'fa-sun');
        }

        // --- 2. BLOG FILTERING LOGIC ---
        function filterSelection(category) {
            const items = document.querySelectorAll('.blog-item');
            const buttons = document.querySelectorAll('.filter-btn');

            buttons.forEach(btn => {
                btn.classList.remove('active');
                if(btn.innerText.toLowerCase() === category || (category === 'all' && btn.innerText === 'All')) {
                    btn.classList.add('active');
                }
            });

            items.forEach(item => {
                if (category === 'all') {
                    item.style.display = 'block';
                } else {
                    item.classList.contains(category) ? item.style.display = 'block' : item.style.display = 'none';
                }
            });
        }
    </script>
</body>
</html>