<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Accounts Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="<?= base_url('images/logo.png') ?>">
</head>

<body class="bg-gray-900 font-sans text-white">

    <!-- Header -->
    <?= view('components/header', [
        'brandTitle' => 'Admin Panel',
        'brandTagline' => 'Manage your system efficiently',
        'logo' => base_url('images/logo.png'),
        'nav' => [
            ['label' => 'Dashboard', 'href' => base_url('/admin'), 'active' => false],
            ['label' => 'Services', 'href' => base_url('/admin/services'), 'active' => false],
            ['label' => 'Accounts', 'href' => base_url('/admin/accounts'), 'active' => true],
            ['label' => 'Requests', 'href' => base_url('/admin/requests')],
        ]
    ]) ?>

    <!-- Page title and Add Account Button -->
    <div class="flex justify-between items-center bg-red-600 mt-4 p-4 rounded">
        <h1 class="font-bold text-2xl">Admin Accounts</h1>
        <?= view('components/buttons/button_primary', [
            'label' => '+ Add Account',
            'href' => '#',
            'disable' => false
        ]) ?>
    </div>

    <!-- Accounts Table -->
    <main class="mx-auto p-6 max-w-6xl">
        <table class="bg-gray-800 rounded-lg w-full overflow-hidden border-collapse table-auto">
            <thead>
                <tr class="bg-gray-700 text-left">
                    <th class="px-4 py-2">ID</th>
                    <th class="px-4 py-2">Name</th>
                    <th class="px-4 py-2">Email</th>
                    <th class="px-4 py-2">Role</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <td class="flex gap-2 px-4 py-2">
                <?= view('components/buttons/button_secondary', [
                    'label' => 'Edit',
                    'href' => '#',
                    'dark' => true,
                    'disable' => false
                ]) ?>
                <?= view('components/buttons/button_secondary', [
                    'label' => 'Block',
                    'href' => '#',
                    'dark' => false, // or true if you want darker color for emphasis
                    'disable' => false
                ]) ?>
            </td>

            </td>

            </tr>
            <!-- Add more accounts dynamically -->
            </tbody>
        </table>
    </main>

</body>

</html>