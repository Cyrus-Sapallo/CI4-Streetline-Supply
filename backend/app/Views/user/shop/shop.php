<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Shop | Streetline Supply</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="icon" type="image/png" href="<?= base_url('images/logo.png') ?>">
</head>

<body class="bg-black font-sans text-white">

    <!-- ✅ Header -->
    <?= view('components/header', [
        'brandTitle' => 'Streetline Supply',
        'brandTagline' => 'Skate gear for real riders.',
        'logo' => base_url('images/logo.png'),
        'nav' => [
            ['label' => 'Home', 'href' => base_url('/')],
            ['label' => 'Shop', 'href' => base_url('shop'), 'active' => true],
            ['label' => 'Roadmap', 'href' => base_url('roadmap')],
        ],
        'cta' => ['label' => 'Cart (0)', 'href' => base_url('cart')],
    ]) ?>

    <main class="mx-auto px-6 py-12 max-w-7xl">

        <!-- 🔎 Search + Filters -->
        <section class="flex md:flex-row flex-col md:justify-between md:items-center gap-4 mb-8">

            <input type="text" placeholder="Search products..." id="searchInput"
                class="bg-gray-900 px-4 py-2 border border-gray-700 rounded-lg focus:outline-none w-full md:w-1/3">

            <div class="flex sm:flex-row flex-col gap-3">
                <select id="categoryFilter" class="bg-gray-900 px-3 py-2 border border-gray-700 rounded-lg">
                    <option>All Categories</option>
                    <option>Decks</option>
                    <option>Clothing</option>
                    <option>Accessories</option>
                </select>

                <select id="sortFilter" class="bg-gray-900 px-3 py-2 border border-gray-700 rounded-lg">
                    <option value="">Sort by</option>
                    <option value="low">Price Low to High</option>
                    <option value="high">Price High to Low</option>
                </select>
            </div>

        </section>

        <!-- 🧱 Product Grid -->
        <section class="gap-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3" id="productGrid">

            <?php foreach ($products as $product): ?>

                <div class="bg-gray-900 border border-gray-700 rounded-xl overflow-hidden hover:scale-105 transition duration-200 transform"
                    data-category="<?= esc($product['category']) ?>"
                    data-price="<?= esc($product['price']) ?>">

                    <img src="<?= base_url($product['image']) ?>"
                        class="w-full h-56 object-cover"
                        alt="<?= esc($product['name']) ?>">

                    <div class="p-4">
                        <h3 class="font-bold text-lg"><?= esc($product['name']) ?></h3>
                        <p class="mt-1 font-semibold text-green-400">$<?= esc($product['price']) ?></p>

                        <a href="<?= base_url('product/' . $product['id']) ?>"
                            class="hover:bg-red-600 px-3 py-1 border border-red-600 rounded text-red-600 hover:text-white text-sm">
                            View
                        </a>

                        <button class="bg-red-600 hover:bg-red-700 px-3 py-1 rounded text-sm">
                            Add to Cart
                        </button>
                    </div>

                </div>

            <?php endforeach; ?>

        </section>

    </main>

    <!-- 🧾 Footer -->
    <?= view('components/footer', [
        'brandTitle' => 'Streetline Supply Co.',
        'tagline' => 'Skate gear for real riders.',
        'logo' => base_url('images/logo.png'),
    ]) ?>

    <!-- ✅ Filters JS -->
    <script>
        const categoryFilter = document.getElementById('categoryFilter');
        const sortFilter = document.getElementById('sortFilter');
        const products = document.querySelectorAll('[data-category]');
        const productGrid = document.getElementById('productGrid');

        categoryFilter.addEventListener('change', function() {
            const selected = this.value;

            products.forEach(product => {
                const category = product.getAttribute('data-category');

                if (selected === 'All Categories' || category === selected) {
                    product.style.display = 'block';
                } else {
                    product.style.display = 'none';
                }
            });
        });

        sortFilter.addEventListener('change', function() {
            const value = this.value;
            let productsArray = Array.from(products).filter(p => p.style.display !== 'none');

            productsArray.sort((a, b) => {
                const priceA = parseFloat(a.getAttribute('data-price'));
                const priceB = parseFloat(b.getAttribute('data-price'));

                if (value === 'low') return priceA - priceB;
                if (value === 'high') return priceB - priceA;
                return 0;
            });

            productsArray.forEach(p => productGrid.appendChild(p));
        });
    </script>

</body>

</html>