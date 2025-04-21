<?php
$page_title = "Order Tracking";
require_once __DIR__ . '/../includes/header.php';
?>

<main class="container mx-auto px-4 py-8 max-w-2xl">
    <h1 class="text-3xl font-bold mb-6">Track Your Order</h1>
    
    <form class="space-y-4">
        <div>
            <label for="order-number" class="block text-sm font-medium mb-1">Order Number</label>
            <input type="text" id="order-number" class="w-full px-3 py-2 border rounded">
        </div>
        
        <div>
            <label for="email" class="block text-sm font-medium mb-1">Email Address</label>
            <input type="email" id="email" class="w-full px-3 py-2 border rounded">
        </div>
        
        <button type="submit" class="bg-black text-white px-6 py-2 rounded hover:bg-gray-800">
            Track Order
        </button>
    </form>
</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>