<?php require_once 'auth_functions.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adidas | <?php echo $page_title ?? 'Home'; ?></title>
  <link rel="stylesheet" href="../assets/css/style.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Dropdown styles */
    .dropdown:hover .dropdown-menu {
      display: block;
    }
    .dropdown-menu {
      display: none;
      position: absolute;
      background-color: white;
      min-width: 250px;
      box-shadow: 0px 8px 16px rgba(0,0,0,0.1);
      z-index: 100;
      padding: 20px;
    }
    .dark .dropdown-menu {
      background-color: #1f2937;
    }
  </style>
</head>
<body class="bg-white text-gray-900 font-sans">

<!-- Utility Links (Top right) -->
<div class="text-sm text-right px-4 py-2 text-gray-600 dark:text-gray-300 hidden md:block">
  <a href="help.php" class="mx-2 hover:underline">help</a>
  <a href="#" class="mx-2 hover:underline">orders & returns</a>
  <?php if (isLoggedIn()): ?>
    <a href="auth/logout.php" class="mx-2 hover:underline">logout</a>
    <?php if (isAdmin()): ?>
      <a href="admin/dashboard.php" class="mx-2 hover:underline">admin</a>
    <?php endif; ?>
  <?php else: ?>
    <a href="auth/register.php" class="mx-2 hover:underline">sign up</a>
    <a href="auth/login.php" class="mx-2 hover:underline">log in</a>
  <?php endif; ?>
</div>

