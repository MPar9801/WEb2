<?php
require_once '../../includes/config.php';
require_once '../../includes/product_functions.php';

if (!isset($_GET['id'])) {
    header("Location: ../../index.php");
    exit();
}

$product_id = (int)$_GET['id'];
$product = getProductById($product_id);

if (!$product) {
    header("Location: ../../index.php");
    exit();
}

$page_title = $product['name'];
require_once '../../includes/header.php';
?>

<div class="max-w-6xl mx-auto px-6 py-12">
    <div class="grid md:grid-cols-2 gap-12">
        <!-- Product Images -->
        <div>
            <div class="mb-4">
                <img src="<?php echo $product['image_path']; ?>" alt="<?php echo htmlspecialchars($product['name']); ?>" class="w-full rounded-lg shadow">
            </div>
        </div>
        
        <!-- Product Info -->
        <div>
            <h1 class="text-3xl font-bold mb-2"><?php echo htmlspecialchars($product['name']); ?></h1>
            
            <div class="flex items-center mb-4">
                <div class="flex text-yellow-400">
                    <?php 
                    $rating = isset($product['rating']) ? (float)$product['rating'] : 4.5;
                    $full_stars = floor($rating);
                    $half_star = ($rating - $full_stars) >= 0.5 ? 1 : 0;
                    $empty_stars = 5 - $full_stars - $half_star;
                    
                    for ($i = 0; $i < $full_stars; $i++) {
                        echo '<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>';
                    }
                    
                    if ($half_star) {
                        echo '<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>';
                    }
                    
                    for ($i = 0; $i < $empty_stars; $i++) {
                        echo '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/></svg>';
                    }
                    ?>
                </div>
                <span class="text-gray-600 ml-2">(<?php echo isset($product['review_count']) ? $product['review_count'] : 42; ?> reviews)</span>
            </div>
            
            <p class="text-2xl font-bold mb-6">₹<?php echo number_format($product['price'], 2); ?></p>
            
            <div class="mb-6">
                <p class="text-gray-700"><?php echo htmlspecialchars($product['description']); ?></p>
            </div>
            
            <div class="mb-6">
                <h3 class="font-semibold mb-2">Size</h3>
                <div class="grid grid-cols-5 gap-2">
                    <?php 
                    $sizes = ['6', '7', '8', '9', '10'];
                    foreach ($sizes as $size): 
                    ?>
                        <button class="border rounded py-2 text-center hover:bg-gray-100 focus:bg-black focus:text-white">
                            <?php echo $size; ?>
                        </button>
                    <?php endforeach; ?>
                </div>
            </div>
            
            <div class="mb-6">
                <h3 class="font-semibold mb-2">Color</h3>
                <div class="flex space-x-2">
                    <button class="w-8 h-8 rounded-full bg-black border-2 border-gray-300 focus:border-black"></button>
                    <button class="w-8 h-8 rounded-full bg-white border-2 border-gray-300 focus:border-black"></button>
                    <button class="w-8 h-8 rounded-full bg-blue-500 border-2 border-gray-300 focus:border-black"></button>
                    <button class="w-8 h-8 rounded-full bg-red-500 border-2 border-gray-300 focus:border-black"></button>
                </div>
            </div>
            
            <div class="flex space-x-4">
                <button class="bg-black text-white px-8 py-3 rounded hover:bg-gray-800 transition duration-300">
                    Add to Cart
                </button>
                <button class="border border-black text-black px-8 py-3 rounded hover:bg-gray-100 transition duration-300">
                    Add to Wishlist
                </button>
            </div>
            
            <div class="mt-8 border-t pt-6">
                <h3 class="font-semibold mb-2">Product Details</h3>
                <ul class="list-disc pl-5 space-y-1 text-gray-700">
                    <li>Category: <?php echo ucfirst($product['category']); ?></li>
                    <li>Material: Synthetic leather and mesh upper</li>
                    <li>Closure: Lace-up</li>
                    <li>Outsole: Rubber</li>
                    <li>Warranty: 6 months</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php require_once '../../includes/footer.php'; ?>