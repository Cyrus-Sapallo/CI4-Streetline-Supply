<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login | Streetline Supply</title>

    <!-- Tailwind CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <link rel="icon" type="image/png" href="<?= base_url('images/logo.png') ?>">

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
    <main class="flex justify-center items-center bg-black px-6 py-12 min-h-screen">
        <div class="bg-gray-900 shadow-xl px-8 py-10 border border-gray-700 rounded-2xl w-full max-w-md">
            <h2 class="mb-2 font-extrabold text-vermillion text-3xl text-center">Welcome Back</h2>
            <p class="mb-6 text-gray-400 text-center">
                Sign in to your <strong class="text-white">Streetline Supply</strong> account.
            </p>

            <!-- ✅ Login Form -->
            <form action="<?= base_url('users/login') ?>" method="post" class="space-y-5">
                <div>
                    <label for="username" class="block mb-2 text-gray-300 text-sm">Username or Email</label>
                    <input
                        type="text"
                        id="username"
                        name="username"
                        required
                        placeholder="Enter your username"
                        class="bg-black px-4 py-3 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-vermillion w-full text-white placeholder-gray-500">

                </div>

                <div>
                    <label for="password" class="block mb-2 text-gray-300 text-sm">Password</label>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        required
                        placeholder="••••••••"
                        class="bg-black px-4 py-3 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-vermillion w-full text-white placeholder-gray-500">

                </div>

                <button
                    type="submit"
                    class="bg-vermillion hover:bg-vermillion-dark mt-4 py-3 rounded-lg w-full font-bold text-white transition">
                    Sign In
                </button>
            </form>

            <p class="mt-6 text-gray-400 text-sm text-center">
                Don’t have an account?
                <a href="<?= base_url('users/signupPage') ?>" class="text-vermillion hover:underline">
                    Create one
                </a>
            </p>
        </div>

    </main>

    <!-- ✅ Footer -->
    <?= view('components/footer', [
        'brandTitle' => 'Streetline Supply Co.',
        'tagline' => 'Skate gear for real riders.',
        'logo' => base_url('images/logo.png'),
    ]) ?>



</body>