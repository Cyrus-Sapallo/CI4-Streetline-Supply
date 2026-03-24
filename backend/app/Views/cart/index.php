<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Shopping Cart - Streetline Supply</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <style>
        .text-vermillion {
            color: #D64045;
        }

        .bg-vermillion {
            background-color: #D64045;
        }

        .hover\:bg-vermillion-dark:hover {
            background-color: #B23035;
        }

        .border-vermillion {
            border-color: #D64045;
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
            ['label' => 'Shop', 'href' => base_url('shop')],
            ['label' => 'Cart', 'href' => base_url('cart'), 'active' => true],
        ],
        'cta' => ['label' => 'Continue Shopping', 'href' => base_url('shop')],
    ]) ?>

    <!-- Main Content -->
    <main class="mx-auto px-6 py-12 max-w-6xl min-h-screen">
        <h1 class="mb-10 font-bold text-vermillion text-4xl uppercase tracking-wider">Your Cart</h1>

        <?php if (empty($cart)): ?>
            <div class="bg-gray-900 p-8 border border-gray-800 rounded-lg text-center">
                <p class="mb-6 text-gray-400 text-xl">Your cart is currently empty.</p>
                <a href="<?= base_url('shop') ?>" class="inline-block bg-vermillion hover:bg-vermillion-dark px-6 py-3 rounded font-bold text-white transition">
                    Start Shopping
                </a>
            </div>
        <?php else: ?>
            <div class="flex lg:flex-row flex-col gap-8">
                <!-- Cart Items -->
                <div class="lg:w-2/3">
                    <div class="bg-gray-900 border border-gray-800 rounded-lg overflow-hidden">
                        <table class="w-full text-left">
                            <thead class="bg-gray-800 border-gray-700 border-b">
                                <tr>
                                    <th class="p-4 font-semibold text-gray-300">Product</th>
                                    <th class="p-4 font-semibold text-gray-300">Price</th>
                                    <th class="p-4 font-semibold text-gray-300">Quantity</th>
                                    <th class="p-4 font-semibold text-gray-300 text-right">Total</th>
                                    <th class="p-4"></th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-800">
                                <?php foreach ($cart as $item): ?>
                                    <tr>
                                        <td class="p-4">
                                            <div class="flex items-center gap-4">
                                                <img src="<?= base_url($item['image']) ?>" alt="<?= esc($item['name']) ?>" class="rounded w-16 h-16 object-cover">
                                                <span class="font-semibold"><?= esc($item['name']) ?></span>
                                            </div>
                                        </td>
                                        <td class="p-4 text-gray-300">$<?= number_format($item['price'], 2) ?></td>
                                        <td class="p-4">
                                            <form action="<?= base_url('cart/update') ?>" method="post" class="flex items-center gap-2">
                                                <?= csrf_field() ?>
                                                <input type="hidden" name="product_id" value="<?= $item['id'] ?>" />
                                                <input type="number" name="quantity" value="<?= $item['quantity'] ?>" min="1"
                                                    class="bg-black py-1 border border-gray-700 rounded w-16 text-white text-center" />
                                                <button type="submit" class="bg-gray-700 hover:bg-gray-600 px-2 py-1 rounded text-white text-xs">
                                                    Update
                                                </button>
                                            </form>
                                        </td>
                                        <td class="p-4 font-semibold text-green-400 text-right">
                                            $<?= number_format($item['price'] * $item['quantity'], 2) ?>
                                        </td>
                                        <td class="p-4 text-right">
                                            <form action="<?= base_url('cart/remove') ?>" method="post">
                                                <?= csrf_field() ?>
                                                <input type="hidden" name="product_id" value="<?= $item['id'] ?>">
                                                <button type="submit" class="text-red-500 hover:text-red-400" title="Remove Item">
                                                    <!-- svg icon here -->
                                                    <svg class="inline w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Order Summary -->
                <div class="lg:w-1/3">
                    <div class="top-6 sticky bg-gray-900 p-6 border border-gray-800 rounded-lg">
                        <h2 class="mb-6 pb-4 border-gray-700 border-b font-bold text-2xl">Order Summary</h2>

                        <div class="flex justify-between mb-4 text-gray-300">
                            <span>Subtotal</span>
                            <span>$<?= number_format($subtotal, 2) ?></span>
                        </div>

                        <div class="flex justify-between mb-4 text-gray-300">
                            <span>Shipping</span>
                            <span>$<?= number_format($shipping, 2) ?></span>
                        </div>

                        <div class="flex justify-between items-center mb-6 pt-4 border-gray-700 border-t">
                            <span class="font-bold text-xl">Total</span>
                            <span class="font-bold text-green-500 text-2xl">$<?= number_format($total, 2) ?></span>
                        </div>

                        <a href="<?= base_url('checkout') ?>" class="block bg-vermillion hover:bg-vermillion-dark px-4 py-3 rounded w-full font-bold text-white text-center transition">
                            Proceed to Checkout
                        </a>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </main>

    <!-- Footer -->
    <?= view('components/footer', [
        'brandTitle' => 'Streetline Supply Co.',
        'tagline' => 'Skate gear for real riders.',
        'logo' => base_url('images/logo.png'),
    ]) ?>
</body>

</html>