<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About | INC</title>
    
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="nav rounded shadow ">
            <div class="logo"><img src="logo.png" width="120"></div>
            <h2>Innovation <span class="tech-center">Tech Center</span></h2> 
           <style>
              h2{
                color: #002455;
                font-size: 18px;
                font-weight:800;
                padding-top: 15px;
                margin-left: 160px;
                position: absolute;
                }
               h2 .tech-center {
                color: #F87B1B;
               }
               body.dark-mode .nav h2 {
                    color: #baf8f8;
                }

                  body.dark-mode .nav {
                      background-color: #002455; /* Darker nav background */
                      color: #ffffff;
                  }
                  body.dark-mode .nav a{
                      color: #ffffff;
                  }
                  body.dark-mode .nav .logo img {
                      filter: brightness(0) invert(1); /* Invert logo colors for dark mode */
                      
                  }
                  body.dark-mode .nav a:hover {
                      color: #F87B1B; /* Secondary color on hover */
                  }
                  body.dark-mode .nav button {
                      background-color: #F87B1B; /* Secondary color for buttons */
                      color: #fff; /* Dark text on buttons */
                  }
                  body.dark-mode .nav button:hover {
                      background-color: #ffffff; /* Secondary color for buttons */
                      color: #002455; /* Dark text on buttons */
                  }
                  body.dark-mode .about-hero
                  {
                    background-color: #002455;
                    color: #ffffff;
                  }

                 
            </style>
            <div class="nav-bar">
            <a href="../home.php">Home</a>
            <a href="../courses/courses.php">Courses</a>
            <a href="../blog/blog.php">Blog</a>
            <a href="#">About</a>
            <a href="../ITC/contact.php">Contact</a>
            <button type="button" onclick="window.location.href='../register.php'">Sign Up</button>
            <button class="boton" id="theme-toggle"><i class="fas fa-moon"></i></button>
            </div>
</div>


<div class="all">



<!-- Hero Section -->
<section class="about-hero">
    <h1>About ITC</h1>
    <p>Innovating the Future of Tech Education</p>
</section>

<!-- About Content -->
<section class="about-content">
    <div class="about-image">
        <img src="sawir2.jpg" alt="Team">
    </div>

    <div class="about-text">
        <h2>Who We Are?</h2>
        <p>
            INC (Innovation Tech Center) is a premier digital education platform
            dedicated to bridging the gap between theory and practical skills.
        </p>
        <p>
            Our mission is to empower learners with real-world tech skills
            including coding, design, and cybersecurity.
        </p>
    </div>
</section>



<!-- Stats Section -->
<section class="stats">
    <div class="stat-box">
        <h2>50+</h2>
        <p>Expert Instructors</p>
    </div>
    <div class="stat-box">
        <h2>10k+</h2>
        <p>Students Enrolled</p>
    </div>
    <div class="stat-box">
        <h2>100%</h2>
        <p>Satisfaction Rate</p>
    </div>
</section>

<!-- Core Values -->
<section class="core-values">
    <h2>Our Core Values</h2>

    <div class="values-box">
        <div class="value-card">
            <span>💡</span>
            <h3>Innovation</h3>
            <p>We encourage creative thinking and modern solutions.</p>
        </div>

        <div class="value-card">
            <span>❤</span>
            <h3>Integrity</h3>
            <p>Honesty and transparency guide our work.</p>
        </div>

        <div class="value-card">
            <span>🚀</span>
            <h3>Excellence</h3>
            <p>We aim for the highest quality in education.</p>
        </div>

        <div class="value-card">
            <span>👥</span>
            <h3>Community</h3>
            <p>Learning together builds stronger futures.</p>
        </div>
    </div>
</section>













