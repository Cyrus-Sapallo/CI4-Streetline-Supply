<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Requests | Control Panel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="<?= base_url('images/logo.png') ?>">
</head>

<body class="flex flex-col bg-gray-900 min-h-screen font-sans text-white">

    <!-- Header -->
    <?= view('components/header', [
        'brandTitle' => 'Admin Panel',
        'brandTagline' => 'Manage your system efficiently',
        'logo' => base_url('images/logo.png'),
        'nav' => [
            ['label' => 'Dashboard', 'href' => base_url('/admin'), 'active' => false],
            ['label' => 'Services', 'href' => base_url('/admin/services'), 'active' => false],
            ['label' => 'Accounts', 'href' => base_url('/admin/accounts'), 'active' => false],
            ['label' => 'Requests', 'href' => base_url('/admin/requests'), 'active' => true],
        ]
    ]) ?>

    <!-- Page Container -->
    <main class="flex-1 mx-auto p-6 w-full max-w-7xl">

        <!-- Page Header -->
        <div class="flex sm:flex-row flex-col justify-between items-center bg-red-600 shadow-md mt-4 p-4 rounded-lg">
            <div>
                <h1 class="font-bold text-2xl">Admin Requests</h1>
                <p class="text-gray-100 text-sm">Monitor, approve, or reject incoming service requests</p>
            </div>
            <?= view('components/buttons/button_primary', [
                'label' => '+ Add Request',
                'href' => '#',
                'disable' => false
            ]) ?>
        </div>

        <!-- Filters and Search -->
        <div class="flex sm:flex-row flex-col justify-between gap-4 mt-6">
            <div class="flex gap-2">
                <select class="bg-gray-800 px-3 py-2 border border-gray-700 rounded-lg focus:ring-2 focus:ring-red-500">
                    <option value="">All Status</option>
                    <option value="pending">Pending</option>
                    <option value="approved">Approved</option>
                    <option value="rejected">Rejected</option>
                </select>
                <select class="bg-gray-800 px-3 py-2 border border-gray-700 rounded-lg focus:ring-2 focus:ring-red-500">
                    <option value="">All Services</option>
                    <option>Skateboard Repair</option>
                    <option>Car Wash</option>
                    <option>General Maintenance</option>
                </select>
            </div>

            <div class="relative w-full sm:w-1/3">
                <input type="text" placeholder="Search by user or ID..."
                    class="bg-gray-800 px-4 py-2 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 w-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="top-2.5 right-3 absolute w-5 h-5 text-gray-400" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1116.65 16.65z" />
                </svg>
            </div>
        </div>

        <!-- Requests Table -->
        <div class="shadow-lg mt-6 rounded-lg overflow-x-auto">
            <table class="bg-gray-800 rounded-lg w-full border-collapse table-auto">
                <thead class="bg-gray-700 text-gray-300 text-sm text-left uppercase">
                    <tr>
                        <th class="px-4 py-3">Request ID</th>
                        <th class="px-4 py-3">User</th>
                        <th class="px-4 py-3">Service</th>
                        <th class="px-4 py-3">Status</th>
                        <th class="px-4 py-3">Date</th>
                        <th class="px-4 py-3 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody id="requestsTable">
                    <!-- Example Row -->
                    <tr class="hover:bg-gray-750 border-gray-700 border-b transition">
                        <td class="px-4 py-3 font-semibold">001</td>
                        <td class="px-4 py-3">Cyrus S.</td>
                        <td class="px-4 py-3">Skateboard Repair</td>
                        <td class="px-4 py-3">
                            <span class="bg-yellow-400 px-2 py-1 rounded font-semibold text-black text-xs">Pending</span>
                        </td>
                        <td class="px-4 py-3">2025-10-21</td>
                        <td class="flex justify-center gap-2 px-4 py-3">
                            <?= view('components/buttons/button_secondary', [
                                'label' => 'Approve',
                                'href' => '#',
                                'dark' => true,
                                'disable' => false
                            ]) ?>
                            <?= view('components/buttons/button_secondary', [
                                'label' => 'Reject',
                                'href' => '#',
                                'dark' => false,
                                'disable' => false
                            ]) ?>
                        </td>
                    </tr>
                    <!-- Dynamic rows will be injected here via JS or server-side rendering -->
                </tbody>
            </table>
        </div>

        <!-- Footer / Summary -->
        <div class="flex justify-between items-center mt-6 text-gray-400 text-sm">
            <p>Showing <span class="font-medium text-white">1</span> of <span class="font-medium text-white">25</span> requests</p>
            <button class="bg-gray-700 hover:bg-gray-600 px-3 py-1 rounded-md text-gray-200">Load More</button>
        </div>

    </main>

</body>

</html>