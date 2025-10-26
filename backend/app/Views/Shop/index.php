<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop - Streetline Supply</title>

    <!-- TailwindCSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="<?= base_url('images/logo.png') ?>">

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

        .bg-vermillion-dark {
            background-color: #b43539;
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
    <!-- Header -->
    <?= view('components/header', [
        'brandTitle' => 'Streetline Supply',
        'brandTagline' => 'Skate gear for real riders.',
        'logo' => base_url('images/logo.png'),
        'nav' => [
            ['label' => 'Home', 'href' => base_url('/')],
            ['label' => 'Shop', 'href' => base_url('shop'), 'active' => true],
        ],
        'cta' => ['label' => 'Cart', 'href' => base_url('cart')],
    ]) ?>

    <!-- Main Content -->
    <main class="mx-auto px-6 py-12 max-w-6xl">
        <header class="mb-10">
            <h1 class="font-bebas text-vermillion text-5xl tracking-wide">STREETLINE SHOP</h1>
            <p class="mt-2 text-gray-400">Browse our latest skatewear, decks, and accessories.</p>
        </header>

        <!-- Product Grid -->
        <section class="gap-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            <?php foreach ($products as $product): ?>
                <div class="bg-gray-900 shadow hover:shadow-2xl border border-gray-700 rounded-xl overflow-hidden transition-all duration-300">
                    <div class="relative">
                        <img src="<?= base_url('images/' . esc($product['image'])) ?>"
                            alt="<?= esc($product['name']) ?>"
                            class="w-full h-60 object-cover">

                        <?php if (!empty($product['created_at']) && strtotime($product['created_at']) > strtotime('-30 days')): ?>
                            <div class="top-2 right-2 absolute bg-vermillion px-2 py-1 rounded-full font-semibold text-xs">NEW</div>
                        <?php endif; ?>
                    </div>
                    <div class="p-5">
                        <h3 class="font-bebas text-2xl"><?= esc($product['name']) ?></h3>
                        <p class="mt-1 text-gray-400 text-sm line-clamp-2"><?= esc($product['description']) ?></p>
                        <p class="mt-1 text-gray-500 text-sm">Category: <?= esc($product['category']) ?> | Stock: <?= esc($product['stock']) ?></p>
                        <div class="flex justify-between items-center mt-4">
                            <span class="font-bold text-green-400 text-lg">$<?= number_format($product['price'], 2) ?></span>
                            <a href="<?= base_url('shop/' . $product['id']) ?>"
                                class="bg-vermillion hover:bg-vermillion-dark px-4 py-2 rounded-md font-semibold text-white text-sm">
                                View
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </section>

        <!-- CTA Section -->
        <section class="bg-gray-900 mt-16 p-8 border border-vermillion rounded-lg text-center">
            <h2 class="mb-2 font-bebas text-vermillion text-4xl">Ready to Roll?</h2>
            <p class="mb-6 text-gray-300">Get your crew geared up with the latest from Streetline.</p>
            <a href="<?= base_url('cart') ?>" class="bg-vermillion hover:bg-vermillion-dark px-6 py-3 rounded-lg font-bold text-white">
                Go to Cart
            </a>
        </section>
    </main>

    <!-- Footer -->
    <?= view('components/footer', [
        'brandTitle' => 'Streetline Supply Co.',
        'tagline' => 'Skate gear for real riders.',
        'logo' => base_url('images/logo.png'),
    ]) ?>
</body>

</html>