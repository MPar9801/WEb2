<?php
$page_title = "Shipping Information";
require_once __DIR__ . '/../includes/header.php';
?>

<main class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6">Shipping Options</h1>
    
    <div class="grid md:grid-cols-3 gap-8">
        <div class="border p-6 rounded-lg">
            <h3 class="text-xl font-semibold mb-3">Standard Shipping</h3>
            <p>3-5 business days</p>
            <p class="mt-2">Free on orders over $50</p>
        </div>
        
        <div class="border p-6 rounded-lg">
            <h3 class="text-xl font-semibold mb-3">Express Shipping</h3>
            <p>1-2 business days</p>
            <p class="mt-2">$9.99 flat rate</p>
        </div>
        
        <div class="border p-6 rounded-lg">
            <h3 class="text-xl font-semibold mb-3">International</h3>
            <p>5-10 business days</p>
            <p class="mt-2">Rates vary by country</p>
        </div>
    </div>
</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>