<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login | Streetline Supply</title>
    <!-- TailwindCSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="<?= base_url('images/logo.png') ?>">
    <!-- Custom Fonts & Styles -->
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

        .hover\:bg-vermillion-dark:hover {
            background-color: #b83236;
        }

        .border-vermillion {
            border-color: #D64045;
        }

        .font-bebas {
            font-family: 'Bebas Neue', cursive;
        }
    </style>
</head>

<body class="bg-black font-sans text-white">
    <!-- ✅ Header -->
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
    <!-- ✅ Login Section -->
    <main class="flex justify-center items-center bg-gradient-to-b from-black via-[#0a0a0a] to-[#1a1a1a] px-6 py-20 min-h-screen">
        <div class="bg-[#111] shadow-2xl px-8 py-10 border border-gray-800 rounded-2xl w-full max-w-md hover:scale-[1.01] transition duration-300 transform">
            <h2 class="mb-2 font-bebas font-extrabold text-vermillion text-3xl text-center tracking-wide">Welcome Back</h2>
            <p class="mb-8 text-gray-400 text-sm sm:text-base text-center">
                Sign in to your <strong class="text-white">Streetline Supply</strong> account
            </p>
            <!-- ✅ Login Form -->
            <form action="<?= base_url('users/login') ?>" method="post" class="space-y-6">
                <div>
                    <label for="username" class="block mb-2 text-gray-300 text-sm uppercase tracking-wider">Username or Email</label>
                    <input
                        type="text"
                        id="username"
                        name="username"
                        required
                        placeholder="Enter your username"
                        class="bg-black px-4 py-3 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-vermillion w-full text-white transition placeholder-gray-500">
                </div>
                <div>
                    <label for="password" class="block mb-2 text-gray-300 text-sm uppercase tracking-wider">Password</label>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        required
                        placeholder="••••••••"
                        class="bg-black px-4 py-3 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-vermillion w-full text-white transition placeholder-gray-500">
                </div>
                <button
                    type="submit"
                    class="bg-vermillion hover:bg-vermillion-dark mt-6 py-3 rounded-lg w-full font-bold text-white tracking-wide transition duration-300">
                    Sign In
                </button>
            </form>
            <p class="mt-6 text-gray-400 text-sm text-center">
                Don’t have an account?
                <a href="<?= base_url('users/signupPage') ?>" class="text-vermillion hover:underline transition">
                    Create one
                </a>
            </p>
        </div>
    </main>

    <!-- ✅ CTA Section -->
    <?= view('components/cta', [
        'title' => 'Own the Streets with Streetline Supply',
        'subtitle' => 'High-quality streetwear designed for the bold.',
        'button_label' => 'Shop the Collection',
        'button_link' => '/shop'
    ]) ?>


    <!-- ✅ Footer -->
    <?= view('components/footer', [
        'brandTitle' => 'Streetline Supply Co.',
        'tagline' => 'Skate gear for real riders.',
        'logo' => base_url('images/logo.png'),
    ]) ?>
</body>

</html>