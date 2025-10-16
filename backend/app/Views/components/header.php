<?php

/**
 * components/header.php
 *
 * Optional variables:
 * - $brandTitle (string): Main title beside logo. Default: "Streetline Supply Store"
 * - $brandTagline (string): Tagline below the title. Default: "Ride the Streets, Rock the Style."
 * - $logo (string): Path to logo image. Default: base_url('images/logo.png')
 * - $nav (array): Navigation items like:
 *      [
 *          ['label' => 'Home', 'href' => base_url('/')],
 *          ['label' => 'Roadmap', 'href' => base_url('roadmap')],
 *          ['label' => 'Mood Board', 'href' => base_url('moodboard')],
 *      ]
 * - $cta (array): Call-to-action button, e.g. ['label' => 'Shop Now', 'href' => base_url('shop')]
 */
?>

<header class="bg-black border-gray-800 border-b text-white">
    <div class="flex justify-between items-center mx-auto px-6 py-5 max-w-6xl">
        <!-- 🏙️ Brand Section -->
        <div class="flex items-center space-x-3">
            <a href="<?= base_url() ?>" class="flex items-center space-x-3" aria-label="<?= esc($brandTitle ?? 'Streetline Supply Store') ?> home">
                <img src="<?= esc($logo ?? base_url('images/logo.png')) ?>" alt="<?= esc($brandTitle ?? 'Streetline Supply Store') ?>" class="h-10">
                <div class="hidden sm:block">
                    <h1 class="font-bold text-xl"><?= esc($brandTitle ?? 'Streetline Supply Store') ?></h1>
                    <p class="text-gray-400 text-sm"><?= esc($brandTagline ?? 'Ride the Streets, Rock the Style.') ?></p>
                </div>
            </a>
        </div>

        <!-- 🧭 Navigation -->
        <nav class="flex items-center space-x-5 font-medium text-sm">
            <?php $session = session(); ?>

            <?php foreach ($nav ?? [] as $item): ?>
                <a href="<?= esc($item['href'] ?? '#') ?>"
                    class="<?= !empty($item['active']) ? 'text-vermillion border-b-2 border-vermillion font-semibold' : 'hover:text-vermillion' ?>">
                    <?= esc($item['label'] ?? '') ?>
                </a>
            <?php endforeach; ?>

            <!-- 🛒 Optional CTA Button -->
            <?php if (!empty($cta)): ?>
                <a href="<?= esc($cta['href'] ?? '#') ?>"
                    class="bg-vermillion hover:bg-red-700 px-4 py-2 rounded-lg font-semibold text-white transition">
                    <?= esc($cta['label'] ?? 'Shop Now') ?>
                </a>
            <?php endif; ?>

            <!-- 👤 User Dropdown -->
            <?php if ($session->has('user')): ?>
                <details class="group relative">
                    <summary class="flex items-center space-x-2 focus:outline-none cursor-pointer list-none">
                        <div class="flex justify-center items-center bg-gray-800 rounded-full w-9 h-9 text-lg">👤</div>
                    </summary>
                    <div class="right-0 z-50 absolute bg-black shadow-lg mt-2 py-2 border border-gray-700 rounded-lg w-48">
                        <a href="<?= base_url('profile') ?>" class="block hover:bg-gray-800 px-4 py-2 text-sm">Profile</a>

                        <?php
                        $u = $session->get('user');
                        $type = is_array($u) ? ($u['type'] ?? 'client') : (method_exists($u, 'toArray') ? ($u->toArray()['type'] ?? 'client') : 'client');
                        if (strtolower($type) !== 'client'):
                            $dash = strtolower($type) === 'manager' ? base_url('admin/dashboard') : base_url('employee/dashboard');
                        ?>
                            <a href="<?= esc($dash) ?>" class="block hover:bg-gray-800 px-4 py-2 text-sm">Dashboard</a>
                        <?php endif; ?>

                        <form method="get" action="<?= base_url('logout') ?>">
                            <button type="submit" class="block hover:bg-gray-800 px-4 py-2 w-full text-sm text-left">Logout</button>
                        </form>
                    </div>
                </details>
            <?php else: ?>
                <a href="<?= base_url('login') ?>" class="hover:bg-vermillion px-4 py-2 border border-vermillion rounded-lg text-vermillion hover:text-white transition">Login</a>
                <a href="<?= base_url('signup') ?>" class="bg-vermillion hover:bg-red-700 px-4 py-2 rounded-lg transition">Sign Up</a>
            <?php endif; ?>
        </nav>
    </div>
</header>