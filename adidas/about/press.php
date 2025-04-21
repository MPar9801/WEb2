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
    <section class="max-w-6xl mx-auto">
        <h1 class="text-4xl font-bold mb-12 text-center">Press Center</h1>
        
        <div class="grid md:grid-cols-3 gap-8 mb-16">
            <div class="bg-gray-50 p-6 rounded-xl">
                <h2 class="text-xl font-semibold mb-4">Media Contacts</h2>
                <address class="not-italic">
                    <p class="font-medium">Global Press Office</p>
                    <p>press@adidas.com</p>
                    <p>+49 123 456 7890</p>
                </address>
            </div>
            
            <div class="md:col-span-2">
                <h2 class="text-xl font-semibold mb-4">Latest News</h2>
                <div id="press-releases" class="space-y-6">
                    <!-- News will be loaded via JavaScript -->
                </div>
            </div>
        </div>

        <div class="bg-black text-white p-8 rounded-xl">
            <h2 class="text-2xl font-semibold mb-4 text-center">Media Resources</h2>
            <div class="grid md:grid-cols-3 gap-6 text-center">
                <a href="#" class="block p-4 hover:bg-gray-800 rounded transition">
                    <svg class="w-8 h-8 mx-auto mb-2">...</svg>
                    <span>Brand Assets</span>
                </a>
                <!-- More resources -->
            </div>
        </div>
    </section>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    fetch('../api/press-releases.php')
        .then(response => response.json())
        .then(releases => {
            const container = document.getElementById('press-releases');
            releases.forEach(release => {
                container.innerHTML += `
                    <article class="border-b pb-6">
                        <h3 class="font-bold text-lg">${release.title}</h3>
                        <time class="text-sm text-gray-500">${release.date}</time>
                        <p class="mt-2">${release.excerpt}</p>
                        <a href="${release.link}" class="inline-block mt-2 text-black font-medium">Read More</a>
                    </article>
                `;
            });
        });
});
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>