<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Streetline Supply Moodboard</title>

    <!-- TailwindCSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="<?= base_url('images/logo.png') ?>">

    <!-- Custom Fonts & Theme -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter:wght@400;600;800&display=swap');

        body {
            font-family: 'Inter', sans-serif;
            background-color: #000;
            color: #fff;
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
            ['label' => 'Roadmap', 'href' => base_url('roadmap')],
            ['label' => 'Mood Board', 'href' => base_url('moodboard')],
        ],
        'cta' => ['label' => 'Shop Now', 'href' => base_url('shop')],
    ]) ?>

    <!-- ✅ Main Content -->
    <main class="space-y-16 mx-auto px-6 py-12 max-w-6xl">

        <!-- 🎨 COLOR PALETTE -->
        <section>
            <h2 class="mb-6 font-extrabold text-vermillion text-3xl uppercase tracking-wider">🎨 Color Palette</h2>
            <div class="gap-6 grid grid-cols-1 sm:grid-cols-3">
                <div class="flex justify-center items-center bg-[#D64045] rounded-lg h-24 font-semibold">Vermillion</div>
                <div class="flex justify-center items-center bg-[#1E1E1E] rounded-lg h-24 font-semibold text-gray-200">Street Black</div>
                <div class="flex justify-center items-center bg-[#F5F5F5] rounded-lg h-24 font-semibold text-gray-800">Concrete White</div>
            </div>
        </section>

        <!-- 🔠 TYPOGRAPHY -->
        <section>
            <h2 class="mb-6 font-extrabold text-vermillion text-3xl uppercase tracking-wider">🔠 Typography</h2>
            <p class="text-xl">Inter — used for body and general text</p>
            <p class="mt-4 font-bebas text-4xl tracking-wide">Bebas Neue — used for titles and branding</p>
        </section>

        <!-- 🔘 BUTTONS -->
        <section>
            <h2 class="mb-6 font-extrabold text-vermillion text-3xl uppercase tracking-wider">🔘 Buttons</h2>
            <div class="flex flex-wrap gap-4">





            </div>
        </section>

        <!-- 📦 CARDS -->
        <section>
            <h2 class="mb-6 font-extrabold text-vermillion text-3xl uppercase tracking-wider">📦 Cards</h2>

            <!-- Product Cards -->
            <div class="gap-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
                <?= view('components/cards/card_product', [
                    'image' => base_url('images/snd.jpg'),
                    'title' => 'Skate and Destroy',
                    'excerpt' => 'Durable skateboard parts and accessories built for every ride.',
                    'href' => base_url('shop/skate-destroy')
                ]) ?>

                <?= view('components/cards/card_product', [
                    'image' => base_url('images/hs.jpg'),
                    'title' => 'Hoodside',
                    'excerpt' => 'Streetwear for skaters — comfort, style, and attitude.',
                    'href' => base_url('shop/hoodside')
                ]) ?>

                <?= view('components/cards/card_product', [
                    'image' => base_url('images/access.jpg'),
                    'title' => 'Grind Supply',
                    'excerpt' => 'Essential tools and gear every skater needs.',
                    'href' => base_url('shop/grind-supply')
                ]) ?>
            </div>

            <!-- Feature Cards -->
            <div class="gap-6 grid grid-cols-1 md:grid-cols-3 mt-12">
                <?= view('components/cards/card_feature', [
                    'icon' => '⚡',
                    'title' => 'Fast Shipping',
                    'excerpt' => 'Nationwide delivery with speed and reliability.'
                ]) ?>

                <?= view('components/cards/card_feature', [
                    'icon' => '🛹',
                    'title' => 'Quality Gear',
                    'excerpt' => 'Tested and trusted by real skaters.'
                ]) ?>

                <?= view('components/cards/card_feature', [
                    'icon' => '💬',
                    'title' => '24/7 Support',
                    'excerpt' => 'Our crew always has your back.'
                ]) ?>
            </div>





















            <!-- Team Cards -->
            <div class="gap-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 mt-12">
                <?= view('components/cards/card_team', [
                    'image' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330',
                    'name' => 'Leslie Alexander',
                    'role' => 'Founder / CEO'
                ]) ?>

                <?= view('components/cards/card_team', [
                    'image' => 'https://images.unsplash.com/photo-1519244703995-f4e0f30006d5',
                    'name' => 'Michael Foster',
                    'role' => 'Co-Founder / CTO'
                ]) ?>

                <?= view('components/cards/card_team', [
                    'image' => 'https://images.unsplash.com/photo-1506794778202-cad84cf45f1d',
                    'name' => 'Dries Vincent',
                    'role' => 'Creative Lead'
                ]) ?>
            </div>
        </section>


        <!-- 🏁 LOGOS -->
        <section>
            <h2 class="mb-6 font-extrabold text-vermillion text-3xl uppercase tracking-wider">🏁 Logos</h2>
            <div class="flex flex-wrap gap-10">
                <?php
                $logos = [
                    ['label' => 'Circle Logo', 'shape' => 'rounded-full'],
                    ['label' => 'Square Logo', 'shape' => 'rounded-lg']
                ];
                foreach ($logos as $logo): ?>
                    <div class="flex flex-col items-center">
                        <div class="flex items-center justify-center bg-white <?= $logo['shape'] ?> w-32 h-32">
                            <img src="<?= base_url('images/logo.png') ?>" alt="<?= $logo['label'] ?>" class="w-20 h-20 object-contain">
                        </div>
                        <p class="mt-3 text-gray-300 text-sm"><?= $logo['label'] ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

    </main>

    <!-- ✅ Footer -->
    <?= view('components/footer', [
        'brandTitle' => 'Streetline Supply Co.',
        'tagline' => 'Skate gear for real riders.',
        'logo' => base_url('images/logo.png'),
    ]) ?>

</body>