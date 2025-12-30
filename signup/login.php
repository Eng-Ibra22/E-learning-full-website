<?php
require_once 'db.php';

$error_msg = '';

if (isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        $error_msg = "Email ama Password waa qalad.";
    } else {
        $stmt = $pdo->prepare("SELECT id, name, password FROM users WHERE email = ?");
        $stmt->execute([$email]);

        if ($stmt->rowCount() === 1) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            if (password_verify($password, $row['password'])) {
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_name'] = $row['name'];
                header("Location: index.php");
                exit();
            } else {
                $error_msg = "Email ama Password waa qalad.";
            }
        } else {
            $error_msg = "Email ama Password waa qalad.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Innovation Tech</title>
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
        <div class="bg- p-8 pb-0 text-center">
            <div class="inline-flex items-center justify-center w-12 h-12 rounded-lg bg-brand-blue/5 mb-4">
                <svg class="w-7 h-7 text-brand-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                </svg>
            </div>
            <h2 class="text-2xl font-bold text-brand-blue">Welcome Back</h2>
            <p class="text-gray-500 text-sm mt-1">Please login to your account</p>
        </div>

        <div class="p-8">
            <?php if (!empty($error_msg)): ?>
                <div class="bg-red-50 border-l-4 border-red-500 p-4 mb-6 text-red-700 rounded text-sm">
                    <?php echo $error_msg; ?>
                </div>
            <?php endif; ?>

            <form method="POST" action="" class="space-y-6">
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Email Address</label>
                    <input type="email" name="email" required
                        class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:border-brand-blue focus:ring-1 focus:ring-brand-blue transition-colors text-gray-800"
                        placeholder="you@example.com">
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Password</label>
                    <input type="password" name="password" required
                        class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:border-brand-blue focus:ring-1 focus:ring-brand-blue transition-colors text-gray-800"
                        placeholder="••••••••">
                </div>

                <div class="pt-2">
                    <button type="submit"
                        class="w-full bg-brand-orange hover:bg-orange-600 text-white font-bold py-3.5 rounded-lg shadow-md hover:shadow-lg transition-all transform hover:-translate-y-0.5">
                        Log In
                    </button>
                </div>
            </form>

            <p class="text-center text-sm text-gray-600 mt-8">
                Don't have an account? <a href="register.php" class="text-brand-blue font-bold hover:underline">Sign Up</a>
            </p>
        </div>
    </div>
</body>

</html>