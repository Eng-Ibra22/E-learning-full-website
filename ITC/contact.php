<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>project</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body class="bod" id="body">

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
            </style>
            <div class="nav-bar">
            <a href="../home.php">Home</a>
            <a href="../courses/courses.php">Courses</a>
            <a href="../blog/blog.php">Blog</a>
            <a href="../about/About.php">About</a>
            <a href="#">Contact</a>
            <button type="button" onclick="window.location.href='../register.php'">Sign Up</button>
            <button class="boton" id="theme-toggle"><i class="fas fa-moon"></i></button>
            </div>
       </div>
       <!-- HERO SECTION -->
<section class="hero">
    <div class="hero-content">
        <h1>Get In Touch</h1>
        <p>We are here to help and answer any question you might have. <br>We look forward to hearing from you.</p>
        
    </div>
</section>

<!-- INFO BOXES -->
<section class="info-boxes">
    <div class="box">
        <div class="box1">
            <i class="fas fa-phone"></i>
            <h3>Call Us</h3>
            <p>Mon-Fri, 8am - 5pm</p>
        </div>
        <div class="box1">
            <i class="fas fa-envelope"></i>
            <h3>Email Us</h3>
            <p>info@itccentre.com</p>
        </div>
        <div class="box1">
            <i class="fas fa-map-marker-alt"></i>
            <h3>Visit Us</h3>
            <p>Mogadishu, Somalia</p>
        </div>
    </div>
</section>

    <!-- CONTACT SECTION -->
<section class="contact-section">
  <div class="contact-container">

    <!-- LEFT : INFO -->
    <div class="contact-info">
      <h2>Let's Talk 👋</h2>
      <p>
        Have questions about our courses or programs?  
        Our ITC team is ready to support your learning journey.
      </p>

      <div class="info-box">
        <i class="fas fa-phone"></i>
        <span>+252 612 345 678</span>
      </div>

      <div class="info-box">
        <i class="fas fa-envelope"></i>
        <span>info@itccentre.com</span>
      </div>

      <div class="info-box">
        <i class="fas fa-map-marker-alt"></i>
        <span>Mogadishu, Somalia</span>
      </div>

      <!-- Professional Image -->
      <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f"
           alt="ITC Team"
           class="contact-img">
    </div>

    <!-- RIGHT : FORM -->
    <div class="contact-form">
      <h3>Send Us a Message</h3>

      <form id="contactForm">
        <input type="text" placeholder="First Name" required>
        <input type="text" placeholder="Last Name" required>
        <input type="email" placeholder="Email Address" required>

        <select required>
          <option value="">Select Course</option>
          <option>JavaScript</option>
          <option>HTML & CSS</option>
          <option>Python</option>
          <option>MySQL</option>
          <option>Linux / Unix</option>
        </select>

        <textarea placeholder="Your Message" required></textarea>

        <button type="submit" class="BTN">Send Message</button>
      </form>
    </div>

  </div>
</section>

<!-- FAQ -->
<section class="faq-section">
  <h3>Frequently Asked Questions</h3>

  <div class="faq-item">
    <button class="btn1">How do I enroll in a course?</button>
    <div class="b_answer">
      You can enroll by creating an account and selecting your desired course.
    </div>
  </div>

  <div class="faq-item">
    <button class="btn1">Are the courses beginner friendly?</button>
    <div class="b_answer">
      Yes, our learning paths are designed from beginner to professional level.
    </div>
  </div>

  <div class="faq-item">
    <button class="btn1">Do you offer certificates?</button>
    <div class="b_answer">
      Yes, ITC provides certificates upon successful course completion.
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
        
       

<script>
let buttons = document.querySelectorAll(".btn1");

buttons.forEach((btn) => {
    btn.addEventListener("click", () => {
        let answer = btn.nextElementSibling;

        if (answer.style.display === "block") {
            answer.style.display = "none";
        } else {
            answer.style.display = "block";
        }
    });
});





let BTN = document.querySelectorAll(".BTN");

     BTN.addEventListener("click",
        function (params) {

            alert("dhawaan baan kula soo xiriiri doonnaa")
            
        }
     )

</script>



 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  <script>
        // JavaScript for theme toggle
        const themeToggle = document.getElementById('theme-toggle');
        const body = document.getElementById('body');

        themeToggle.addEventListener('click', () => {
            body.classList.toggle('dark-mode');
            const icon = themeToggle.querySelector('i');
            if (body.classList.contains('dark-mode')) {
                icon.classList.remove('fa-moon');
                icon.classList.add('fa-sun');
            } else {
                icon.classList.remove('fa-sun');
                icon.classList.add('fa-moon');
            }
        });
    </script>  
</body>
</html>