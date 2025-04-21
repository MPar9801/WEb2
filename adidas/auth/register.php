<?php
$page_title = "Register";


if (isLoggedIn()) {
    header("Location: ../index.php");
    exit();
}


// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);
    
    // Validate passwords match
    if ($password !== $confirm_password) {
        $error = "Passwords do not match!";
    } else {
        $result = registerUser($username, $email, $password);
        
        if ($result === true) {
            // Auto-login after registration
            if (loginUser($email, $password) === true) {
                header("Location: ../index.php");
                exit();
            }
        } else {
            $error = $result;
        }
    }
}
require_once '../includes/header.php';
?>

<div class="max-w-md mx-auto my-12 p-6 bg-white rounded shadow">
    <h2 class="text-2xl font-bold mb-6 text-center">Create Your Account</h2>
    
    <?php if (isset($error)): ?>
        <div class="mb-4 p-3 bg-red-100 text-red-700 rounded">
            <?php echo htmlspecialchars($error); ?>
        </div>
    <?php endif; ?>
    
    <form action="register.php" method="POST">
        <div class="mb-4">
            <label for="username" class="block text-sm font-medium text-gray-700 mb-1">Username</label>
            <input type="text" id="username" name="username" required class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-black">
        </div>
        
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
            <input type="email" id="email" name="email" required class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-black">
        </div>
        
        <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
            <input type="password" id="password" name="password" required class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-black">
        </div>
        
        <div class="mb-6">
            <label for="confirm_password" class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
            <input type="password" id="confirm_password" name="confirm_password" required class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-black">
        </div>
        
        <button type="submit" class="w-full bg-black text-white py-2 px-4 rounded hover:bg-gray-800 transition duration-300">
            Register
        </button>
    </form>
    
    <div class="mt-4 text-center">
        <p class="text-sm text-gray-600">Already have an account? <a href="login.php" class="text-black font-medium hover:underline">Login</a></p>
    </div>
</div>

<?php require_once '../includes/footer.php'; ?>