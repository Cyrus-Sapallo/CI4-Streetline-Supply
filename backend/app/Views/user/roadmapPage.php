<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roadmap | Streetline Supply</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="<?= base_url('images/logo.png') ?>">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter:wght@400;600;800&display=swap');

        body {
            font-family: 'Inter', sans-serif;
        }

        .text-vermillion {
            color: #D64045;
        }

        .bg-vermillion {
            background-color: #D64045;
        }

        .border-vermillion {
            border-color: #D64045;
        }

        .font-bebas {
            font-family: 'Bebas Neue', cursive;
        }
    </style>
</head>

<body class="bg-black font-sans text-white">


    <!-- ✅ Header -->
    <?= view('components/header', [
        'brandTitle' => 'Streetline Supply',
        'brandTagline' => 'Skate gear for real riders.',
        'logo' => base_url('images/logo.png'),
        'nav' => [
            ['label' => 'Home', 'href' => base_url('/')],
            ['label' => 'Roadmap', 'href' => base_url('roadmap'), 'active' => true],
            ['label' => 'Mood Board', 'href' => base_url('moodboard')],
        ],
        'cta' => ['label' => 'Shop Now', 'href' => base_url('shop')],
    ]) ?>

    <!-- ✅ Roadmap Timeline -->
    <main class="px-6 md:px-12 py-20">
        <div class="mx-auto max-w-5xl">
            <h1 class="mb-12 font-extrabold text-vermillion text-4xl text-center">Our Roadmap</h1>

            <div class="relative pl-6 border-gray-700 border-l">
                <!-- Phase Items -->
                <?php
                $phases = [
                    ['title' => 'Phase 1: Foundation (Q1 2025)', 'desc' => 'Launched the official Streetline Supply Store and established our first local skatewear line. Focused on premium-quality materials and authentic Manila street culture design.'],
                    ['title' => 'Phase 2: Local Collaborations (Q2 2026)', 'desc' => 'Partnered with local skate crews, graffiti artists, and musicians to release limited collab collections and host pop-up events celebrating street art and skating.'],
                    ['title' => 'Phase 3: Skate Community Buildup (Q3 2026)', 'desc' => 'Introduced sponsorships for local skaters, community skate jams, and Streetline Sessions — a monthly event blending music, skating, and fashion.'],
                    ['title' => 'Phase 4: Digital Presence & Merch Drops (Q1 2027)', 'desc' => 'Expanded our online store with exclusive seasonal drops, digital lookbooks, and social media campaigns featuring local talent and street culture stories.'],
                    ['title' => 'Phase 5: Expansion (Future)', 'desc' => 'Plan to open flagship stores across the Philippines and collaborate with international streetwear brands while maintaining our authentic local roots.']
                ];
                ?>

                <?php foreach ($phases as $phase): ?>
                    <div class="relative mb-12">
                        <div class="-left-1.5 absolute bg-vermillion border border-white rounded-full w-3 h-3"></div>
                        <h2 class="mb-2 font-semibold text-vermillion text-2xl"><?= esc($phase['title']) ?></h2>
                        <p class="text-gray-300"><?= esc($phase['desc']) ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>




</body>