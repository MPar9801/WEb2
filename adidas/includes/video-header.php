<?php
function videoHeader($options = []) {
    $defaults = [
        'title' => '',
        'subtitle' => '',
        'video' => 'about-bg.mp4',
        'fallback' => 'about-fallback.jpg',
        'cta_text' => 'Explore More',
        'cta_link' => '#main-content'
    ];
    $options = array_merge($defaults, $options);
    ?>
    <style>
    .video-header {
        position: relative;
        height: 80vh;
        overflow: hidden;
    }
    .video-header video {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        min-width: 100%;
        min-height: 100%;
        width: auto;
        height: auto;
        z-index: 1;
        object-fit: cover;
    }
    .video-content {
        position: relative;
        z-index: 2;
        color: white;
        text-shadow: 0 2px 4px rgba(0,0,0,0.5);
    }
    </style>

    <div class="video-header">
        <video autoplay muted loop playsinline>
            <source src="../assets/videos/<?= $options['video'] ?>" type="video/mp4">
            <img src="assets/images/blank.mp4<?= $options['fallback'] ?>" alt="Background">
        </video>
        
        <div class="flex items-center justify-center h-full video-content">
            <div class="text-center px-4 max-w-4xl mx-auto">
                <h1 class="text-5xl md:text-6xl font-bold mb-6"><?= $options['title'] ?></h1>
                <?php if ($options['subtitle']): ?>
                <p class="text-xl md:text-2xl mb-8"><?= $options['subtitle'] ?></p>
                <?php endif; ?>
                <a href="<?= $options['cta_link'] ?>" class="inline-block bg-white text-black px-8 py-3 rounded-full font-bold hover:bg-gray-100 transition">
                    <?= $options['cta_text'] ?>
                </a>
            </div>
        </div>
    </div>
    <?php
}