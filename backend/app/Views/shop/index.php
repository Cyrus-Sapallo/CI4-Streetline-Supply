<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Shop - Streetline Supply</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <style>
        .text-vermillion { color: #D64045; }
        .bg-vermillion { background-color: #D64045; }
        .hover\:bg-vermillion-dark:hover { background-color: #B23035; }
        .border-vermillion { border-color: #D64045; }
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
            ['label' => 'Roadmap', 'href' => base_url('roadmap')],
            ['label' => 'Mood Board', 'href' => base_url('moodboard')],
            ['label' => 'Shop', 'href' => base_url('shop'), 'active' => true],
            ['label' => 'Cart', 'href' => base_url('cart')],
        ],
        'cta' => ['label' => 'View Cart', 'href' => base_url('cart')],
    ]) ?>

    <!-- Main Content -->
    <main class="mx-auto px-6 py-12 max-w-6xl min-h-screen">
        <div class="flex justify-between items-center mb-10">
            <h1 class="font-bold text-4xl text-vermillion uppercase tracking-wider">Our Gear</h1>
            <a href="<?= base_url('cart') ?>" class="text-gray-300 hover:text-white underline">View Cart</a>
        </div>

        <?php if (session()->getFlashdata('message')): ?>
            <div class="bg-green-600 text-white p-4 rounded mb-6">
                <?= session()->getFlashdata('message') ?>
            </div>
        <?php endif; ?>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($products as $product): ?>
                <div class="bg-gray-900 border border-gray-800 rounded-lg overflow-hidden relative flex flex-col">
                    <img src="<?= base_url($product['image']) ?>" alt="<?= esc($product['name']) ?>" class="w-full h-64 object-cover">
                    <div class="p-6 flex-1 flex flex-col">
                        <h2 class="font-bold text-xl mb-2"><?= esc($product['name']) ?></h2>
                        <p class="text-gray-400 text-sm mb-4 flex-1"><?= esc($product['excerpt']) ?></p>
                        <div class="flex justify-between items-center mb-6">
                            <span class="text-green-500 font-bold text-2xl">$<?= number_format($product['price'], 2) ?></span>
                        </div>
                        <form action="<?= base_url('cart/add') ?>" method="post" class="mt-auto flex gap-2">
                            <?= csrf_field() ?>
                            <input type="hidden" name="product_id" value="<?= $product['id'] ?>" />
                            <input type="number" name="quantity" value="1" min="1" class="w-16 bg-black border border-gray-700 rounded text-center text-white" />
                            <button type="submit" class="flex-1 bg-vermillion hover:bg-vermillion-dark text-white font-bold py-2 px-4 rounded transition">
                                Add to Cart
                            </button>
                        </form>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>

    <!-- Footer -->
    <?= view('components/footer', [
        'brandTitle' => 'Streetline Supply Co.',
        'tagline' => 'Skate gear for real riders.',
        'logo' => base_url('images/logo.png'),
    ]) ?>
</body>
</html>
