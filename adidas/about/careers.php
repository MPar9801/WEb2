<?php
$page_title = "Careers at Adidas";
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
        <h1 class="text-4xl font-bold mb-12 text-center">Join Our Team</h1>
        
        <div class="grid md:grid-cols-2 gap-8 mb-16">
            <div class="bg-gray-50 p-8 rounded-xl">
                <h2 class="text-2xl font-semibold mb-4">Why Work With Us?</h2>
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-green-500 mr-2 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Competitive salaries and benefits</span>
                    </li>
                    <li class="flex items-start">
                        <!-- More list items -->
                    </li>
                </ul>
            </div>
            <div>
                <img src="../assets/images/careers-team.jpg" alt="Adidas team" class="rounded-lg w-full">
            </div>
        </div>

        <div id="job-listings" class="mb-16">
            <h2 class="text-2xl font-semibold mb-8 text-center">Current Openings</h2>
            <div class="space-y-4">
                <!-- Jobs will be loaded via JavaScript -->
            </div>
        </div>

        <div class="bg-black text-white p-8 rounded-xl text-center">
            <h2 class="text-2xl font-semibold mb-4">Can't find your perfect role?</h2>
            <p class="mb-6">Join our talent community to stay updated on new opportunities</p>
            <button id="join-talent-btn" class="bg-white text-black px-6 py-2 rounded font-medium">Join Talent Community</button>
        </div>
    </section>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Load job listings
    fetch('../api/jobs.php')
        .then(response => response.json())
        .then(jobs => {
            const container = document.querySelector('#job-listings .space-y-4');
            jobs.forEach(job => {
                container.innerHTML += `
                    <div class="border p-6 rounded-lg hover:shadow-md transition">
                        <h3 class="font-bold text-xl">${job.title}</h3>
                        <div class="flex flex-wrap gap-4 mt-2 text-sm">
                            <span>${job.location}</span>
                            <span>•</span>
                            <span>${job.type}</span>
                        </div>
                        <button class="mt-4 text-black font-medium underline">View Details</button>
                    </div>
                `;
            });
        });

    // Talent community form
    document.getElementById('join-talent-btn').addEventListener('click', function() {
        // Implement modal or form submission
    });
});
</script>


<?php require_once __DIR__ . '/../includes/footer.php'; ?>