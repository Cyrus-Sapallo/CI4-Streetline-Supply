<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Checkout - Streetline Supply</title>
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
            ['label' => 'Shop', 'href' => base_url('shop')],
            ['label' => 'Cart', 'href' => base_url('cart')],
        ],
        'cta' => ['label' => 'Back to Cart', 'href' => base_url('cart')],
    ]) ?>

    <!-- Main Content -->
    <main class="mx-auto px-6 py-12 max-w-4xl min-h-screen">
        <h1 class="font-bold text-4xl text-vermillion uppercase tracking-wider mb-10">Checkout</h1>

        <form action="<?= base_url('checkout/process') ?>" method="post" id="checkoutForm">
            <?= csrf_field() ?>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <!-- Customer Details -->
                <div class="space-y-6">
                    <h2 class="text-2xl font-bold border-b border-gray-800 pb-2">Customer Information</h2>
                    
                    <?php if (session()->getFlashdata('errors')): ?>
                        <div class="bg-red-900 border border-red-800 text-red-100 p-4 rounded mb-6">
                            <ul>
                                <?php foreach (session()->getFlashdata('errors') as $error): ?>
                                    <li>- <?= esc($error) ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <div>
                        <label class="block text-gray-400 mb-2">Full Name</label>
                        <input type="text" name="customer_name" value="<?= old('customer_name') ?>" required class="w-full bg-gray-900 border border-gray-800 rounded p-3 text-white focus:outline-none focus:border-vermillion">
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-gray-400 mb-2">Email Address</label>
                            <input type="email" name="email" value="<?= old('email') ?>" required class="w-full bg-gray-900 border border-gray-800 rounded p-3 text-white focus:outline-none focus:border-vermillion">
                        </div>
                        <div>
                            <label class="block text-gray-400 mb-2">Phone Number</label>
                            <input type="text" name="phone" value="<?= old('phone') ?>" required class="w-full bg-gray-900 border border-gray-800 rounded p-3 text-white focus:outline-none focus:border-vermillion">
                        </div>
                    </div>

                    <div>
                        <label class="block text-gray-400 mb-2">Shipping Address</label>
                        <textarea name="address" rows="3" required class="w-full bg-gray-900 border border-gray-800 rounded p-3 text-white focus:outline-none focus:border-vermillion"><?= old('address') ?></textarea>
                    </div>

                    <h2 class="text-2xl font-bold border-b border-gray-800 pb-2 pt-6">Shipping Option</h2>
                    <div class="space-y-4">
                        <label class="flex items-center p-4 bg-gray-900 border border-gray-800 rounded cursor-pointer hover:border-gray-700">
                            <input type="radio" name="shipping_method" value="delivery" checked class="form-radio text-vermillion h-5 w-5" onchange="updateTotal()">
                            <div class="ml-4">
                                <span class="block font-bold">Standard Delivery ($15.00)</span>
                                <span class="block text-sm text-gray-400">Estimated delivery: 3-5 business days</span>
                            </div>
                        </label>
                        <label class="flex items-center p-4 bg-gray-900 border border-gray-800 rounded cursor-pointer hover:border-gray-700">
                            <input type="radio" name="shipping_method" value="pickup" class="form-radio text-vermillion h-5 w-5" onchange="updateTotal()">
                            <div class="ml-4">
                                <span class="block font-bold">Store Pickup (Free)</span>
                                <span class="block text-sm text-gray-400">Collect from our main branch in 2-4 hours</span>
                            </div>
                        </label>
                    </div>

                    <h2 class="text-2xl font-bold border-b border-gray-800 pb-2 pt-6">Payment Method</h2>
                    <div class="space-y-4">
                        <label class="flex items-center p-4 bg-gray-900 border border-gray-800 rounded cursor-pointer hover:border-gray-700">
                            <input type="radio" name="payment_method" value="cod" checked class="form-radio text-vermillion h-5 w-5">
                            <div class="ml-4">
                                <span class="block font-bold">Cash on Delivery (COD)</span>
                                <span class="block text-sm text-gray-400">Pay when you receive your order</span>
                            </div>
                        </label>
                        <label class="flex items-center p-4 bg-gray-900 border border-gray-800 rounded cursor-pointer hover:border-gray-700">
                            <input type="radio" name="payment_method" value="ewallet" class="form-radio text-vermillion h-5 w-5">
                            <div class="ml-4">
                                <span class="block font-bold">E-wallet (Simulated)</span>
                                <span class="block text-sm text-gray-400">GCash / Maya / PayPal</span>
                            </div>
                        </label>
                    </div>
                </div>

                <!-- Order Summary -->
                <div class="lg:sticky lg:top-6 self-start">
                    <div class="bg-gray-900 border border-gray-800 rounded-lg p-6">
                        <h2 class="font-bold text-2xl mb-6 border-b border-gray-700 pb-4">Order Summary</h2>
                        
                        <div class="divide-y divide-gray-800 mb-6">
                            <?php foreach ($cart as $item): ?>
                                <div class="py-3 flex justify-between items-center">
                                    <div class="flex items-center gap-3">
                                        <div class="bg-gray-800 w-10 h-10 rounded overflow-hidden flex-shrink-0">
                                            <img src="<?= base_url($item['image']) ?>" alt="<?= esc($item['name']) ?>" class="w-full h-full object-cover">
                                        </div>
                                        <div>
                                            <span class="block font-bold text-sm"><?= esc($item['name']) ?></span>
                                            <span class="text-xs text-gray-400">Qty: <?= $item['quantity'] ?></span>
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
                        
                        <div class="border-t border-gray-700 pt-4 mb-6 flex justify-between items-center">
                            <span class="font-bold text-xl">Total</span>
                            <span id="totalDisplay" class="font-bold text-2xl text-green-500">$<?= number_format($subtotal + 15, 2) ?></span>
                        </div>

                        <button type="submit" class="w-full bg-vermillion hover:bg-vermillion-dark text-white font-bold py-4 px-4 rounded transition text-xl uppercase tracking-widest shadow-lg">
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
