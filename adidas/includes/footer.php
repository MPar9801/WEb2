<footer class="bg-gray-900 text-white py-12">
    <div class="max-w-6xl mx-auto px-6">
      <div class="grid md:grid-cols-4 gap-8">
        <div>
          <h4 class="font-bold text-lg mb-4">PRODUCTS</h4>
          <ul class="space-y-2">
            <li><a href="search.php?category=shoes" class="hover:underline">Shoes</a></li>
            <li><a href="search.php?category=clothing" class="hover:underline">Clothing</a></li>
            <li><a href="search.php?category=accessories" class="hover:underline">Accessories</a></li>
            <li><a href="search.php?category=new" class="hover:underline">New Arrivals</a></li>
            <li><a href="search.php?category=best" class="hover:underline">Best Sellers</a></li>
          </ul>
        </div>
        <div>
          <h4 class="font-bold text-lg mb-4">SPORTS</h4>
          <ul class="space-y-2">
            <li><a href="search.php?sport=running" class="hover:underline">Running</a></li>
            <li><a href="search.php?sport=football" class="hover:underline">Football</a></li>
            <li><a href="search.php?sport=basketball" class="hover:underline">Basketball</a></li>
            <li><a href="search.php?sport=training" class="hover:underline">Training</a></li>
            <li><a href="search.php?sport=outdoor" class="hover:underline">Outdoor</a></li>
          </ul>
        </div>
        <div>
          <h4 class="font-bold text-lg mb-4">COMPANY</h4>
          <ul class="space-y-2">
          <li><a href="about/about-us.php" class="hover:underline">About Us</a></li>
<li><a href="about/careers.php" class="hover:underline">Careers</a></li>
<li><a href="about/press.php" class="hover:underline">Press</a></li>
<li><a href="about/sustainability.php" class="hover:underline">Sustainability</a></li>
          </ul>
        </div>
        <div>
          <h4 class="font-bold text-lg mb-4">HELP</h4>
          <ul class="space-y-2">
            <li><a href="help.php" class="hover:underline">Customer Service</a></li>

<li><a href="customer-service/returns.php" class="hover:underline">Returns & Exchanges</a></li>
<li><a href="customer-service/shipping.php" class="hover:underline">Shipping</a></li>
<li><a href="customer-service/tracking.php" class="hover:underline">Order Tracking</a></li>
<li><a href="customer-service/stores.php" class="hover:underline">Store Locator</a></li>
          </ul>
        </div>
      </div>
      <div class="border-t border-gray-700 mt-8 pt-8 flex flex-col md:flex-row justify-between items-center">
        <div class="mb-4 md:mb-0">
          <p>&copy; <?php echo date('Y'); ?> Adidas. All rights reserved.</p>
        </div>
        <div class="flex space-x-4">
          <a href="https://www.facebook.com/" target="_blank"><img src="https://cdn-icons-png.flaticon.com/512/124/124010.png" alt="Facebook" class="w-6 h-6"></a>
          <a href="https://x.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiZW4ifQ%3D%3D%22%7D"target="_blank"><img src="https://cdn-icons-png.flaticon.com/512/733/733579.png" alt="Twitter" class="w-6 h-6"></a>
          <a href="https://www.instagram.com/mohammed_parvez_988/" target="_blank"><img src="https://cdn-icons-png.flaticon.com/512/2111/2111463.png" alt="Instagram" class="w-6 h-6"></a>
          <a href="https://www.youtube.com/" target="_blank"><img src="https://cdn-icons-png.flaticon.com/512/1384/1384060.png" alt="YouTube" class="w-6 h-6"></a>
        </div>
      </div>
    </div>
  </footer>

  <script>
    // Toggle mobile menu
    document.getElementById('mobileMenuToggle').addEventListener('click', () => {
      document.getElementById('mobileMenu').classList.toggle('hidden');
    });
    
    // Toggle all mobile dropdown menus
    document.querySelectorAll('.mobile-dropdown-toggle').forEach(toggle => {
      toggle.addEventListener('click', () => {
        const menu = toggle.nextElementSibling;
        menu.classList.toggle('hidden');
      });
    });
  
    // Dark mode toggle
    const themeToggle = document.getElementById('themeToggle');
    const sunIcon = document.getElementById('sunIcon');
    const moonIcon = document.getElementById('moonIcon');
  
    function updateThemeIcons() {
      const darkMode = document.documentElement.classList.contains('dark');
      sunIcon.classList.toggle('hidden', !darkMode);
      moonIcon.classList.toggle('hidden', darkMode);
    }
  
    themeToggle.addEventListener('click', () => {
      document.documentElement.classList.toggle('dark');
      updateThemeIcons();
    });
  
    // Initial theme icon display
    updateThemeIcons();
  </script>
</body>
</html>