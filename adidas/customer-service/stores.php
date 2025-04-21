<?php
$page_title = "Store Locator";
require_once __DIR__ . '/../includes/header.php';
?>

<main class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6">Find Our Stores</h1>
    
    <div class="grid md:grid-cols-2 gap-8">
        <!-- Search Form -->
        <div class="bg-gray-50 p-6 rounded-lg">
            <h2 class="text-xl font-semibold mb-4">Find Stores Near You</h2>
            <form class="space-y-4">
                <div>
                    <label for="location" class="block text-sm font-medium mb-1">City or ZIP Code</label>
                    <input type="text" id="location" class="w-full px-3 py-2 border rounded">
                </div>
                <button type="submit" class="bg-black text-white px-6 py-2 rounded hover:bg-gray-800">
                    Search Stores
                </button>
            </form>
        </div>
        
        <!-- Store List -->
        <div>
            <h2 class="text-xl font-semibold mb-4">Featured Stores</h2>
            <div class="space-y-4">
                <div class="border p-4 rounded-lg">
                    <h3 class="font-medium">Adidas Flagship Store</h3>
                    <p class="text-sm text-gray-600">123 Sport Street, New York</p>
                    <p class="text-sm text-gray-600">Open 9AM-9PM Daily</p>
                </div>
                <div class="border p-4 rounded-lg">
                    <h3 class="font-medium">Adidas Outlet</h3>
                    <p class="text-sm text-gray-600">456 Mall Road, Chicago</p>
                    <p class="text-sm text-gray-600">Open 10AM-8PM Daily</p>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>