<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" />
</head>

<body class="bg-gray-900 font-sans text-white">

    <!-- HEADER -->
    <?= view('components/header', [
        'brandTitle' => 'Admin Panel',
        'brandTagline' => 'Manage your system efficiently',
        'logo' => base_url('images/logo.png'),
        'nav' => [
            ['label' => 'Dashboard', 'href' => base_url('/admin'), 'active' => true],
            ['label' => 'Services', 'href' => base_url('/admin/services')],
            ['label' => 'Accounts', 'href' => base_url('/admin/accounts')],
            ['label' => 'Requests', 'href' => base_url('/admin/requests')],
        ],
    ]) ?>

    <main class="mx-auto px-6 py-12 max-w-6xl">

        <!-- STATS -->
        <section class="gap-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 mb-12">
            <?php foreach ($stats as $stat): ?>
                <div class="bg-gray-800 shadow-lg p-6 rounded-lg text-center">
                    <div class="mb-2 text-3xl"><?= $stat['icon'] ?></div>
                    <div class="text-gray-400 uppercase"><?= $stat['title'] ?></div>
                    <div class="mt-1 font-bold text-2xl"><?= $stat['value'] ?></div>
                </div>
            <?php endforeach; ?>
        </section>

        <!-- PRODUCTS -->
        <section class="bg-gray-800 shadow-lg p-6 rounded-lg">
            <h2 class="mb-4 font-bold text-2xl">Products</h2>

            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="border-gray-700 border-b">
                        <th class="p-2">Image</th>
                        <th class="p-2">Name</th>
                        <th class="p-2">Price</th>
                        <th class="p-2">Category</th>
                        <th class="p-2">Actions</th>
                    </tr>
                </thead>

                <tbody>
                    <?php if (!empty($products)): ?>
                        <?php foreach ($products as $product): ?>
                            <tr class="border-gray-700 border-b">
                                <td class="p-2">
                                    <img src="<?= base_url($product['image']) ?>" class="rounded w-16 h-16 object-cover">
                                </td>

                                <td class="p-2"><?= esc($product['name']) ?></td>
                                <td class="p-2">$<?= esc($product['price']) ?></td>
                                <td class="p-2"><?= esc($product['category']) ?></td>

                                <!-- CRUD BUTTONS -->
                                <td class="flex gap-2 p-2">

                                    <!-- EDIT -->
                                    <?= view('components/buttons/button_secondary', [
                                        'label' => 'Edit',
                                        'href' => base_url('admin/editProduct/' . $product['id'])
                                    ]) ?>

                                    <!-- DELETE (SAFE FORM) -->
                                    <form action="<?= base_url('admin/deleteProduct/' . $product['id']) ?>" method="post">
                                        <?= csrf_field() ?>
                                        <button type="submit"
                                            class="bg-red-500 hover:bg-red-600 px-3 py-1 rounded text-white text-sm">
                                            Delete
                                        </button>
                                    </form>

                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="5" class="p-4 text-gray-400 text-center">
                                No products found
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </section>

        <!-- REQUESTS -->
        <section class="bg-gray-800 shadow-lg mt-10 p-6 rounded-lg">
            <h2 class="mb-4 font-bold text-2xl">Recent Requests</h2>

            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="border-gray-700 border-b">
                        <th class="p-2">ID</th>
                        <th class="p-2">User ID</th>
                        <th class="p-2">Service</th>
                        <th class="p-2">Status</th>
                        <th class="p-2">Date</th>
                    </tr>
                </thead>

                <tbody>
                    <?php if (!empty($requests)): ?>
                        <?php foreach ($requests as $req): ?>
                            <tr class="border-gray-700 border-b">
                                <td class="p-2"><?= esc($req['id'] ?? '') ?></td>
                                <td class="p-2"><?= esc($req['user_id'] ?? '') ?></td>
                                <td class="p-2"><?= esc($req['service'] ?? '') ?></td>
                                <td class="p-2 text-green-400"><?= esc($req['status'] ?? '') ?></td>
                                <td class="p-2"><?= esc($req['created_at'] ?? '') ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="5" class="p-4 text-gray-400 text-center">
                                No requests found
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </section>

    </main>

    <!-- FOOTER -->
    <?= view('components/footer', [
        'brandTitle' => 'Streetline Admin',
        'tagline' => 'Manage your system efficiently',
        'logo' => base_url('images/logo.png'),
    ]) ?>

</body>

</html>