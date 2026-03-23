<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $product['name'] ?> | Streetline Supply</title>

    <script src="https://cdn.tailwindcss.com"></script>

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

<body>

    <?php $wishlistCount = count(session()->get('wishlist') ?? []); ?>

    <!-- Header -->
    <?= view('components/header', [
        'brandTitle' => 'Streetline Supply',
        'brandTagline' => 'Skate gear for real riders.',
        'logo' => base_url('images/logo.png'),
        'nav' => [
            ['label' => 'Home', 'href' => base_url('/')],
            ['label' => 'Shop', 'href' => base_url('shop')],
            ['label' => 'Wishlist (' . $wishlistCount . ')', 'href' => base_url('wishlist')],
        ],
        'cta' => ['label' => 'Cart', 'href' => base_url('cart')],
    ]) ?>

    <!-- Product Section -->
    <main class="mx-auto px-6 py-16 max-w-6xl">

        <?php if (session()->getFlashdata('success')): ?>
            <div class="bg-green-600 mb-6 px-4 py-3 rounded-lg text-white">
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('error')): ?>
            <div class="bg-red-600 mb-6 px-4 py-3 rounded-lg text-white">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>

        <div class="gap-10 grid grid-cols-1 md:grid-cols-2">

            <!-- Image -->
            <div class="bg-[#1E1E1E] p-6 rounded-xl">
                <img src="<?= base_url($product['image']) ?>"
                    class="rounded-lg w-full h-56 object-cover"
                    alt="<?= esc($product['name']) ?>">
            </div>

            <!-- Details -->
            <div>

                <h1 class="font-bebas text-5xl tracking-wide">
                    <?= esc($product['name']) ?>
                </h1>

                <p class="mt-4 font-semibold text-vermillion text-2xl">
                    $<?= esc($product['price']) ?>
                </p>

                <?php if (isset($product['stock']) && $product['stock'] > 0): ?>
                    <p class="mt-2 text-green-400">In Stock (<?= esc($product['stock']) ?>)</p>
                <?php else: ?>
                    <p class="mt-2 text-red-500">Out of Stock</p>
                <?php endif; ?>

                <p class="mt-6 text-gray-300">
                    High-quality Streetline Supply product built for durability and style. Perfect for real skaters who want performance and attitude.
                </p>

                <div class="flex flex-wrap gap-4 mt-8">


                    <!-- Add to Cart -->
                    <form action="<?= base_url('cart/add') ?>" method="POST">
                        <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
                        <input type="hidden" name="quantity" value="1">
                        <button type="submit" class="bg-vermillion hover:opacity-90 px-6 py-3 rounded-lg font-semibold">
                            Add to Cart
                        </button>
                    </form>
                    <?php if (isset($product['stock']) && $product['stock'] > 0): ?>
                        <button class="bg-vermillion hover:opacity-90 px-6 py-3 rounded-lg font-semibold">
                            Add to Cart
                        </button>
                    <?php else: ?>
                        <button class="bg-gray-600 px-6 py-3 rounded-lg font-semibold cursor-not-allowed" disabled>
                            Out of Stock
                        </button>
                    <?php endif; ?>

                    <a href="<?= base_url('wishlist/add/' . $product['id']) ?>"
                        class="hover:bg-vermillion px-6 py-3 border border-vermillion rounded-lg font-semibold text-vermillion hover:text-white">
                        ❤️ Add to Wishlist
                    </a>

                    <a href="<?= base_url('shop') ?>"
                        class="hover:bg-vermillion px-6 py-3 border border-vermillion rounded-lg font-semibold text-vermillion hover:text-white">
                        Back to Shop
                    </a>

                </div>

            </div>

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