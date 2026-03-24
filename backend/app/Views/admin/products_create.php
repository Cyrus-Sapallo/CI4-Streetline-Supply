<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product | Streetline Admin</title>

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
        'brandTitle' => 'Streetline Admin',
        'brandTagline' => 'Manage your store efficiently',
        'logo' => base_url('images/logo.png'),
        'nav' => [
            ['label' => 'Dashboard', 'href' => base_url('/admin'), 'active' => false],
            ['label' => 'Products', 'href' => base_url('/admin/dashboard'), 'active' => true],
            ['label' => 'Accounts', 'href' => base_url('/admin/accounts')],
            ['label' => 'Requests', 'href' => base_url('/admin/requests')],
        ],
    ]) ?>

    <!-- Add Product Form -->
    <main class="mx-auto px-6 py-16 max-w-3xl">

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

        <div class="bg-[#1E1E1E] shadow-lg p-6 rounded-xl">
            <h1 class="mb-6 font-bebas text-4xl">Add New Product</h1>

            <form action="<?= base_url('admin/products/store') ?>" method="post" enctype="multipart/form-data" class="space-y-4">
                <?= csrf_field() ?>
                <input type="text" name="name" placeholder="Product Name"
                    class="bg-gray-700 p-3 rounded w-full text-white" value="<?= old('name') ?>" required>

                <input type="number" step="0.01" name="price" placeholder="Price"
                    class="bg-gray-700 p-3 rounded w-full text-white" value="<?= old('price') ?>" required>

                <input type="number" name="stock" placeholder="Stock Quantity"
                    class="bg-gray-700 p-3 rounded w-full text-white" value="<?= old('stock') ?>" required>

                <input type="text" name="category" placeholder="Category"
                    class="bg-gray-700 p-3 rounded w-full text-white" value="<?= old('category') ?>" required>

                <input type="file" name="image" class="bg-gray-700 p-3 rounded w-full text-white" required>

                <div class="flex gap-4 mt-6">
                    <button type="submit" class="bg-vermillion hover:opacity-90 px-6 py-3 rounded-lg font-semibold">
                        Save Product
                    </button>

                    <a href="<?= base_url('/admin/dashboard') ?>"
                        class="hover:bg-vermillion px-6 py-3 border border-vermillion rounded-lg font-semibold text-vermillion hover:text-white">
                        Cancel
                    </a>
                </div>

            </form>
        </div>

    </main>

    <!-- Footer -->
    <?= view('components/footer', [
        'brandTitle' => 'Streetline Admin',
        'tagline' => 'Manage your store efficiently',
        'logo' => base_url('images/logo.png'),
    ]) ?>

</body>

</html>