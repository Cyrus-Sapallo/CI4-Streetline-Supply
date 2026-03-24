<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Checkout - Streetline Supply</title>
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
            ['label' => 'Cart', 'href' => base_url('cart')],
        ],
        'cta' => ['label' => 'Back to Cart', 'href' => base_url('cart')],
    ]) ?>

    <!-- Main Content -->
    <main class="mx-auto px-6 py-12 max-w-4xl min-h-screen">
        <h1 class="mb-10 font-bold text-vermillion text-4xl uppercase tracking-wider">Checkout</h1>

        <form action="<?= base_url('checkout/process') ?>" method="post" id="checkoutForm">
            <?= csrf_field() ?>
            <div class="gap-12 grid grid-cols-1 md:grid-cols-2">
                <!-- Customer Details -->
                <div class="space-y-6">
                    <h2 class="pb-2 border-gray-800 border-b font-bold text-2xl">Customer Information</h2>

                    <?php if (session()->getFlashdata('errors')): ?>
                        <div class="bg-red-900 mb-6 p-4 border border-red-800 rounded text-red-100">
                            <ul>
                                <?php foreach (session()->getFlashdata('errors') as $error): ?>
                                    <li>- <?= esc($error) ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <div>
                        <label class="block mb-2 text-gray-400">Full Name</label>
                        <input type="text" name="customer_name" value="<?= old('customer_name') ?>" required class="bg-gray-900 p-3 border border-gray-800 focus:border-vermillion rounded focus:outline-none w-full text-white">
                    </div>

                    <div class="gap-4 grid grid-cols-1 md:grid-cols-2">
                        <div>
                            <label class="block mb-2 text-gray-400">Email Address</label>
                            <input type="email" name="email" value="<?= old('email') ?>" required class="bg-gray-900 p-3 border border-gray-800 focus:border-vermillion rounded focus:outline-none w-full text-white">
                        </div>
                        <div>
                            <label class="block mb-2 text-gray-400">Phone Number</label>
                            <input type="text" name="phone" value="<?= old('phone') ?>" required class="bg-gray-900 p-3 border border-gray-800 focus:border-vermillion rounded focus:outline-none w-full text-white">
                        </div>
                    </div>

                    <div>
                        <label class="block mb-2 text-gray-400">Shipping Address</label>
                        <textarea name="address" rows="3" required class="bg-gray-900 p-3 border border-gray-800 focus:border-vermillion rounded focus:outline-none w-full text-white"><?= old('address') ?></textarea>
                    </div>

                    <h2 class="pt-6 pb-2 border-gray-800 border-b font-bold text-2xl">Shipping Option</h2>
                    <div class="space-y-4">
                        <label class="flex items-center bg-gray-900 p-4 border border-gray-800 hover:border-gray-700 rounded cursor-pointer">
                            <input type="radio" name="shipping_method" value="delivery" checked class="w-5 h-5 text-vermillion form-radio" onchange="updateTotal()">
                            <div class="ml-4">
                                <span class="block font-bold">Standard Delivery ($15.00)</span>
                                <span class="block text-gray-400 text-sm">Estimated delivery: 3-5 business days</span>
                            </div>
                        </label>
                        <label class="flex items-center bg-gray-900 p-4 border border-gray-800 hover:border-gray-700 rounded cursor-pointer">
                            <input type="radio" name="shipping_method" value="pickup" class="w-5 h-5 text-vermillion form-radio" onchange="updateTotal()">
                            <div class="ml-4">
                                <span class="block font-bold">Store Pickup (Free)</span>
                                <span class="block text-gray-400 text-sm">Collect from our main branch in 2-4 hours</span>
                            </div>
                        </label>
                    </div>

                    <h2 class="pt-6 pb-2 border-gray-800 border-b font-bold text-2xl">Payment Method</h2>
                    <div class="space-y-4">
                        <label class="flex items-center bg-gray-900 p-4 border border-gray-800 hover:border-gray-700 rounded cursor-pointer">
                            <input type="radio" name="payment_method" value="cod" checked class="w-5 h-5 text-vermillion form-radio">
                            <div class="ml-4">
                                <span class="block font-bold">Cash on Delivery (COD)</span>
                                <span class="block text-gray-400 text-sm">Pay when you receive your order</span>
                            </div>
                        </label>
                        <label class="flex items-center bg-gray-900 p-4 border border-gray-800 hover:border-gray-700 rounded cursor-pointer">
                            <input type="radio" name="payment_method" value="ewallet" class="w-5 h-5 text-vermillion form-radio">
                            <div class="ml-4">
                                <span class="block font-bold">E-wallet (Simulated)</span>
                                <span class="block text-gray-400 text-sm">GCash / Maya / PayPal</span>
                            </div>
                        </label>
                    </div>
                </div>

                <!-- Order Summary -->
                <div class="lg:top-6 lg:sticky self-start">
                    <div class="bg-gray-900 p-6 border border-gray-800 rounded-lg">
                        <h2 class="mb-6 pb-4 border-gray-700 border-b font-bold text-2xl">Order Summary</h2>

                        <div class="mb-6 divide-y divide-gray-800">
                            <?php foreach ($cart as $item): ?>
                                <div class="flex justify-between items-center py-3">
                                    <div class="flex items-center gap-3">
                                        <div class="flex-shrink-0 bg-gray-800 rounded w-10 h-10 overflow-hidden">
                                            <img src="<?= base_url($item['image']) ?>" alt="<?= esc($item['name']) ?>" class="w-full h-full object-cover">
                                        </div>
                                        <div>
                                            <span class="block font-bold text-sm"><?= esc($item['name']) ?></span>
                                            <span class="text-gray-400 text-xs">Qty: <?= $item['quantity'] ?></span>
                                        </div>
                                    </div>
                                    <span class="font-bold">$<?= number_format($item['price'] * $item['quantity'], 2) ?></span>
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <div class="flex justify-between mb-4 text-gray-300">
                            <span>Subtotal</span>
                            <span>$<?= number_format($subtotal, 2) ?></span>
                        </div>

                        <div class="flex justify-between mb-4 text-gray-300">
                            <span>Shipping</span>
                            <span id="shippingDisplay">$15.00</span>
                        </div>

                        <div class="flex justify-between items-center mb-6 pt-4 border-gray-700 border-t">
                            <span class="font-bold text-xl">Total</span>
                            <span id="totalDisplay" class="font-bold text-green-500 text-2xl">$<?= number_format($subtotal + 15, 2) ?></span>
                        </div>

                        <button type="submit" class="bg-vermillion hover:bg-vermillion-dark shadow-lg px-4 py-4 rounded w-full font-bold text-white text-xl uppercase tracking-widest transition">
                            Place Order
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </main>

    <script>
        const subtotal = <?= $subtotal ?>;

        function updateTotal() {
            const shippingMethod = document.querySelector('input[name="shipping_method"]:checked').value;
            const shippingCost = (shippingMethod === 'delivery') ? 15.00 : 0.00;
            const total = subtotal + shippingCost;

            document.getElementById('shippingDisplay').innerText = '$' + shippingCost.toFixed(2);
            document.getElementById('totalDisplay').innerText = '$' + total.toFixed(2);
        }
    </script>

    <!-- Footer -->
    <?= view('components/footer', [
        'brandTitle' => 'Streetline Supply Co.',
        'tagline' => 'Skate gear for real riders.',
        'logo' => base_url('images/logo.png'),
    ]) ?>
</body>

</html>