<!--  SKILLS  -->
<section id="skill" class="section">
  <h2 class="h">My Work <span>Skills</span></h2>
  <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

  <div class="skills">

    <div class="skill-card">
      <i class="fa-brands fa-figma"></i>
      <h4>Figma</h4>
      <div class="bar"><span style="width:90%"></span></div>
      <small>90%</small>
    </div>

    <div class="skill-card">
      <i class="fa-brands fa-wordpress"></i>
      <h4>WordPress</h4>
      <div class="bar"><span style="width:85%"></span></div>
      <small>85%</small>
    </div>

    <div class="skill-card">
      <i class="fa-solid fa-code"></i>
      <h4>Web Development</h4>
      <div class="bar"><span style="width:80%"></span></div>
      <small>80%</small>
    </div>

    <div class="skill-card">
      <i class="fa-solid fa-palette"></i>
      <h4>Web Design</h4>
      <div class="bar"><span style="width:87%"></span></div>
      <small>87%</small>
    </div>

    <div class="skill-card">
      <i class="fa-solid fa-gem"></i>
      <h4>Sketch</h4>
      <div class="bar"><span style="width:83%"></span></div>
      <small>83%</small>
    </div>

    <div class="skill-card">
      <i class="fa-brands fa-adobe"></i>
      <h4>Adobe XD</h4>
      <div class="bar"><span style="width:89%"></span></div>
      <small>89%</small>
    </div>

    <div class="skill-card">
      <i class="fa-solid fa-video"></i>
      <h4>Video Editing</h4>
      <div class="bar"><span style="width:84%"></span></div>
      <small>84%</small>
    </div>

    <div class="skill-card">
      <i class="fa-solid fa-mobile-screen"></i>
      <h4>Mobile App</h4>
      <div class="bar"><span style="width:90%"></span></div>
      <small>90%</small>
    </div>

    
    <div class="skill-card">
      <i class="fa-solid fa-mobile-screen"></i>
      <h4>Mobile App</h4>
      <div class="bar"><span style="width:90%"></span></div>
      <small>90%</small>
    </div>


    <div class="skill-card">
      <i class="fa-brands fa-adobe"></i>
      <h4>Adobe XD</h4>
      <div class="bar"><span style="width:89%"></span></div>
      <small>89%</small>
    </div>

  </div>
</section>

<!-- SERVICES -->
<section id="serv" class="section">
  <h2>My <span>Services</span></h2>
  <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

  <div class="services">
    <div class="service">
      <h3>UI / UX Design</h3>
      <img src="uides.webp">
    </div>

    <div class="service">
      <h3>Web Design</h3>
      <img src="webde.jpg">
    </div>

    <div class="service">
      <h3>Web Development</h3>
      <img src="dev.jpg">
    </div>
  </div>
</section>





<!-- Testimonials -->


<section id="cli" class="testimonials">
  <h2>What Our <span>Clients Say</span></h2>
  <div class="testimonial-container">
    <div class="testimonial-card">
      <img src="download9.jpeg" alt="Client Photo">
      <h3>John Doe</h3>
      <p class="role">CEO, Example Co.</p>
      <p class="text">"This company transformed our business. Their service is top-notch and the team is amazing!"</p>
    </div>
    <div class="testimonial-card">
      <img src="download 8.jpeg" alt="Client Photo">
      <h3>Jane Smith</h3>
      <p class="role">Marketing Manager</p>
      <p class="text">"Highly recommend! Professional, timely, and very supportive throughout the project."</p>
    </div>
    <div class="testimonial-card">
      <img src="download9.jpeg" alt="Client Photo">
      <h3>Ali Hassan</h3>
      <p class="role">Entrepreneur</p>
      <p class="text">"Exceptional experience. Their attention to detail and creativity blew us away!"</p>
    </div>
  </div>
</section>




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
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<script>
const toggleBtn = document.getElementById("theme-toggle");
const icon = toggleBtn.querySelector("i");

// Load saved mode
if (localStorage.getItem("theme") === "dark") {
    document.body.classList.add("dark-mode");
    icon.classList.replace("fa-moon", "fa-sun");
}

// Toggle mode
toggleBtn.addEventListener("click", () => {
    document.body.classList.toggle("dark-mode");

    if (document.body.classList.contains("dark-mode")) {
        localStorage.setItem("theme", "dark");
        icon.classList.replace("fa-moon", "fa-sun");
    } else {
        localStorage.setItem("theme", "light");
        icon.classList.replace("fa-sun", "fa-moon");
    }
});
</script>

</body>
</html>