<!-- Main Header -->
<header class="sticky top-0 z-50 px-4 md:px-6 py-3 border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-900 text-gray-900 dark:text-white shadow-sm">
  <div class="flex items-center justify-between">
    <!-- Left: Logo + Nav -->
    <div class="flex items-center space-x-6">
      <a href="index.php">

        <video autoplay loop muted playsinline width="80" height="1000">
       
        <source src="assets/images/logo.mp4" type="video/mp4">
    </video>
      </a>

      <!-- Desktop Nav -->
      <nav class="hidden md:flex space-x-5 text-sm font-semibold uppercase tracking-wider">


        <!-- Shoes Dropdown -->
        <div class="dropdown relative">
          <button class="hover:underline flex items-center">
            Shoes
            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
          </button>
          <div class="dropdown-menu dark:bg-gray-800 dark:text-white">
            <h4 class="font-semibold mb-2">SHOES CATEGORIES</h4>
            <div class="grid grid-cols-2 gap-2">
              <a href="search.php?category=all" class="hover:underline">ALL SHOES</a>
              <a href="search.php?category=new" class="hover:underline">NEW ARRIVALS</a>
              <a href="search.php?category=best" class="hover:underline">BEST SELLERS</a>
              <a href="search.php?category=running" class="hover:underline">RUNNING</a>
              <a href="search.php?category=training" class="hover:underline">TRAINING</a>
              <a href="search.php?category=lifestyle" class="hover:underline">LIFESTYLE</a>
            </div>
          </div>
        </div>
        
        <!-- Men Dropdown -->
        <div class="dropdown relative">
          <button class="hover:underline flex items-center">
            Men
            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
          </button>
          <div class="dropdown-menu dark:bg-gray-800 dark:text-white">
            <h4 class="font-semibold mb-2">MEN'S COLLECTIONS</h4>
            <div class="grid grid-cols-2 gap-2">
              <a href="search.php?gender=men&category=new" class="hover:underline">NEW ARRIVALS</a>
              <a href="search.php?gender=men&category=shoes" class="hover:underline">SHOES</a>
              <a href="search.php?gender=men&category=clothing" class="hover:underline">CLOTHING</a>
              <a href="search.php?gender=men&category=accessories" class="hover:underline">ACCESSORIES</a>
              <a href="search.php?gender=men&category=sportswear" class="hover:underline">SPORTSWEAR</a>
              <a href="search.php?gender=men&category=sale" class="hover:underline">SALE</a>
            </div>
          </div>
        </div>
        
        <!-- Women Dropdown -->
        <div class="dropdown relative">
          <button class="hover:underline flex items-center">
            Women
            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
          </button>
          <div class="dropdown-menu dark:bg-gray-800 dark:text-white">
            <h4 class="font-semibold mb-2">WOMEN'S COLLECTIONS</h4>
            <div class="grid grid-cols-2 gap-2">
              <a href="search.php?gender=women&category=new" class="hover:underline">NEW ARRIVALS</a>
              <a href="search.php?gender=women&category=shoes" class="hover:underline">SHOES</a>
              <a href="search.php?gender=women&category=clothing" class="hover:underline">CLOTHING</a>
              <a href="search.php?gender=women&category=accessories" class="hover:underline">ACCESSORIES</a>
              <a href="search.php?gender=women&category=sportswear" class="hover:underline">SPORTSWEAR</a>
              <a href="search.php?gender=women&category=sale" class="hover:underline">SALE</a>
            </div>
          </div>
        </div>
        
        <!-- Kids Dropdown -->
        <div class="dropdown relative">
          <button class="hover:underline flex items-center">
            Kids
            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
          </button>
          <div class="dropdown-menu dark:bg-gray-800 dark:text-white">
            <h4 class="font-semibold mb-2">KIDS' COLLECTIONS</h4>
            <div class="grid grid-cols-2 gap-2">
              <a href="search.php?gender=kids&category=new" class="hover:underline">NEW ARRIVALS</a>
              <a href="search.php?gender=kids&category=shoes" class="hover:underline">SHOES</a>
              <a href="search.php?gender=kids&category=clothing" class="hover:underline">CLOTHING</a>
              <a href="search.php?gender=kids&category=accessories" class="hover:underline">ACCESSORIES</a>
              <a href="search.php?gender=kids&category=sportswear" class="hover:underline">SPORTSWEAR</a>
              <a href="search.php?gender=kids&category=sale" class="hover:underline">SALE</a>
            </div>
          </div>
        </div>
        
        <!-- Sports Dropdown -->
        <div class="dropdown relative">
          <button class="hover:underline flex items-center">
            Sports
            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
          </button>
          <div class="dropdown-menu dark:bg-gray-800 dark:text-white">
            <h4 class="font-semibold mb-2">SPORTS</h4>
            <div class="grid grid-cols-2 gap-2">
              <a href="search.php?sport=running" class="hover:underline">RUNNING</a>
              <a href="search.php?sport=training" class="hover:underline">GYM & TRAINING</a>
              <a href="search.php?sport=cricket" class="hover:underline">CRICKET</a>
              <a href="search.php?sport=football" class="hover:underline">FOOTBALL</a>
              <a href="search.php?sport=walking" class="hover:underline">WALKING</a>
              <a href="search.php?sport=hiking" class="hover:underline">HIKING</a>
              <a href="search.php?sport=tennis" class="hover:underline">TENNIS</a>
            </div>
          </div>
        </div>
        
        <a href="search.php?category=lifestyle" class="hover:underline">Lifestyle</a>
        <a href="search.php?category=sale" class="text-black dark:text-white font-extrabold hover:underline">Outlet</a>
      </nav>
    </div>

    <!-- Right: Search, Icons, Dark Mode -->
    <div class="flex items-center space-x-4">
      <!-- Search Bar -->
      <form action="search.php" method="GET" class="flex items-center bg-gray-100 dark:bg-gray-800 rounded px-3 py-1 focus-within:ring-2 ring-black dark:ring-white transition-all duration-300">
        <input
          type="text"
          name="q"
          placeholder="Search"
          class="bg-transparent outline-none text-sm w-20 md:w-32 focus:w-48 transition-all duration-300"
        />
        <button type="submit">
          <svg class="w-5 h-5 text-gray-600 dark:text-gray-300 ml-2" fill="currentColor" viewBox="0 0 20 20">
            <path d="M12.9 14.32a8 8 0 111.414-1.414l4.386 4.386-1.414 1.414-4.386-4.386zM8 14a6 6 0 100-12 6 6 0 000 12z"/>
          </svg>
        </button>
      </form>

      <!-- Icons -->
      <div class="flex items-center space-x-4">
        <!-- Account -->
        <div class="relative">
          <a href="<?php echo isLoggedIn() ? 'profile.php' : 'auth/login.php'; ?>">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A4 4 0 0112 16a4 4 0 016.879 1.804M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
            </svg>
            <?php if (isLoggedIn()): ?>
              <span class="absolute -top-2 -right-2 bg-yellow-400 text-xs rounded-full px-1 text-black font-bold">1</span>
            <?php endif; ?>
          </a>
        </div>

        <!-- Wishlist -->
        <a href="<?php echo isLoggedIn() ? 'wishlist.php' : 'auth/login.php'; ?>">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 016.364 0L12 7.636l1.318-1.318a4.5 4.5 0 116.364 6.364L12 21.682l-7.682-7.682a4.5 4.5 0 010-6.364z"/>
          </svg>
        </a>

        <!-- Bag -->
        <a href="<?php echo isLoggedIn() ? 'cart.php' : 'auth/login.php'; ?>">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5 8h14l1 12H4L5 8zm7-4a3 3 0 00-3 3h6a3 3 0 00-3-3z"/>
          </svg>
        </a>

        <!-- Dark Mode Toggle -->
        <button id="themeToggle" class="ml-2 focus:outline-none">
          <svg id="moonIcon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"/>
          </svg>
          <svg id="sunIcon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2m0 14v2m9-9h-2M5 12H3m15.364-6.364l-1.414 1.414M6.05 17.95l-1.414-1.414M17.95 17.95l-1.414-1.414M6.05 6.05L4.636 7.464"/>
          </svg>
        </button>
      </div>

      <!-- Mobile Menu Button -->
      <button id="mobileMenuToggle" class="md:hidden focus:outline-none">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
      </button>
    </div>
  </div>

  <!-- Mobile Menu -->
  <nav id="mobileMenu" class="md:hidden mt-3 space-y-2 text-sm font-semibold uppercase tracking-wider hidden">
 <!-- Existing mobile items -->
    <a href="/customer-service/shipping.php" class="block">Shipping</a>
    <a href="/customer-service/returns.php" class="block">Returns</a>
    <a href="/customer-service/stores.php" class="block">Stores</a>
    <a href="/customer-service/tracking.php" class="block">Tracking</a>
 
  <!-- Shoes Mobile Dropdown -->
    <div class="pl-2">
      <button class="mobile-dropdown-toggle flex items-center w-full justify-between">
        Shoes
        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
        </svg>
      </button>
      <div class="mobile-dropdown-menu pl-4 mt-1 space-y-1 hidden">
        <a href="search.php?category=all" class="block">All Shoes</a>
        <a href="search.php?category=new" class="block">New Arrivals</a>
        <a href="search.php?category=best" class="block">Best Sellers</a>
        <a href="search.php?category=running" class="block">Running</a>
        <a href="search.php?category=training" class="block">Training</a>
        <a href="search.php?category=lifestyle" class="block">Lifestyle</a>
      </div>
    </div>
    
    <!-- Men Mobile Dropdown -->
    <div class="pl-2">
      <button class="mobile-dropdown-toggle flex items-center w-full justify-between">
        Men
        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
        </svg>
      </button>
      <div class="mobile-dropdown-menu pl-4 mt-1 space-y-1 hidden">
        <a href="search.php?gender=men&category=new" class="block">New Arrivals</a>
        <a href="search.php?gender=men&category=shoes" class="block">Shoes</a>
        <a href="search.php?gender=men&category=clothing" class="block">Clothing</a>
        <a href="search.php?gender=men&category=accessories" class="block">Accessories</a>
        <a href="search.php?gender=men&category=sportswear" class="block">Sportswear</a>
        <a href="search.php?gender=men&category=sale" class="block">Sale</a>
      </div>
    </div>
    
    <!-- Women Mobile Dropdown -->
    <div class="pl-2">
      <button class="mobile-dropdown-toggle flex items-center w-full justify-between">
        Women
        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
        </svg>
      </button>
      <div class="mobile-dropdown-menu pl-4 mt-1 space-y-1 hidden">
        <a href="search.php?gender=women&category=new" class="block">New Arrivals</a>
        <a href="search.php?gender=women&category=shoes" class="block">Shoes</a>
        <a href="search.php?gender=women&category=clothing" class="block">Clothing</a>
        <a href="search.php?gender=women&category=accessories" class="block">Accessories</a>
        <a href="search.php?gender=women&category=sportswear" class="block">Sportswear</a>
        <a href="search.php?gender=women&category=sale" class="block">Sale</a>
      </div>
    </div>
    
    <!-- Kids Mobile Dropdown -->
    <div class="pl-2">
      <button class="mobile-dropdown-toggle flex items-center w-full justify-between">
        Kids
        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
        </svg>
      </button>
      <div class="mobile-dropdown-menu pl-4 mt-1 space-y-1 hidden">
        <a href="search.php?gender=kids&category=new" class="block">New Arrivals</a>
        <a href="search.php?gender=kids&category=shoes" class="block">Shoes</a>
        <a href="search.php?gender=kids&category=clothing" class="block">Clothing</a>
        <a href="search.php?gender=kids&category=accessories" class="block">Accessories</a>
        <a href="search.php?gender=kids&category=sportswear" class="block">Sportswear</a>
        <a href="search.php?gender=kids&category=sale" class="block">Sale</a>
      </div>
    </div>
    
    <!-- Sports Mobile Dropdown -->
    <div class="pl-2">
      <button class="mobile-dropdown-toggle flex items-center w-full justify-between">
        Sports
        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
        </svg>
      </button>
      <div class="mobile-dropdown-menu pl-4 mt-1 space-y-1 hidden">
        <a href="search.php?sport=running" class="block">Running</a>
        <a href="search.php?sport=training" class="block">Gym & Training</a>
        <a href="search.php?sport=cricket" class="block">Cricket</a>
        <a href="search.php?sport=football" class="block">Football</a>
        <a href="search.php?sport=walking" class="block">Walking</a>
        <a href="search.php?sport=hiking" class="block">Hiking</a>
        <a href="search.php?sport=tennis" class="block">Tennis</a>
      </div>
    </div>
    
    <a href="search.php?category=lifestyle" class="block">Lifestyle</a>
    <a href="search.php?category=sale" class="block font-bold">Outlet</a>
  </nav>
