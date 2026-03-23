<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Wishlist | Streetline Supply</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="icon" type="image/png" href="<?= base_url('images/logo.png') ?>">
</head>

<body class="bg-black font-sans text-white">

    <?= view('components/header', [
        'brandTitle' => 'Streetline Supply',
        'brandTagline' => 'Skate gear for real riders.',
        'logo' => base_url('images/logo.png'),
        'nav' => [
            ['label' => 'Home', 'href' => base_url('/')],
            ['label' => 'Shop', 'href' => base_url('shop')],
            ['label' => 'Roadmap', 'href' => base_url('roadmap')],
            ['label' => 'Wishlist', 'href' => base_url('wishlist'), 'active' => true],
        ],
        'cta' => ['label' => 'Cart (0)', 'href' => base_url('cart')],
    ]) ?>

    <main class="mx-auto px-6 py-12 max-w-7xl">
        <h1 class="mb-8 font-bold text-3xl">❤️ My Wishlist</h1>

        <?php if (session()->getFlashdata('success')): ?>
            <div class="bg-green-600 mb-6 px-4 py-3 rounded-lg text-white">
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php endif; ?>

        <?php if (!empty($wishlist)): ?>
            <section class="gap-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
                <?php foreach ($wishlist as $item): ?>
                    <div class="bg-gray-900 border border-gray-700 rounded-xl overflow-hidden">
                        <img src="<?= base_url($item['image']) ?>"
                            class="w-full h-56 object-cover"
                            alt="<?= esc($item['name']) ?>">

                        <div class="p-4">
                            <h3 class="font-bold text-lg"><?= esc($item['name']) ?></h3>
                            <p class="mt-1 font-semibold text-green-400">$<?= esc($item['price']) ?></p>

                            <div class="flex flex-wrap gap-2 mt-3">
                                <a href="<?= base_url('product/' . $item['id']) ?>"
                                    class="hover:bg-red-600 px-3 py-1 border border-red-600 rounded text-red-600 hover:text-white text-sm">
                                    View
                                </a>

                                <a href="<?= base_url('wishlist/remove/' . $item['id']) ?>"
                                    class="bg-red-600 hover:bg-red-700 px-3 py-1 rounded text-sm">
                                    Remove
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </section>
        <?php else: ?>
            <div class="bg-gray-900 p-6 border border-gray-700 rounded-xl">
                <p class="text-gray-300">Your wishlist is empty.</p>
                <a href="<?= base_url('shop') ?>"
                    class="inline-block hover:bg-red-600 mt-4 px-4 py-2 border border-red-600 rounded text-red-600 hover:text-white">
                    Go to Shop
                </a>
            </div>
        <?php endif; ?>
    </main>

    <?= view('components/footer', [
        'brandTitle' => 'Streetline Supply Co.',
        'tagline' => 'Skate gear for real riders.',
        'logo' => base_url('images/logo.png'),
    ]) ?>

</body>

</html>