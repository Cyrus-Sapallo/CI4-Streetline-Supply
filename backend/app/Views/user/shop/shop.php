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

    <!-- 🛍️ Shop Content -->
    <main class="mx-auto px-6 py-12 max-w-7xl">

        <!-- 🔎 Search + Filters -->
        <section class="flex md:flex-row flex-col md:justify-between md:items-center gap-4 mb-8">

            <!-- Search -->
            <input type="text" placeholder="Search products..." id="searchInput"
                class="bg-gray-900 px-4 py-2 border border-gray-700 rounded-lg focus:outline-none w-full md:w-1/3">

            <!-- Filters -->
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

            <?php
            $products = [

                // 🛹 Decks
                [
                    'name' => 'Female Skate Deck Pro',
                    'price' => 120,
                    'image' => '/images/shop/skate1.png',
                    'category' => 'Decks'
                ],
                [
                    'name' => 'Street Demon Skate Deck Pro',
                    'price' => 65,
                    'image' => '/images/shop/skate2.png',
                    'category' => 'Decks'
                ],
                [
                    'name' => 'Toy machine Skate Deck Pro',
                    'price' => 30,
                    'image' => '/images/shop/skate3.png',
                    'category' => 'Decks'
                ],
                [
                    'name' => 'Kabute Skate Deck Pro',
                    'price' => 40,
                    'image' => '/images/shop/skate4.png',
                    'category' => 'Decks'
                ],
                [
                    'name' => 'Chocolate Skate Deck Pro',
                    'price' => 90,
                    'image' => '/images/shop/skate5.png',
                    'category' => 'Decks'
                ],
                [
                    'name' => 'Jayson Skate Deck Pro',
                    'price' => 25,
                    'image' => '/images/shop/skate6.png',
                    'category' => 'Decks'
                ],

                // 👕 Clothing
                [
                    'name' => 'Streetline Hoodie Black',
                    'price' => 55,
                    'image' => '/images/shop/Streetline Hoodie Black.jpg',
                    'category' => 'Clothing'
                ],
                [
                    'name' => 'Skate Graphic Tee White',
                    'price' => 25,
                    'image' => '/images/shop/Skate Graphic Tee White.jpg',
                    'category' => 'Clothing'
                ],
                [
                    'name' => 'Oversized Street Jacket',
                    'price' => 80,
                    'image' => '/images/shop/Oversized Street Jacket.jpg',
                    'category' => 'Clothing'
                ],
                [
                    'name' => 'Classic Skate Hoodie Grey',
                    'price' => 60,
                    'image' => '/images/shop/Classic Skate Hoodie Grey.jpg',
                    'category' => 'Clothing'
                ],
                [
                    'name' => 'Skater Cargo Pants',
                    'price' => 70,
                    'image' => '/images/shop/Skater Cargo Pants.jpg',
                    'category' => 'Clothing'
                ],
                [
                    'name' => 'Minimalist Logo Tee',
                    'price' => 20,
                    'image' => '/images/shop/Minimalist Logo Tee.jpg',
                    'category' => 'Clothing'
                ],

                // 🧢 Accessories
                [
                    'name' => 'Skate Cap Black',
                    'price' => 18,
                    'image' => '/images/shop/Skate Cap Black.jpg',
                    'category' => 'Accessories'
                ],
                [
                    'name' => 'Streetline Beanie',
                    'price' => 15,
                    'image' => '/images/shop/Streetline Beanie.jpg',
                    'category' => 'Accessories'
                ],
                [
                    'name' => 'Skate Tool Kit',
                    'price' => 22,
                    'image' => '/images/shop/Skate Tool Kit.jpg',
                    'category' => 'Accessories'
                ],
                [
                    'name' => 'Grip Tape Premium',
                    'price' => 12,
                    'image' => '/images/shop/Grip Tape Premium.jpg',
                    'category' => 'Accessories'
                ],
                [
                    'name' => 'Wrist Guards Set',
                    'price' => 28,
                    'image' => '/images/shop/Wrist Guards Set.jpg',
                    'category' => 'Accessories'
                ],
                [
                    'name' => 'Skate Backpack',
                    'price' => 45,
                    'image' => '/images/shop/Skate Backpack.jpg',
                    'category' => 'Accessories'
                ],
            ];

            foreach ($products as $product):
            ?>

                <div class="bg-gray-900 border border-gray-700 rounded-xl overflow-hidden hover:scale-105 transition duration-200 transform"
                    data-category="<?= $product['category'] ?>" data-price="<?= $product['price'] ?>">

                    <img src="<?= $product['image'] ?>" class="w-full h-56 object-cover"
                        alt="<?= $product['name'] ?>">

                    <div class="p-4">
                        <h3 class="font-bold text-lg"><?= $product['name'] ?></h3>
                        <p class="mt-1 font-semibold text-green-400">$<?= $product['price'] ?></p>

                        <div class="flex justify-between items-center mt-4">
                            <a href="<?= base_url('product') ?>"
                                class="hover:bg-red-600 px-3 py-1 border border-red-600 rounded text-red-600 hover:text-white text-sm">
                                View
                            </a>

                            <button class="bg-red-600 hover:bg-red-700 px-3 py-1 rounded text-sm">
                                Add to Cart
                            </button>
                        </div>
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

        // Category filter
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

        // Sorting filter
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