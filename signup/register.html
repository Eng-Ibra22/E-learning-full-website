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
        $error_msg = "Xogtaan waa qaldan tahay."; // User requested this specific message for invalid data
    } else {
        // Check if email already exists
        $stmt = $pdo->prepare("SELECT id FROM users WHERE email = ?");
        $stmt->execute([$email]);

        if ($stmt->rowCount() > 0) {
            $error_msg = "Xogtaan waa qaldan tahay."; // Email exists, so data is invalid
        } else {
            // Hash password and insert
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $insert_stmt = $pdo->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");

            if ($insert_stmt->execute([$name, $email, $hashed_password])) {
                $success_msg = "Waad isdiiwaangelisay! Hadda waad gali kartaa...";
                header("refresh:2;url=login.php");
            } else {
                $error_msg = "Xogtaan waa qaldan tahay.";
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Innovation Tech</title>
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

<body class="bg-brand-blue min-h-screen flex items-center justify-center p-4">

    <div class="w-full max-w-lg bg-white rounded-xl shadow-2xl overflow-hidden">
        <!-- Header -->
        <div class="bg-white p-8 pb-0 text-center">
            <div class="inline-flex items-center justify-center w-12 h-12 rounded-lg bg-brand-blue/5 mb-4">
                <svg class="w-7 h-7 text-brand-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                </svg>
            </div>
            <h2 class="text-2xl font-bold text-brand-blue">Create Account</h2>
            <p class="text-gray-500 text-sm mt-1">Join our professional platform today</p>
        </div>

        <div class="p-8">
            <?php if (!empty($error_msg)): ?>
                <div class="bg-red-50 border-l-4 border-red-500 p-4 mb-6 text-red-700 rounded text-sm">
                    <?php echo $error_msg; ?>
                </div>
            <?php endif; ?>

            <?php if (!empty($success_msg)): ?>
                <div class="bg-green-50 border-l-4 border-green-500 p-4 mb-6 text-green-700 rounded text-sm">
                    <?php echo $success_msg; ?>
                </div>
            <?php endif; ?>

            <form method="POST" action="" class="space-y-5">
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Full Name</label>
                    <input type="text" name="name" required
                        class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:border-brand-blue focus:ring-1 focus:ring-brand-blue transition-colors text-gray-800"
                        placeholder="John Doe">
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Email Address</label>
                    <input type="email" name="email" required
                        class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:border-brand-blue focus:ring-1 focus:ring-brand-blue transition-colors text-gray-800"
                        placeholder="you@example.com">
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Password</label>
                        <input type="password" name="password" required
                            class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:border-brand-blue focus:ring-1 focus:ring-brand-blue transition-colors text-gray-800"
                            placeholder="••••••••">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Confirm</label>
                        <input type="password" name="confirm_password" required
                            class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:border-brand-blue focus:ring-1 focus:ring-brand-blue transition-colors text-gray-800"
                            placeholder="••••••••">
                    </div>
                </div>

                <div class="pt-2">
                    <button type="submit"
                        class="w-full bg-brand-orange hover:bg-orange-600 text-white font-bold py-3.5 rounded-lg shadow-md hover:shadow-lg transition-all transform hover:-translate-y-0.5">
                        Sign Up
                    </button>
                </div>
            </form>

            <p class="text-center text-sm text-gray-600 mt-8">
                Already have an account? <a href="login.php" class="text-brand-blue font-bold hover:underline">Log In</a>
            </p>
        </div>
    </div>
</body>

</html>