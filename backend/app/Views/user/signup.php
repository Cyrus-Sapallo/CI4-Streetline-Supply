<?php
$errors = session()->getFlashdata('errors') ?? [];
$old = session()->getFlashdata('old') ?? [];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | Streetline Supply</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="<?= base_url('images/logo.png') ?>">
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

        .bg-vermillion:hover {
            background-color: #b83236;
        }

        .font-bebas {
            font-family: 'Bebas Neue', cursive;
        }
    </style>
</head>

<body class="flex flex-col bg-black min-h-screen text-white">
    <?= view('components/header', [
        'brandTitle' => 'Streetline Supply',
        'brandTagline' => 'Skate gear for real riders.',
        'logo' => base_url('images/logo.png'),
        'nav' => [
            ['label' => 'Home', 'href' => base_url('/')],
            ['label' => 'Roadmap', 'href' => base_url('roadmap')],
            ['label' => 'Mood Board', 'href' => base_url('moodboard')],
        ],
        'cta' => ['label' => 'Shop Now', 'href' => base_url('shop')],
    ]) ?>

    <main class="flex flex-grow justify-center items-center bg-gradient-to-b from-black via-[#0a0a0a] to-[#1a1a1a] px-6 py-20">
        <div class="bg-white shadow-2xl p-10 rounded-2xl w-full max-w-md text-black hover:scale-[1.01] transition duration-300 transform">
            <h2 class="mb-2 font-bebas text-vermillion text-3xl text-center tracking-wide">Create Account</h2>
            <p class="mb-6 text-gray-600 text-center">Sign up for your <strong>Streetline Supply</strong> account.</p>

            <?php if (!empty($errors)): ?>
                <div class="bg-red-100 mb-4 px-4 py-3 rounded-md text-red-700">
                    <ul class="pl-5 list-disc">
                        <?php foreach ($errors as $error): ?>
                            <li><?= esc($error) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <form action="<?= base_url('signup') ?>" method="post" class="space-y-4" novalidate>
                <?= csrf_field() ?>
                <input type="text" name="first_name" placeholder="First Name" required
                    value="<?= esc($old['first_name'] ?? '') ?>"
                    class="px-4 py-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-vermillion w-full text-black transition placeholder-gray-500">

                <input type="text" name="middle_name" placeholder="Middle Name (optional)"
                    value="<?= esc($old['middle_name'] ?? '') ?>"
                    class="px-4 py-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-vermillion w-full text-black transition placeholder-gray-500">

                <input type="text" name="last_name" placeholder="Last Name" required
                    value="<?= esc($old['last_name'] ?? '') ?>"
                    class="px-4 py-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-vermillion w-full text-black transition placeholder-gray-500">

                <input type="email" name="email" placeholder="Email Address" required
                    value="<?= esc($old['email'] ?? '') ?>"
                    class="px-4 py-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-vermillion w-full text-black transition placeholder-gray-500">

                <input type="password" name="password" placeholder="Password" required
                    class="px-4 py-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-vermillion w-full text-black transition placeholder-gray-500">

                <input type="password" name="confirm_password" placeholder="Confirm Password" required
                    class="px-4 py-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-vermillion w-full text-black transition placeholder-gray-500">

                <button type="submit"
                    class="bg-vermillion hover:bg-vermillion-dark py-3 rounded-md w-full font-bold text-white tracking-wide transition duration-300">
                    Sign Up
                </button>
            </form>

            <p class="mt-6 text-gray-700 text-sm text-center">
                Already have an account?
                <a href="<?= base_url('login') ?>" class="text-vermillion hover:underline transition">Sign In</a>
            </p>
        </div>
    </main>

    <?= view('components/cta', [
        'title' => 'Own the Streets with Streetline Supply',
        'subtitle' => 'High-quality streetwear designed for the bold.',
        'button_label' => 'Shop the Collection',
        'button_link' => '/shop'
    ]) ?>

    <?= view('components/footer', [
        'brandTitle' => 'Streetline Supply Co.',
        'tagline' => 'Skate gear for real riders.',
        'logo' => base_url('images/logo.png'),
    ]) ?>
</body>

</html>