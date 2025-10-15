<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Streetline Supply | Sign Up</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="<?= base_url('images/logo.png') ?>">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #000;
            color: #fff;
            margin: 0;
            padding: 0;
        }

        .text-vermillion {
            color: #E34234;
        }

        .bg-vermillion {
            background-color: #E34234;
        }

        .bg-vermillion:hover {
            background-color: #c33225;
        }
    </style>
</head>

<body class="flex flex-col bg-black min-h-screen">

    <!-- ✅ Reusable Header -->
    <?= view('components/header', [
        'brandTitle' => 'Streetline Supply',
        'brandTagline' => 'Skate gear for real riders.',
        'logo' => base_url('images/logo.png'),
        'nav' => [
            ['label' => 'Home', 'href' => base_url('/'), 'active' => false],
            ['label' => 'Roadmap', 'href' => base_url('roadmap'), 'active' => false],
            ['label' => 'Mood Board', 'href' => base_url('moodboard'), 'active' => false],
        ],
        'cta' => ['label' => 'Shop Now', 'href' => base_url('shop')],
    ]) ?>

    <!-- ✅ Sign Up Section -->
    <main class="flex flex-grow justify-center items-center px-4">
        <div class="bg-white shadow-lg p-8 rounded-2xl w-full max-w-md text-black text-center">
            <h2 class="mb-2 font-semibold text-3xl">Create Account</h2>
            <p class="mb-6 text-gray-600">Sign up for your <strong>Streetline Supply</strong> account.</p>

            <form action="<?= base_url('users/register') ?>" method="post" class="space-y-4 text-left">
                <input type="text" name="fullname" placeholder="Full Name" required
                    class="px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-vermillion w-full">
                <input type="email" name="email" placeholder="Email Address" required
                    class="px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-vermillion w-full">
                <input type="text" name="username" placeholder="Username" required
                    class="px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-vermillion w-full">
                <input type="password" name="password" placeholder="Password" required
                    class="px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-vermillion w-full">
                <input type="password" name="confirm_password" placeholder="Confirm Password" required
                    class="px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-vermillion w-full">

                <button type="submit" class="bg-vermillion py-2 rounded-md w-full font-semibold text-white transition-colors">
                    Sign Up
                </button>
            </form>

            <p class="mt-6 text-gray-700 text-sm">
                Already have an account?
                <a href="<?= base_url('login') ?>" class="text-vermillion hover:underline">Sign In</a>
            </p>
        </div>
    </main>

    <!-- ✅ Reusable Footer -->
    <?= view('components/footer', [
        'brandTitle' => 'Streetline Supply Co.',
        'tagline' => 'Skate gear for real riders.',
        'logo' => base_url('images/logo.png'),
    ]) ?>

</body>