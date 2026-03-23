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

    <!-- Header -->
    <?= view('components/header', [
        'brandTitle' => 'Streetline Supply',
        'brandTagline' => 'Skate gear for real riders.',
        'logo' => base_url('images/logo.png'),
        'nav' => [
            ['label' => 'Home', 'href' => base_url('/')],
            ['label' => 'Shop', 'href' => base_url('shop')],
        ],
        'cta' => ['label' => 'Cart', 'href' => base_url('cart')],
    ]) ?>

    <!-- Product Section -->
    <main class="mx-auto px-6 py-16 max-w-6xl">

        <div class="gap-10 grid grid-cols-1 md:grid-cols-2">

            <!-- Image -->
            <div class="bg-[#1E1E1E] p-6 rounded-xl">
                <img src="<?= base_url($product['image']) ?>
                " class="w-full h-56 object-cover">
            </div>

            <!-- Details -->
            <div>

                <h1 class="font-bebas text-5xl tracking-wide">
                    <?= $product['name'] ?>
                </h1>

                <p class="mt-4 font-semibold text-vermillion text-2xl">
                    $<?= $product['price'] ?>
                </p>

                <p class="mt-6 text-gray-300">
                    High-quality Streetline Supply product built for durability and style. Perfect for real skaters who want performance and attitude.
                </p>

                <div class="flex gap-4 mt-8">

                    <!-- Add to Cart -->
                    <form action="<?= base_url('cart/add') ?>" method="POST">
                        <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
                        <input type="hidden" name="quantity" value="1">
                        <button type="submit" class="bg-vermillion hover:opacity-90 px-6 py-3 rounded-lg font-semibold">
                            Add to Cart
                        </button>
                    </form>

                    <!-- Back -->
                    <a href="<?= base_url('shop') ?>"
                        class="hover:bg-vermillion px-6 py-3 border border-vermillion rounded-lg text-vermillion hover:text-white">
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