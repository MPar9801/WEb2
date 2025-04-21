<?php
$page_title = "Help Center";
require_once 'includes/header.php';
?>

<div class="max-w-6xl mx-auto px-6 py-12">
    <h1 class="text-3xl font-bold mb-8">Help Center</h1>
    
    <div class="grid md:grid-cols-3 gap-8">
        <!-- Customer Service -->
        <div class="bg-white p-6 rounded shadow">
            <h2 class="text-xl font-semibold mb-4">Customer Service</h2>
            <ul class="space-y-2">
                <li><a href="#" class="text-blue-600 hover:underline">Contact Us</a></li>
                <li><a href="#" class="text-blue-600 hover:underline">Live Chat</a></li>
                <li><a href="#" class="text-blue-600 hover:underline">Email Support</a></li>
                <li><a href="#" class="text-blue-600 hover:underline">Phone Support</a></li>
            </ul>
        </div>
        
        <!-- Orders & Shipping -->
        <div class="bg-white p-6 rounded shadow">
            <h2 class="text-xl font-semibold mb-4">Orders & Shipping</h2>
            <ul class="space-y-2">
                <li><a href="#" class="text-blue-600 hover:underline">Track Your Order</a></li>
                <li><a href="#" class="text-blue-600 hover:underline">Shipping Information</a></li>
                <li><a href="#" class="text-blue-600 hover:underline">Delivery Options</a></li>
                <li><a href="#" class="text-blue-600 hover:underline">International Shipping</a></li>
            </ul>
        </div>
        
        <!-- Returns & Exchanges -->
        <div class="bg-white p-6 rounded shadow">
            <h2 class="text-xl font-semibold mb-4">Returns & Exchanges</h2>
            <ul class="space-y-2">
                <li><a href="#" class="text-blue-600 hover:underline">Return Policy</a></li>
                <li><a href="#" class="text-blue-600 hover:underline">How to Return</a></li>
                <li><a href="#" class="text-blue-600 hover:underline">Exchange Policy</a></li>
                <li><a href="#" class="text-blue-600 hover:underline">Refund Status</a></li>
            </ul>
        </div>
    </div>
    
    <!-- FAQ Section -->
    <div class="mt-12">
        <h2 class="text-2xl font-bold mb-6">Frequently Asked Questions</h2>
        
        <div class="space-y-4">
            <div class="border-b pb-4">
                <button class="faq-toggle flex justify-between items-center w-full text-left">
                    <h3 class="font-semibold">How do I track my order?</h3>
                    <svg class="w-5 h-5 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="faq-content mt-2 hidden">
                    <p class="text-gray-700">Once your order has shipped, you'll receive a confirmation email with a tracking number. You can use this number to track your package on our website or the shipping carrier's website.</p>
                </div>
            </div>
            
            <div class="border-b pb-4">
                <button class="faq-toggle flex justify-between items-center w-full text-left">
                    <h3 class="font-semibold">What is your return policy?</h3>
                    <svg class="w-5 h-5 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="faq-content mt-2 hidden">
                    <p class="text-gray-700">We accept returns within 30 days of purchase. Items must be unworn, in their original condition, and with all tags attached. Sale items are final sale and cannot be returned.</p>
                </div>
            </div>
            
            <div class="border-b pb-4">
                <button class="faq-toggle flex justify-between items-center w-full text-left">
                    <h3 class="font-semibold">How do I change or cancel my order?</h3>
                    <svg class="w-5 h-5 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="faq-content mt-2 hidden">
                    <p class="text-gray-700">If your order hasn't shipped yet, you may be able to cancel or modify it. Please contact our customer service team immediately for assistance.</p>
                </div>
            </div>
            
            <div class="border-b pb-4">
                <button class="faq-toggle flex justify-between items-center w-full text-left">
                    <h3 class="font-semibold">What payment methods do you accept?</h3>
                    <svg class="w-5 h-5 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="faq-content mt-2 hidden">
                    <p class="text-gray-700">We accept all major credit cards (Visa, Mastercard, American Express), PayPal, and select digital wallets. We also offer cash on delivery for select locations.</p>
                </div>
            </div>
            
            <div class="border-b pb-4">
                <button class="faq-toggle flex justify-between items-center w-full text-left">
                    <h3 class="font-semibold">How do I contact customer service?</h3>
                    <svg class="w-5 h-5 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="faq-content mt-2 hidden">
                    <p class="text-gray-700">You can reach our customer service team by phone at 1-800-ADIDAS, by email at support@adidas.com, or through our live chat feature available during business hours.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // FAQ toggle functionality
    document.querySelectorAll('.faq-toggle').forEach(toggle => {
        toggle.addEventListener('click', () => {
            const content = toggle.nextElementSibling;
            const icon = toggle.querySelector('svg');
            
            content.classList.toggle('hidden');
            icon.classList.toggle('rotate-180');
        });
    });
</script>

<?php require_once 'includes/footer.php'; ?>