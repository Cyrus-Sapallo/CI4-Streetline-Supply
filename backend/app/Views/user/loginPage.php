<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login | Streetline Supply</title>
    <!-- TailwindCSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="<?= base_url('images/logo.png') ?>" />
    <!-- 🎨 Fonts & Theme -->
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
    <main class="flex flex-grow justify-center items-center bg-gradient-to-b from-black via-[#0a0a0a] to-[#1a1a1a] px-6 py-20">
        <div class="bg-gray-900 shadow-2xl p-10 rounded-2xl w-full max-w-md text-white hover:scale-[1.01] transition duration-300 transform">
            <h2 class="mb-2 font-bebas text-vermillion text-3xl text-center tracking-wide">Login</h2>
            <p class="mb-6 text-gray-400 text-center">
                Sign in to your <strong>Streetline Supply</strong> account.
            </p>

            <!-- Display Validation / Login Errors -->
            <?php if (session()->getFlashdata('errors')): ?>
                <div class="bg-red-800 mb-4 px-4 py-3 rounded-md text-red-200">
                    <ul class="pl-5 list-disc">
                        <?php foreach (session()->getFlashdata('errors') as $error): ?>
                            <li><?= esc($error) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <!-- Login Form -->
            <form action="<?= base_url('login') ?>" method="post" class="space-y-4">
                <?= csrf_field() ?> <!-- CSRF Token for security -->

                <!-- Email Field -->
                <input type="email" name="email" placeholder="Email" required
                    value="<?= esc(session()->getFlashdata('old')['email'] ?? '') ?>"
                    class="bg-gray-800 px-4 py-3 border border-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-vermillion w-full text-white transition placeholder-gray-500">

                <!-- Password Field -->
                <input type="password" name="password" placeholder="Password" required
                    class="bg-gray-800 px-4 py-3 border border-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-vermillion w-full text-white transition placeholder-gray-500">

                <!-- Submit Button -->
                <button type="submit"
                    class="bg-vermillion hover:bg-[#b83236] py-3 rounded-md w-full font-bold text-white tracking-wide transition duration-300">
                    Login
                </button>
            </form>

            <!-- Signup Link -->
            <p class="mt-6 text-gray-400 text-sm text-center">
                Don't have an account? 
                <a href="<?= base_url('signup') ?>" class="text-vermillion hover:underline transition">Sign Up</a>
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
