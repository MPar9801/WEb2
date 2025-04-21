<?php
$page_title = "Home";
require_once 'includes/header.php';
require_once 'includes/product_functions.php';

$featured_products = getFeaturedProducts();
$new_arrivals = getNewArrivals();
?>
<link rel="stylesheet" href="assets/css/style.css">
<!-- Hero Section -->
<section class="hero-section">
    <!-- <img src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enUS/Images/originals-fw21-sustainability-hp-tc-global-masthead-d-d_tcm221-847988.jpg" alt="Adidas Shoes" class="hero-img" /> -->
    <video autoplay loop muted playsinline width="1530" height="1000">
      <source src="assets/images/vid.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
    
    <div class="hero-overlay">
      <!-- <video autoplay loop muted playsinline width="650" height="348" style="animatio;">
        <source src="assets/images/vid.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video> -->
      <h2>Step into Performance</h2>
      <p>Discover the latest in performance footwear and apparel</p>
      <button>Shop Now</button>
    </div>
  </section>

<!-- New Arrivals Section -->
<section class="py-12 px-6">
  <div class="max-w-6xl mx-auto">
    <div class="flex justify-between items-center mb-8">
      <h3 class="text-2xl font-bold">NEW ARRIVALS</h3>
      <a href="search.php?category=new" class="text-sm font-semibold hover:underline">ALL SNEAKERS</a>
    </div>
    
    <div class="grid md:grid-cols-4 gap-6">
      <!-- Duramo Card -->
      <div class="product-card group">
        <div class="img-wrapper relative overflow-hidden">
          <a href="products/product_detail.php?id=1">
            <img src="assets/images/Duramo1.png" class="default-img w-full h-auto transition duration-300 group-hover:opacity-0" alt="Duramo Running Shoes">
            <img src="assets/images/Duramo2.png" class="hover-img absolute inset-0 w-full h-auto transition duration-300 opacity-0 group-hover:opacity-100" alt="Duramo Running Shoes">
          </a>
        </div>
        <div class="p-4">
          <h4 class="font-semibold mb-2">DURAMO</h4>
          <p class="text-sm text-gray-600">Running Shoes for those looking to learn the ropes and push themselves to the next level.</p>
          <p class="font-bold mt-2">₹4,999.00</p>
        </div>
      </div>
      
      <!-- Advantage Card -->
      <div class="product-card group">
        <div class="img-wrapper relative overflow-hidden">
          <a href="products/product_detail.php?id=2">
            <img src="assets/images/Advantage1.png" class="default-img w-full h-auto transition duration-300 group-hover:opacity-0" alt="Advantage Sneakers">
            <img src="assets/images/Advantage2.png" class="hover-img absolute inset-0 w-full h-auto transition duration-300 opacity-0 group-hover:opacity-100" alt="Advantage Sneakers">
          </a>
        </div>
        <div class="p-4">
          <h4 class="font-semibold mb-2">ADVANTAGE</h4>
          <p class="text-sm text-gray-600">Stylish, everyday sneakers with gentle support as you go about your day</p>
          <p class="font-bold mt-2">₹5,999.00</p>
        </div>
      </div>
      
      <!-- VL Court Card -->
      <div class="product-card group">
        <div class="img-wrapper relative overflow-hidden">
          <a href="products/product_detail.php?id=3">
            <img src="assets/images/VL_court.png" class="default-img w-full h-auto transition duration-300 group-hover:opacity-0" alt="VL Court Trainers">
            <img src="assets/images/VL_court2.png" class="hover-img absolute inset-0 w-full h-auto transition duration-300 opacity-0 group-hover:opacity-100" alt="VL Court Trainers">
          </a>
        </div>
        <div class="p-4">
          <h4 class="font-semibold mb-2">VL COURT</h4>
          <p class="text-sm text-gray-600">Dress them up. Dress them down. Trainers to effortlessly match anything in your wardrobe.</p>
          <p class="font-bold mt-2">₹6,499.00</p>
        </div>
      </div>
      
      <!-- Grand Court Card -->
      <div class="product-card group">
        <div class="img-wrapper relative overflow-hidden">
          <a href="products/product_detail.php?id=4">
            <img src="assets/images/grand_court.png" class="default-img w-full h-auto transition duration-300 group-hover:opacity-0" alt="Grand Court Shoes">
            <img src="assets/images/grand_court2.png" class="hover-img absolute inset-0 w-full h-auto transition duration-300 opacity-0 group-hover:opacity-100" alt="Grand Court Shoes">
          </a>
        </div>
        <div class="p-4">
          <h4 class="font-semibold mb-2">GRAND COURT</h4>
          <p class="text-sm text-gray-600">Shoes with timeless design and sleek silhouette to turn any outfit into a standout look.</p>
          <p class="font-bold mt-2">₹7,999.00</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Promo Section -->
<section class="py-12 bg-gray-100 dark:bg-gray-800">
  <div class="max-w-6xl mx-auto px-6">
    <div class="text-center mb-8">
      <h3 class="text-2xl font-bold">NEVER OUT OF STYLE</h3>
    </div>
    
    <div class="grid md:grid-cols-3 gap-8">
      <div class="text-center">
        <a href="search.php?price=5000" class="text-lg font-semibold hover:underline">SHOES UNDER ₹5000</a>
      </div>
      <div class="text-center">
        <a href="search.php?category=new" class="text-lg font-semibold hover:underline">NEW ARRIVALS</a>
      </div>
      <div class="text-center">
        <a href="search.php?category=sale" class="text-lg font-semibold hover:underline">OUTLET</a>
      </div>
    </div>
  </div>
</section>

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

<!-- Newsletter Section -->
<section class="py-12 bg-black text-white">
  <div class="max-w-6xl mx-auto px-6 text-center">
    <h3 class="text-2xl font-bold mb-4">JOIN OUR NEWSLETTER</h3>
    <p class="mb-6 max-w-2xl mx-auto">Get the latest updates on new products and upcoming sales</p>
    <form action="subscribe.php" method="POST" class="flex flex-col md:flex-row justify-center max-w-md mx-auto">
      <input type="email" name="email" placeholder="Your email address" required class="px-4 py-3 rounded-l text-black w-full mb-2 md:mb-0 focus:outline-none focus:ring-2 focus:ring-yellow-400">
      <button type="submit" class="bg-white text-black px-6 py-3 font-bold md:rounded-r hover:bg-gray-200 transition duration-300">Sign Up</button>
    </form>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>