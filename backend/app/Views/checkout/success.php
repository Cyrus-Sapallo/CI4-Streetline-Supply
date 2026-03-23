<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Order Confirmed - Streetline Supply</title>
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
        ],
        'cta' => ['label' => 'Keep Shopping', 'href' => base_url('shop')],
    ]) ?>

    <!-- Main Content -->
    <main class="mx-auto px-6 py-20 max-w-2xl text-center min-h-screen">
        <div class="mb-10 inline-block bg-green-500 rounded-full p-4">
            <svg class="w-16 h-16 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
            </svg>
        </div>

        <h1 class="font-bold text-5xl text-white uppercase tracking-wider mb-4">Order Confirmed!</h1>
        <p class="text-gray-400 text-xl mb-12">Thank you for your purchase, <?= esc($order['customer_name']) ?>!</p>

        <div class="bg-gray-900 border border-gray-800 rounded-lg p-8 mb-12 text-left">
            <h2 class="font-bold text-2xl mb-6 border-b border-gray-800 pb-4">Order Details</h2>
            
            <div class="space-y-4 text-gray-300">
                <div class="flex justify-between">
                    <span class="text-gray-500">Order ID:</span>
                    <span class="font-bold text-white">#<?= str_pad($order['id'], 6, '0', STR_PAD_LEFT) ?></span>
                </div>
                <div class="flex justify-between">
                    <span class="text-gray-500">Date:</span>
                    <span><?= date('F j, Y, g:i a', strtotime($order['created_at'])) ?></span>
                </div>
                <div class="flex justify-between">
                    <span class="text-gray-500">Payment Method:</span>
                    <span class="uppercase"><?= esc($order['payment_method']) ?></span>
                </div>
                <div class="flex justify-between">
                    <span class="text-gray-500">Shipping:</span>
                    <span class="capitalize"><?= esc($order['shipping_method']) ?> ($<?= number_format($order['shipping_cost'], 2) ?>)</span>
                </div>
                <div class="flex justify-between border-t border-gray-800 pt-4">
                    <span class="font-bold text-xl text-white">Total Amount:</span>
                    <span class="font-bold text-2xl text-green-500">$<?= number_format($order['total_amount'], 2) ?></span>
                </div>
            </div>

            <div class="mt-8 pt-6 border-t border-gray-800">
                <h3 class="font-bold text-lg mb-2">Shipping To:</h3>
                <p class="text-gray-400"><?= esc($order['address']) ?></p>
            </div>
        </div>

        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="<?= base_url('shop') ?>" class="bg-vermillion hover:bg-vermillion-dark text-white font-bold py-4 px-8 rounded transition uppercase tracking-widest">
                Return to Shop
            </a>
            <button onclick="window.print()" class="bg-gray-800 hover:bg-gray-700 text-white font-bold py-4 px-8 rounded transition uppercase tracking-widest">
                Print Receipt
            </button>
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
