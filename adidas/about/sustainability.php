<?php
$page_title = "Press";
require_once __DIR__ . '/../includes/header.php';
require_once __DIR__ . '/../includes/video-header.php';

videoHeader([
    'title' => 'Join Our Team',
    'subtitle' => 'Shape the future of sport with us',
    'video' => 'careers-bg.mp4',
    'cta_text' => 'View Openings',
    'cta_link' => '#job-listings'
]);
?>

<main class="container mx-auto px-4 py-12">
    <section class="max-w-4xl mx-auto">
        <h1 class="text-4xl font-bold mb-12 text-center">Our Sustainability Commitment</h1>
        
        <div class="mb-16">
            <div class="bg-green-50 p-8 rounded-xl mb-8">
                <h2 class="text-2xl font-semibold mb-4 text-center">End Plastic Waste</h2>
                <p class="text-center max-w-3xl mx-auto">We're committed to ending plastic waste by using recycled materials in our products and processes.</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8 mb-8">
                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-green-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-8 h-8 text-green-600">...</svg>
                    </div>
                    <h3 class="font-semibold mb-2">Recycled Materials</h3>
                    <p class="text-sm">60% of our products now contain recycled materials</p>
                </div>
                <!-- More stats -->
            </div>
        </div>

        <div class="mb-16">
            <h2 class="text-2xl font-semibold mb-8 text-center">Our Progress</h2>
            <div id="sustainability-chart" class="h-64"></div>
        </div>

        <div class="bg-gray-50 p-8 rounded-xl">
            <h2 class="text-2xl font-semibold mb-4 text-center">Join Our Efforts</h2>
            <p class="text-center mb-6">Learn how you can contribute to a more sustainable future</p>
            <div class="flex justify-center gap-4">
                <button class="bg-black text-white px-6 py-2 rounded">Learn More</button>
                <button class="border border-black px-6 py-2 rounded">Take Action</button>
            </div>
        </div>
    </section>
</main>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const ctx = document.getElementById('sustainability-chart').getContext('2d');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['2018', '2019', '2020', '2021', '2022'],
            datasets: [{
                label: 'Products with recycled materials (%)',
                data: [25, 35, 45, 55, 60],
                backgroundColor: '#000000'
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                    max: 100
                }
            }
        }
    });
});
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>