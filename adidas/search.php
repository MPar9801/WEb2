<?php
$page_title = "Search";
require_once 'includes/header.php';
require_once 'includes/product_functions.php';

// Get search parameters
$search_query = isset($_GET['q']) ? trim($_GET['q']) : '';
$category = isset($_GET['category']) ? $_GET['category'] : '';
$gender = isset($_GET['gender']) ? $_GET['gender'] : '';
$sport = isset($_GET['sport']) ? $_GET['sport'] : '';
$price = isset($_GET['price']) ? (int)$_GET['price'] : 0;

// Build SQL query based on parameters
$sql = "SELECT * FROM products WHERE 1=1";
$params = [];
$types = '';

if (!empty($search_query)) {
    $sql .= " AND (name LIKE ? OR description LIKE ?)";
    $search_param = "%$search_query%";
    $params[] = $search_param;
    $params[] = $search_param;
    $types .= 'ss';
}

if (!empty($category)) {
    if ($category === 'new') {
        $sql .= " AND created_at > DATE_SUB(NOW(), INTERVAL 30 DAY)";
    } elseif ($category === 'best') {
        $sql .= " AND is_featured = 1";
    } elseif ($category === 'sale') {
        $sql .= " AND price < original_price";
    } else {
        $sql .= " AND category = ?";
        $params[] = $category;
        $types .= 's';
    }
}

if (!empty($gender)) {
    $sql .= " AND gender = ?";
    $params[] = $gender;
    $types .= 's';
}

if (!empty($sport)) {
    $sql .= " AND sport = ?";
    $params[] = $sport;
    $types .= 's';
}

if ($price > 0) {
    $sql .= " AND price <= ?";
    $params[] = $price;
    $types .= 'i';
}

// Prepare and execute the query
global $conn;
$stmt = $conn->prepare($sql);

if (!empty($params)) {
    $stmt->bind_param($types, ...$params);
}

$stmt->execute();
$result = $stmt->get_result();
$products = $result->fetch_all(MYSQLI_ASSOC);
?>

<div class="max-w-6xl mx-auto px-6 py-12">
    <h1 class="text-3xl font-bold mb-8">Search Results</h1>
   
    
    <?php if (!empty($search_query) || !empty($category) || !empty($gender) || !empty($sport) || $price > 0): ?>
        <div class="mb-6">
            <p class="text-gray-600">
                <?php 
                $filters = [];
                if (!empty($search_query)) $filters[] = "search: \"$search_query\"";
                if (!empty($category)) $filters[] = "category: " . ucfirst($category);
                if (!empty($gender)) $filters[] = "gender: " . ucfirst($gender);
                if (!empty($sport)) $filters[] = "sport: " . ucfirst($sport);
                if ($price > 0) $filters[] = "max price: ₹$price";
                
                echo "Showing results for: " . implode(", ", $filters);
                ?>
            </p>
        </div>


 <!-- Featured Section -->
 <section class="py-12 px-6">
  <div class="max-w-6xl mx-auto">
    <h3 class="text-2xl font-bold text-center mb-8">Featured Collections</h3>
    <div class="grid md:grid-cols-3 gap-6">
      <!-- Running Card -->
      <div class="product-card group">
        <div class="img-wrapper relative overflow-hidden">
          <a href="search.php?category=running">
            <img src="assets/images/image4.png" class="default-img w-full h-auto transition duration-300 group-hover:opacity-0" alt="Running Shoes">
            <img src="assets/images/image4t.png" class="hover-img absolute inset-0 w-full h-auto transition duration-300 opacity-0 group-hover:opacity-100" alt="Running Shoes Hover">
          </a>
        </div>
        <div class="p-4">
          <h4 class="font-semibold mb-2">Running</h4>
          <p class="text-sm text-gray-600">Gear built for speed and endurance.</p>
        </div>
      </div>

      <!-- Lifestyle Card -->
      <div class="product-card group">
        <div class="img-wrapper relative overflow-hidden">
          <a href="search.php?category=lifestyle">
            <img src="assets/images/image3.png" class="default-img w-full h-auto transition duration-300 group-hover:opacity-0" alt="Lifestyle">
            <img src="assets/images/image3t.png" class="hover-img absolute inset-0 w-full h-auto transition duration-300 opacity-0 group-hover:opacity-100" alt="Lifestyle Hover">
          </a>
        </div>
        <div class="p-4">
          <h4 class="font-semibold mb-2">Lifestyle</h4>
          <p class="text-sm text-gray-600">Fresh fits and modern streetwear.</p>
        </div>
      </div>

      <!-- Originals Card -->
      <div class="product-card group">
        <div class="img-wrapper relative overflow-hidden">
          <a href="search.php?category=originals">
            <img src="assets/images/image2.png" class="default-img w-full h-auto transition duration-300 group-hover:opacity-0" alt="Originals">
            <img src="assets/images/image2t.png" class="hover-img absolute inset-0 w-full h-auto transition duration-300 opacity-0 group-hover:opacity-100" alt="Originals Hover">
          </a>
        </div>
        <div class="p-4">
          <h4 class="font-semibold mb-2">Originals</h4>
          <p class="text-sm text-gray-600">Classic adidas style reimagined.</p>
        </div>
      </div>
    </div>
  </div>
</section>

    <?php endif; ?>
    
    <?php if (empty($products)): ?>
        <div class="text-center py-12">
            
            <!-- <p class="text-xl text-gray-600">No products found matching your criteria.</p> -->
            <a href="index.php" class="mt-4 inline-block bg-black text-white px-6 py-2 rounded hover:bg-gray-800 transition duration-300">
                Continue Shopping
            </a>
        </div>
    <?php else: ?>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            <?php foreach ($products as $product): ?>
                <div class="product-card">
                    <div class="img-wrapper">
                        <a href="products/product_detail.php?id=<?php echo $product['id']; ?>">
                            <img src="<?php echo $product['image_path']; ?>" class="default-img" alt="<?php echo htmlspecialchars($product['name']); ?>">
                        </a>
                    </div>
                    <div class="p-4">
                        <h4 class="font-semibold mb-2"><?php echo htmlspecialchars($product['name']); ?></h4>
                        <p class="text-sm text-gray-600"><?php echo htmlspecialchars($product['description']); ?></p>
                        <p class="font-bold mt-2">₹<?php echo number_format($product['price'], 2); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>

<?php require_once 'includes/footer.php'; ?>