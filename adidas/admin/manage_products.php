<?php
require_once '../../includes/config.php';
require_once '../../includes/auth_functions.php';
require_once '../../includes/product_functions.php';

if (!isLoggedIn() || !isAdmin()) {
    header("Location: ../../auth/login.php");
    exit();
}

$page_title = "Manage Products";
$products = getAllProducts();

// Handle product deletion
if (isset($_GET['delete']) && is_numeric($_GET['delete'])) {
    $product_id = (int)$_GET['delete'];
    if (deleteProduct($product_id)) {
        $_SESSION['success'] = "Product deleted successfully!";
        header("Location: manage_products.php");
        exit();
    } else {
        $_SESSION['error'] = "Failed to delete product";
    }
}

require_once '../../includes/header.php';
?>

<div class="max-w-6xl mx-auto px-6 py-12">
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-3xl font-bold">Manage Products</h1>
        <a href="add_product.php" class="bg-black text-white px-4 py-2 rounded hover:bg-gray-800 transition duration-300">
            Add New Product
        </a>
    </div>
    
    <?php if (isset($_SESSION['success'])): ?>
        <div class="mb-6 p-4 bg-green-100 text-green-700 rounded">
            <?php echo htmlspecialchars($_SESSION['success']); unset($_SESSION['success']); ?>
        </div>
    <?php endif; ?>
    
    <?php if (isset($_SESSION['error'])): ?>
        <div class="mb-6 p-4 bg-red-100 text-red-700 rounded">
            <?php echo htmlspecialchars($_SESSION['error']); unset($_SESSION['error']); ?>
        </div>
    <?php endif; ?>
    
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white">
            <thead>
                <tr class="border-b">
                    <th class="text-left py-3 px-4">ID</th>
                    <th class="text-left py-3 px-4">Image</th>
                    <th class="text-left py-3 px-4">Name</th>
                    <th class="text-left py-3 px-4">Price</th>
                    <th class="text-left py-3 px-4">Category</th>
                    <th class="text-left py-3 px-4">Featured</th>
                    <th class="text-left py-3 px-4">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product): ?>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-3 px-4"><?php echo $product['id']; ?></td>
                        <td class="py-3 px-4">
                            <img src="<?php echo '../../' . $product['image_path']; ?>" alt="<?php echo htmlspecialchars($product['name']); ?>" class="w-16 h-16 object-cover rounded">
                        </td>
                        <td class="py-3 px-4"><?php echo htmlspecialchars($product['name']); ?></td>
                        <td class="py-3 px-4">₹<?php echo number_format($product['price'], 2); ?></td>
                        <td class="py-3 px-4"><?php echo ucfirst($product['category']); ?></td>
                        <td class="py-3 px-4">
                            <?php if ($product['is_featured']): ?>
                                <span class="px-2 py-1 text-xs bg-green-100 text-green-800 rounded">Yes</span>
                            <?php else: ?>
                                <span class="px-2 py-1 text-xs bg-gray-100 text-gray-800 rounded">No</span>
                            <?php endif; ?>
                        </td>
                        <td class="py-3 px-4">
                            <div class="flex space-x-2">
                                <a href="edit_product.php?id=<?php echo $product['id']; ?>" class="text-blue-600 hover:underline">Edit</a>
                                <a href="manage_products.php?delete=<?php echo $product['id']; ?>" class="text-red-600 hover:underline" onclick="return confirm('Are you sure you want to delete this product?')">Delete</a>
                                <a href="../../products/product_detail.php?id=<?php echo $product['id']; ?>" class="text-green-600 hover:underline">View</a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php require_once '../../includes/footer.php'; ?>