<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" />
</head>

<body class="bg-gray-900 font-sans text-white">

    <!-- Header -->
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

        <!-- Stats Widgets -->
        <section class="gap-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 mb-12">
            <?php
            $stats = [
                ['title' => 'Total Users', 'value' => 124, 'icon' => '👤'],
                ['title' => 'Total Requests', 'value' => 87, 'icon' => '📦'],
                ['title' => 'Total Services', 'value' => 15, 'icon' => '🛠️'],
                ['title' => 'Revenue', 'value' => '$3,240', 'icon' => '💰'],
            ];
            foreach ($stats as $stat):
            ?>
                <div class="bg-gray-800 shadow-lg p-6 rounded-lg text-center">
                    <div class="mb-2 text-3xl"><?= $stat['icon'] ?></div>
                    <div class="text-gray-400 uppercase"><?= $stat['title'] ?></div>
                    <div class="mt-1 font-bold text-2xl"><?= $stat['value'] ?></div>
                </div>
            <?php endforeach; ?>
        </section>

        <!-- Recent Activity / Requests Table -->
        <section class="bg-gray-800 shadow-lg p-6 rounded-lg">
            <h2 class="mb-4 font-bold text-2xl">Recent Requests</h2>
            <table class="w-full text-left border-collapse table-auto">
                <thead>
                    <tr class="border-gray-700 border-b">
                        <th class="px-4 py-2">ID</th>
                        <th class="px-4 py-2">User</th>
                        <th class="px-4 py-2">Service</th>
                        <th class="px-4 py-2">Status</th>
                        <th class="px-4 py-2">Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-gray-700 border-b">
                        <td class="px-4 py-2">001</td>
                        <td class="px-4 py-2">Cyrus S.</td>
                        <td class="px-4 py-2">Skateboard Repair</td>
                        <td class="px-4 py-2 text-green-400">Completed</td>
                        <td class="px-4 py-2">2025-10-21</td>
                    </tr>
                    <!-- Repeat rows dynamically -->
                </tbody>
            </table>
        </section>

    </main>

    <?= view('components/footer', [
        'brandTitle' => 'Streetline Admin',
        'tagline' => 'Manage your system efficiently',
        'logo' => base_url('images/logo.png'),
    ]) ?>

</body>

</html>