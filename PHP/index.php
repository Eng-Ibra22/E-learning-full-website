<?php
require_once 'db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_name = htmlspecialchars($_SESSION['user_name']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Innovation Tech</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            blue: '#002455',
                            orange: '#F87B1B',
                        }
                    },
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-gray-100 font-sans min-h-screen">

    <!-- Navbar -->
    <nav class="bg-brand-blue shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                <div class="flex items-center gap-3">
                    <div class="bg-white/10 p-2 rounded-lg">
                        <svg class="w-6 h-6 text-brand-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <span class="text-xl font-bold tracking-tight text-white">Innovation <span class="text-brand-orange">Tech Center</span></span>
                </div>

                <div class="flex items-center space-x-6">
                    <div class="flex items-center space-x-3">
                        <div class="h-10 w-10 rounded-full bg-white text-brand-blue flex items-center justify-center font-bold text-lg shadow-sm border-2 border-brand-orange">
                            <?php echo strtoupper(substr($user_name, 0, 1)); ?>
                        </div>
                        <span class="font-medium text-white hidden sm:block"><?php echo $user_name; ?></span>
                    </div>

                    <a href="logout.php" class="px-5 py-2 rounded-lg bg-brand-orange hover:bg-orange-600 text-white transition-colors font-medium text-sm shadow-md">
                        Logout
                    </a>
                </div>
            </div>
        </div>
    </nav>
  <div class="header d-flex items-center">
            <a class="text-primary mx-2" href="./index.php">Dashboard</a>
            <a class="text-primary mx-2"  href="./courses.php">Courses</a>
            <!-- <a href="./index.php">Dashboard</a> -->
    </div>
    <!-- Main Content -->
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">

        <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-8 mb-8">
            <h2 class="text-3xl font-bold text-brand-blue mb-2">Welcome Back, <?php echo $user_name; ?>!</h2>
            <p class="text-gray-500">Here is your daily activity overview.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Stat Card 1 -->
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200 hover:shadow-md transition-shadow">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-gray-500 font-medium uppercase text-xs tracking-wider">Total Courses</h3>
                    <div class="p-2 bg-blue-50 text-brand-blue rounded-lg">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                    </div>
                </div>
                <div class="text-3xl font-bold text-brand-blue"><?php  
                $conn = mysqli_connect("localhost" , "root" , "" , "dashboard_db");
$select = mysqli_query($conn  , "SELECT * FROM courses");
echo mysqli_num_rows($select);
                
                ?></div>
                <!-- <p class="text-sm text-green-600 mt-2 flex items-center font-medium">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                    </svg>
                    +2 new this week
                </p> -->
            </div>

            <!-- Stat Card 2 -->
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200 hover:shadow-md transition-shadow">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-gray-500 font-medium uppercase text-xs tracking-wider">users</h3>
                    <div class="p-2 bg-orange-50 text-brand-orange rounded-lg">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>
                <div class="text-3xl font-bold text-brand-blue"><?php  
                
                $conn = mysqli_connect("localhost" , "root" , "" , "dashboard_db");
                $users = mysqli_query($conn , "SELECT * FROM users");
                echo mysqli_num_rows($users);
                ?></div>
                <!-- <p class="text-sm text-gray-400 mt-2">Due in 2 days</p> -->
            </div>

            <!-- Stat Card 3 -->
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200 hover:shadow-md transition-shadow">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-gray-500 font-medium uppercase text-xs tracking-wider">Certificates</h3>
                    <div class="p-2 bg-purple-50 text-purple-600 rounded-lg">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>
                <div class="text-3xl font-bold text-brand-blue">1</div>
                <p class="text-sm text-gray-400 mt-2">Verified</p>
            </div>
        </div>
    </div>
</body>

</html>