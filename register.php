<?php
require_once 'db.php';

$error_msg = '';
$success_msg = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if (empty($name) || empty($email) || empty($password) || empty($confirm_password)) {
        $error_msg = "Xogtaan waa qaldan tahay.";
    } elseif ($password !== $confirm_password) {
        $error_msg = "Xogtaan waa qaldan tahay.";
    } else {
        $stmt = $pdo->prepare("SELECT id FROM users WHERE email = ?");
        $stmt->execute([$email]);

        if ($stmt->rowCount() > 0) {
            $error_msg = "Xogtaan waa qaldan tahay.";
        } else {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $insert_stmt = $pdo->prepare(
                "INSERT INTO users (name, email, password) VALUES (?, ?, ?)"
            );

            if ($insert_stmt->execute([$name, $email, $hashed_password])) {
                $success_msg = "Waad isdiiwaangelisay! Hadda waad gali kartaa...";
                header("refresh:2;url=login.php");
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
<meta charset="UTF-8">
<title>Register | ITC</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Tailwind -->
<script src="https://cdn.tailwindcss.com"></script>

<!-- Icons -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" rel="stylesheet">

<script>
tailwind.config = {
    darkMode: 'class',
    theme: {
        extend: {
            colors: {
                brandBlue: '#002455',
                brandOrange: '#F87B1B',
            }
        }
    }
}
</script>

<!-- Added a CSS class to make the logo white in dark mode -->
<style>
  .logo {
    filter: invert(0%);
    transition: filter 0.3s ease;
  }
  .dark .logo {
    filter: brightness(0) invert(1);
  }
</style>
</head>

<body id="body" class="bg-cyan-100 dark:bg-slate-900 transition duration-300">

<!-- ================= HEADER ================= -->
<header class="bg-white dark:bg-brandBlue shadow px-6 py-4 flex justify-between items-center">
    <img src="logo.png" width="120" class="logo">

    <h2 class="font-extrabold text-brandBlue dark:text-white">
        Innovation <span style="color: #F87B1B;"> Tech Center</span>
    </h2>

    <div class="flex gap-6 items-center">
        <a href="home.php" class="font-bold text-brandBlue dark:text-white">Home</a>
        <a href="index.php" id="log" class="font-bold text-brandBlue dark:text-white">Login</a>
        <style>
           body header a{
                background-color: #F87B1B;
                padding: 8px 16px;
                color: #fff;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                font-size: 16px;
                }
           body header i{
                background-color: #F87B1B;
                padding-left: 10px;
                padding-right: 28px;
                padding-top: 10px;
                padding-bottom: 10px;
                color: #002455;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                font-size: 16px;
                }

        </style>
        <!-- Dark Mode Button -->
        <button id="theme-toggle"
            class="bg-orange-500 text-white px-0.2 py-0.2 rounded-md ">
            <i class="fas fa-moon"></i>
        </button>
    </div>
</header>

<!-- ================= REGISTER ================= -->
<main class="flex justify-center py-20">
<div class="bg-white dark:bg-slate-800 w-full max-w-md rounded-xl shadow-2xl p-8">

<h3 class="text-2xl font-extrabold text-center text-brandBlue dark:text-white mb-6">
Create Account
</h3>

<?php if($error_msg): ?>
<div class="bg-red-100 text-red-700 p-3 rounded mb-4">
<?= $error_msg ?>
</div>
<?php endif; ?>

<?php if($success_msg): ?>
<div class="bg-green-100 text-green-700 p-3 rounded mb-4">
<?= $success_msg ?>
</div>
<?php endif; ?>

<form method="POST" class="space-y-4">
<input type="text" name="name" placeholder="Full Name" required
class="w-full px-4 py-3 rounded-lg bg-gray-100 dark:bg-slate-700 dark:text-white">

<input type="email" name="email" placeholder="Email Address" required
class="w-full px-4 py-3 rounded-lg bg-gray-100 dark:bg-slate-700 dark:text-white">

<input type="password" name="password" placeholder="Password" required
class="w-full px-4 py-3 rounded-lg bg-gray-100 dark:bg-slate-700 dark:text-white">

<input type="password" name="confirm_password" placeholder="Confirm Password" required
class="w-full px-4 py-3 rounded-lg bg-gray-100 dark:bg-slate-700 dark:text-white">

<button type="submit"
class="w-full bg-brandOrange hover:bg-orange-600 text-white font-bold py-3 rounded-lg">
Sign Up
</button>
</form>

<p class="text-center mt-4 text-sm dark:text-gray-300">
Already have an account?
<a href="login.php" class="font-bold text-brandOrange">Login</a>
</p>

</div>
</main>

<!-- ================= FOOTER (TAILWIND) ================= -->
<footer class="bg-brandBlue text-white py-14">
<div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-10">

<!-- Column 1 -->
<div>
<h5 class="font-bold text-lg mb-4">ITC - Innovation Tech Centre</h5>
<p class="text-white/60 text-sm">
Empowering the next generation of tech leaders through cutting-edge education.
</p>

<div class="flex gap-3 mt-5">
<a class="w-9 h-9 flex items-center justify-center rounded-full bg-white/10 hover:bg-brandOrange hover:text-brandBlue transition">
<i class="fab fa-facebook-f"></i>
</a>
<a class="w-9 h-9 flex items-center justify-center rounded-full bg-white/10 hover:bg-brandOrange hover:text-brandBlue transition">
<i class="fab fa-twitter"></i>
</a>
<a class="w-9 h-9 flex items-center justify-center rounded-full bg-white/10 hover:bg-brandOrange hover:text-brandBlue transition">
<i class="fab fa-linkedin-in"></i>
</a>
<a class="w-9 h-9 flex items-center justify-center rounded-full bg-white/10 hover:bg-brandOrange hover:text-brandBlue transition">
<i class="fab fa-instagram"></i>
</a>
</div>
</div>

<!-- Column 2 -->
<div>
<h6 class="font-bold uppercase mb-4">Navigation</h6>
<ul class="space-y-2 text-sm">
<li><a class="text-brandOrange hover:underline">About Us</a></li>
<li><a class="text-brandOrange hover:underline">Contact</a></li>
<li><a class="text-brandOrange hover:underline">Blog</a></li>
<li><a class="text-brandOrange hover:underline">Dashboard</a></li>
</ul>
</div>

<!-- Column 3 -->
<div>
<h6 class="font-bold uppercase mb-4">Top Courses</h6>
<ul class="space-y-2 text-sm">
<li class="text-brandOrange">Web Development</li>
<li class="text-brandOrange">Data Science & AI</li>
<li class="text-brandOrange">Cyber Security</li>
<li class="text-brandOrange">Cloud Computing</li>
</ul>
</div>

<!-- Column 4 -->
<div>
<h6 class="font-bold uppercase mb-4">Get in Touch</h6>
<p class="text-sm mb-2">
<i class="fas fa-envelope text-brandOrange mr-2"></i> info@itccentre.com
</p>
<p class="text-sm mb-4">
<i class="fas fa-phone-alt text-brandOrange mr-2"></i> (252) 612345678
</p>

<a class="inline-block bg-brandOrange text-brandBlue px-5 py-2 rounded font-bold hover:bg-white transition">
Enroll Free Today
</a>
</div>

</div>

<div class="border-t border-white/20 mt-10 pt-4 text-center text-sm text-white/60">
&copy; 2025 ITC - Innovation Tech Centre. All Rights Reserved.
</div>
</footer>

<!-- ================= DARK MODE SCRIPT ================= -->
<script>
const toggle = document.getElementById('theme-toggle');
const body = document.documentElement;
const icon = toggle.querySelector('i');

if (localStorage.theme === 'dark') {
    body.classList.add('dark');
    icon.classList.replace('fa-moon','fa-sun');
}

toggle.onclick = () => {
    body.classList.toggle('dark');
    const dark = body.classList.contains('dark');
    icon.classList.toggle('fa-sun', dark);
    icon.classList.toggle('fa-moon', !dark);
    localStorage.theme = dark ? 'dark' : 'light';
};
</script>

</body>
</html>
