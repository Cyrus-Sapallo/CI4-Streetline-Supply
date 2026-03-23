<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900 text-white">

    <div class="bg-gray-800 shadow-lg mx-auto mt-16 p-8 rounded-lg max-w-xl">

        <h1 class="mb-6 font-bold text-2xl">Edit Product</h1>

        <form action="<?= base_url('admin/updateProduct/' . $product['id']) ?>" method="post" enctype="multipart/form-data">

            <?= csrf_field() ?>

            <div class="mb-4">
                <label class="block mb-1 text-gray-300">Product Name</label>
                <input type="text"
                    name="name"
                    value="<?= esc($product['name']) ?>"
                    class="bg-gray-700 p-2 border border-gray-600 rounded focus:outline-none w-full">
            </div>

            <div class="mb-4">
                <label class="block mb-1 text-gray-300">Price</label>
                <input type="number"
                    name="price"
                    value="<?= esc($product['price']) ?>"
                    class="bg-gray-700 p-2 border border-gray-600 rounded focus:outline-none w-full">
            </div>

            <div class="mb-4">
                <label class="block mb-1 text-gray-300">Stock</label>
                <input type="number"
                    name="stock"
                    value="<?= esc($product['stock']) ?>"
                    min="0"
                    class="bg-gray-700 p-2 border border-gray-600 rounded focus:outline-none w-full">
            </div>

            <div class="mb-4">
                <label class="block mb-1 text-gray-300">Category</label>
                <input type="text"
                    name="category"
                    value="<?= esc($product['category']) ?>"
                    class="bg-gray-700 p-2 border border-gray-600 rounded focus:outline-none w-full">
            </div>

            <div class="mb-4">
                <p class="mb-2 text-gray-400">Current Image:</p>
                <img src="<?= base_url($product['image']) ?>" class="rounded w-32 h-32 object-cover">
            </div>

            <div class="mb-6">
                <label class="block mb-1 text-gray-300">Change Image</label>
                <input type="file" name="image" class="bg-gray-700 p-2 border border-gray-600 rounded w-full">
            </div>

            <div class="flex gap-4">
                <button type="submit"
                    class="bg-green-500 hover:bg-green-600 px-5 py-2 rounded font-semibold text-white">
                    Update Product
                </button>

                <a href="<?= base_url('admin/dashboard') ?>"
                    class="bg-gray-600 hover:bg-gray-700 px-5 py-2 rounded font-semibold text-white">
                    Cancel
                </a>
            </div>

        </form>

    </div>

</body>

</html>