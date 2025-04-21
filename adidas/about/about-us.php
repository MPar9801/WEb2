<?php
$page_title = "About Adidas";
require_once __DIR__ . '/../includes/header.php';
require_once __DIR__ . '/../includes/video-header.php';

videoHeader([
    'title' => 'Our Story',
    'subtitle' => 'Through sport, we have the power to change lives',
    'video' => 'about-bg.mp4',
    'cta_text' => 'Discover More',
    'cta_link' => '#our-mission'
]);
?>




<main class="container mx-auto px-4 py-16" id="our-mission">

    <section class="max-w-4xl mx-auto">
        <h1 class="text-4xl font-bold mb-8 text-center">Our Story</h1>
        
        <div class="grid md:grid-cols-2 gap-12 items-center mb-16">
            <div>
                <h2 class="text-2xl font-semibold mb-4">Who We Are</h2>
                <p class="text-lg leading-relaxed">Adidas is a global leader in the sporting goods industry, offering a wide range of products from footwear and apparel to accessories for sports and lifestyle.</p>
            </div>
            <div class="h-64 bg-gray-100 rounded-lg overflow-hidden">
                <img src="../assets/images/about-team.jpg" alt="Adidas team" class="w-full h-full object-cover">
            </div>
        </div>

        <div class="bg-gray-50 p-8 rounded-xl mb-16">
            <h2 class="text-2xl font-semibold mb-6 text-center">Our Mission</h2>
            <p class="text-center text-lg max-w-3xl mx-auto">"Through sport, we have the power to change lives. Sports keep us fit. They teach us teamwork. They help us to set goals and push our limits."</p>
        </div>

        <div id="history-timeline" class="mb-16">
            <h2 class="text-2xl font-semibold mb-8 text-center">Our History</h2>
            <!-- Timeline will be loaded via JavaScript -->
            <div class="timeline-container"></div>
        </div>
    </section>
</main>
<script>
// Load timeline data
document.addEventListener('DOMContentLoaded', function() {
    const timelineData = [
        { year: "1949", event: "Adidas founded by Adolf Dassler" },
        { year: "1954", event: "Revolutionary screw-in studs help Germany win World Cup" },
        { year: "1970", event: "Official match ball supplier for FIFA World Cup" },
        { year: "1980s", event: "Expansion into apparel and accessories" },
        { year: "2005", event: "Acquisition of Reebok" }
    ];

    const container = document.querySelector('.timeline-container');
    timelineData.forEach(item => {
        container.innerHTML += `
            <div class="timeline-item mb-8 pl-8 border-l-2 border-black relative">
                <div class="absolute -left-2.5 top-0 w-4 h-4 bg-black rounded-full"></div>
                <h3 class="font-bold text-lg">${item.year}</h3>
                <p class="text-gray-700">${item.event}</p>
            </div>
        `;
    });
});
</script>
<?php require_once __DIR__ . '/../includes/footer.php'; ?>