<?php
require_once '../includes/config.php';
require_once '../includes/auth_functions.php';
$page_title = "Login";
require_once '../includes/header.php';

if (isLoggedIn()) {
    header("Location: ../index.php");
    exit();
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    
    $result = loginUser($email, $password);
    
    if ($result === true) {
        header("Location: ../index.php");
        exit();
    } else {
        $error = $result;
    }
}
?>

<div class="max-w-md mx-auto my-12 p-6 bg-white rounded shadow">
    <h2 class="text-2xl font-bold mb-6 text-center">Login to Your Account</h2>
    
    <?php if (isset($error)): ?>
        <div class="mb-4 p-3 bg-red-100 text-red-700 rounded">
            <?php echo htmlspecialchars($error); ?>
        </div>
    <?php endif; ?>
    
    <form action="login.php" method="POST">
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
            <input type="email" id="email" name="email" required class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-black">
        </div>
        
        <div class="mb-6">
            <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
            <input type="password" id="password" name="password" required class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-black">
        </div>
        
        <button type="submit" class="w-full bg-black text-white py-2 px-4 rounded hover:bg-gray-800 transition duration-300">
            Login
        </button>
    </form>
    
    <div class="mt-4 text-center">
        <p class="text-sm text-gray-600">Don't have an account? <a href="register.php" class="text-black font-medium hover:underline">Sign up</a></p>
        <p class="text-sm text-gray-600 mt-1"><a href="forgot_password.php" class="text-black font-medium hover:underline">Forgot password?</a></p>
    </div>
</div>

<?php require_once '../includes/footer.php'; ?>