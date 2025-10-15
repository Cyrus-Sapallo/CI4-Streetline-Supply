<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Streetline Supply Store</title>

    <!-- Tailwind CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <link rel="icon" type="image/png" href="<?= base_url('images/logo.png') ?>">
</head>

<body class="bg-black font-sans text-white">

    <!-- ✅ Header -->
    <?= view('components/header', [
        'brandTitle' => 'Streetline Supply',
        'brandTagline' => 'Skate gear for real riders.',
        'logo' => base_url('images/logo.png'),
        'nav' => [
            ['label' => 'Home', 'href' => base_url('/'), 'active' => true],
            ['label' => 'Roadmap', 'href' => base_url('roadmap')],
            ['label' => 'Mood Board', 'href' => base_url('moodboard')],
        ],
        'cta' => ['label' => 'Shop Now', 'href' => base_url('shop')],
    ]) ?>

    <!-- ✅ Main Content -->
    <main class="mx-auto px-6 py-12 max-w-6xl">

        <!-- 🛹 Hero Section -->
        <section class="items-center gap-8 grid grid-cols-1 md:grid-cols-2">
            <div class="order-2 md:order-1">
                <h1 class="font-extrabold text-4xl md:text-5xl leading-tight">
                    Streetline Supply Store — Urban Culture Starts Here
                </h1>
                <p class="mt-4 max-w-xl text-gray-300">
                    We live and breathe street culture. Every piece tells a story of rebellion and self-expression.
                </p>

                <div class="flex flex-wrap gap-3 mt-6">
                    <a href="#" class="hover:bg-vermillion px-5 py-2 border border-vermillion rounded-lg text-vermillion hover:text-white">
                        Request Assistance
                    </a>
                </div>

                <div class="mt-6">
                    <div class="flex items-center gap-3 bg-black px-4 py-3 border border-gray-600 rounded-full">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8" />
                        </svg>
                        <div>
                            <div class="font-semibold text-sm">Speak to our Crew</div>
                            <div class="text-gray-300 text-sm">Call (555) 123-4567</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="order-1 md:order-2">
                <div class="shadow-lg rounded-2xl overflow-hidden">
                    <img src="<?= base_url('images/HarajukuStreetwear.jpg') ?>" alt="harajuku streetwear" class="w-full">
                </div>
            </div>
        </section>

        <!-- 💥 Features -->
        <section class="gap-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 mt-12">
            <?php
            $features = [
                [
                    'image' => base_url('images/snd.jpg'),
                    'title' => 'Skate and Destroy',
                    'excerpt' => 'Offers durable skateboard parts and accessories built for every ride.',
                    'href' => base_url('shop/skate-destroy')
                ],
                [
                    'image' => base_url('images/hs.jpg'),
                    'title' => 'Hoodside',
                    'excerpt' => 'Delivers streetwear made for skaters, blending comfort, style, and attitude.',
                    'href' => base_url('shop/hoodside')
                ],
                [
                    'image' => base_url('images/access.jpg'),
                    'title' => 'Grind Supply',
                    'excerpt' => 'Packs the essential gear and tools every skater needs to keep rolling.',
                    'href' => base_url('shop/grind-supply')
                ],
            ];

            foreach ($features as $feature):
                echo view('components/cards/card_product', $feature);
            endforeach;
            ?>




        </section>
        <section class="gap-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 mt-16">
            <?= view('components/cards/card_feature', [
                'icon' => '⚡',
                'title' => 'Fast Shipping',
                'excerpt' => 'We deliver nationwide in record time.'
            ]) ?>

            <?= view('components/cards/card_feature', [
                'icon' => '🧢',
                'title' => 'Quality Gear',
                'excerpt' => 'Every piece is built for real riders and tough sessions.'
            ]) ?>

            <?= view('components/cards/card_feature', [
                'icon' => '💬',
                'title' => '24/7 Support',
                'excerpt' => 'Hit us up anytime — our crew always has your back.'
            ]) ?>
        </section>


        <!-- 📦 Package Summary -->
        <section class="bg-black mt-12 p-6 border border-vermillion-dark rounded-lg">
            <div class="md:flex md:justify-between md:items-center gap-8">
                <div>
                    <h3 class="font-bold text-vermillion text-3xl uppercase tracking-wider">Skate Starter Pack</h3>
                    <p class="mt-2 text-gray-300">A solid set of essentials to get you rolling with confidence.</p>
                    <ul class="space-y-2 mt-4 text-gray-100 list-disc list-inside">
                        <li>Durable deck for everyday sessions</li>
                        <li>Reliable trucks and smooth wheels</li>
                        <li>Basic tools and grip for easy setup</li>
                    </ul>
                </div>
                <div class="flex flex-col items-start md:items-end mt-6 md:mt-0 md:w-64">
                    <div class="text-gray-400 text-sm">Starting from</div>
                    <div class="mt-1 mb-4 font-bold text-green-500 text-4xl">$100</div>
                    <a href="#" class="bg-vermillion hover:bg-vermillion-dark px-5 py-3 rounded-lg font-bold text-white">
                        Get an Instant Quote
                    </a>
                </div>
            </div>
        </section>

        <!-- 🧭 Steps -->
        <section class="mt-12">
            <h3 class="mb-6 font-bold text-vermillion text-3xl uppercase tracking-wider">
                How We Keep You on Deck
            </h3>
            <div class="gap-6 grid grid-cols-1 md:grid-cols-4">
                <?php
                $steps = ['You Spot It', 'We Bag It', 'It Ships', 'You Shred'];
                foreach ($steps as $step): ?>
                    <div class="bg-gray-900 p-6 border-2 border-vermillion rounded-lg text-center">
                        <div class="font-bold text-vermillion text-xl uppercase"><?= $step ?></div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- ✅ Footer -->
        <?= view('components/footer', [
            'brandTitle' => 'Streetline Supply Co.',
            'tagline' => 'Skate gear for real riders.',
            'logo' => base_url('images/logo.png'),
        ]) ?>

</body>