</header>


<!-- Dark Mode & Mobile Menu Script -->
<script>
  // Dark Mode Toggle
  const themeToggle = document.getElementById('themeToggle');
  const moonIcon = document.getElementById('moonIcon');
  const sunIcon = document.getElementById('sunIcon');

  if (localStorage.getItem('theme') === 'dark') {
    document.documentElement.classList.add('dark');
    moonIcon.classList.add('hidden');
    sunIcon.classList.remove('hidden');
  } else {
    document.documentElement.classList.remove('dark');
    sunIcon.classList.add('hidden');
    moonIcon.classList.remove('hidden');
  }

  themeToggle.addEventListener('click', () => {
    document.documentElement.classList.toggle('dark');
    localStorage.setItem('theme', document.documentElement.classList.contains('dark') ? 'dark' : 'light');
    moonIcon.classList.toggle('hidden');
    sunIcon.classList.toggle('hidden');
  });

  // Mobile Menu Toggle
  const mobileMenuToggle = document.getElementById('mobileMenuToggle');
  const mobileMenu = document.getElementById('mobileMenu');

  mobileMenuToggle.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
  });

  // Mobile Dropdown Toggles
  document.querySelectorAll('.mobile-dropdown-toggle').forEach(button => {
    button.addEventListener('click', () => {
      const menu = button.nextElementSibling;
      menu.classList.toggle('hidden');
    });
  });
</script>