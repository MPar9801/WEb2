<?php
// Path to includes from admin directory
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/auth_functions.php';
require_once __DIR__ . '/../includes/product_functions.php';

if (!isLoggedIn() || !isAdmin()) {
    header("Location: ../auth/login.php");
    exit();
}

$page_title = "Add Product";
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $description = trim($_POST['description']);
    $price = (float)$_POST['price'];
    $category = trim($_POST['category']);
    $is_featured = isset($_POST['is_featured']) ? 1 : 0;
    
    // Validate inputs
    if (empty($name)) $errors[] = "Product name is required";
    if (empty($description)) $errors[] = "Description is required";
    if ($price <= 0) $errors[] = "Price must be greater than 0";
    if (empty($category)) $errors[] = "Category is required";
    
    // Handle file upload
    $image_path = '';
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
        $file_type = $_FILES['image']['type'];
        
        if (!in_array($file_type, $allowed_types)) {
            $errors[] = "Only JPG, PNG, and GIF images are allowed";
        } else {
            $upload_dir = __DIR__ . '/../assets/images/products/';
            $file_name = uniqid() . '_' . basename($_FILES['image']['name']);
            $target_path = $upload_dir . $file_name;
            
            // Create directory if it doesn't exist
            if (!file_exists($upload_dir)) {
                mkdir($upload_dir, 0755, true);
            }
            
            if (move_uploaded_file($_FILES['image']['tmp_name'], $target_path)) {
                $image_path = 'assets/images/products/' . $file_name;
            } else {
                $errors[] = "Failed to upload image";
            }
        }
    } else {
        $errors[] = "Product image is required";
    }
    
    // If no errors, add product
    if (empty($errors)) {
        if (addProduct($name, $description, $price, $category, $is_featured, $image_path)) {
            $_SESSION['success'] = "Product added successfully!";
            header("Location: manage_products.php");
            exit();
        } else {
            $errors[] = "Failed to add product to database";
        }
    }
}

require_once __DIR__ . '/../includes/header.php';
?>

<!-- Rest of your HTML remains the same -->
<div class="max-w-4xl mx-auto px-6 py-12">
    <h1 class="text-3xl font-bold mb-8">Add New Product</h1>
    
    <?php if (!empty($errors)): ?>
        <div class="mb-6 p-4 bg-red-100 text-red-700 rounded">
            <ul class="list-disc pl-5">
                <?php foreach ($errors as $error): ?>
                    <li><?php echo htmlspecialchars($error); ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>
    
    <form action="add_product.php" method="POST" enctype="multipart/form-data" class="space-y-6">
        <!-- Form fields remain unchanged -->
    </form>
</div>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>