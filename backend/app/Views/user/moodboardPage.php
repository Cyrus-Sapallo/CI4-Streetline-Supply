<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Streetline Supply Moodboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="images/logo.png">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter:wght@400;600;800&display=swap');

        body {
            font-family: 'Inter', sans-serif;
            background-color: #000;
            color: #fff;
            margin: 0;
            padding: 0;
        }

        .text-vermillion {
            color: #D64045;
        }

        .bg-vermillion {
            background-color: #D64045;
        }

        .border-vermillion {
            border-color: #D64045;
        }

        .font-bebas {
            font-family: 'Bebas Neue', cursive;
        }
    </style>
</head>

<body class="bg-black min-h-screen font-sans text-white">

    <!-- Header -->
    <header class="flex justify-between items-center px-8 py-6 border-gray-700 border-b">
        <h1 class="font-bold text-2xl tracking-wide">Streetline Supply Moodboard</h1>
        <nav class="space-x-6">
            <a href="/" class="hover:text-vermillion">Home</a>
            <a href="/roadmap" class="hover:text-vermillion">Road Map</a>
            <a href="/login" class="hover:text-vermillion">Login</a>
        </nav>
        <a href="/shop" class="bg-vermillion hover:bg-red-600 px-5 py-2 rounded-lg font-bold text-white">
            Shop Now
        </a>
    </header>

    <main class="space-y-16 p-10">

        <!-- Color Palette -->
        <section>
            <h2 class="mb-6 font-extrabold text-vermillion text-3xl">🎨 Color Palette</h2>
            <div class="gap-6 grid grid-cols-3 md:grid-cols-3">
                <div class="flex justify-center items-center bg-[#D64045] rounded-lg h-24 font-semibold">Vermillion</div>
                <div class="flex justify-center items-center bg-[#1E1E1E] rounded-lg h-24 font-semibold text-gray-200">Street Black</div>
                <div class="flex justify-center items-center bg-[#F5F5F5] rounded-lg h-24 font-semibold text-gray-800">Concrete White</div>
            </div>
        </section>

        <!-- Typography -->
        <section>
            <h2 class="mb-6 font-extrabold text-vermillion text-3xl">🔠 Typography</h2>
            <p class="mb-4 text-xl">Inter — Used for body and general text</p>
            <p class="font-bebas text-4xl tracking-wide">Bebas Neue — Used for titles and branding</p>
        </section>

        <!-- Buttons -->
        <section>
            <h2 class="mb-6 font-extrabold text-vermillion text-3xl">🔘 Buttons Set</h2>
            <div class="flex flex-wrap gap-4">
                <button type="button" class="bg-vermillion hover:bg-red-800 px-5 py-2.5 rounded-lg font-medium text-white text-sm">vermillion</button>
                <button type="button" class="bg-green-700 hover:bg-green-800 px-5 py-2.5 rounded-full font-medium text-white text-sm">Green</button>
                <button type="button" class="hover:bg-vermillion px-6 py-3 border-2 border-vermillion rounded-lg font-semibold text-vermillion hover:text-white transition">Bordered</button>
                <button type="button" class="bg-gradient-to-br from-purple-600 to-blue-500 px-5 py-2.5 rounded-lg font-medium text-white text-sm">Gradient</button>
                <button type="button" class="bg-blue-700 hover:bg-blue-800 px-5 py-2.5 rounded-lg font-medium text-white text-sm">Default</button>
            </div>
        </section>

        <!-- Cards -->
        <section>
            <h2 class="mb-6 font-extrabold text-vermillion text-3xl">🔘 Cards</h2>
            <div class="gap-6 grid grid-cols-1 lg:grid-cols-1">

                <!-- Card 1 -->
                <div class="bg-white shadow-lg mb-12 rounded-lg overflow-hidden text-black">
                    <img src="https://tailwindcss.com/plus-assets/img/ecommerce-images/home-page-02-edition-01.jpg" alt="Desk and Office" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-900 text-lg">Desk and Office</h3>
                        <p class="mt-1 text-gray-600 text-sm">Work from home accessories</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-gray-50 mb-12 py-24 sm:py-32 text-black">
                    <div class="mx-auto px-6 lg:px-8 max-w-7xl">
                        <h2 class="font-semibold text-indigo-600 text-base text-center">Deploy faster</h2>
                        <p class="mx-auto mt-2 max-w-lg font-semibold text-gray-950 text-4xl sm:text-5xl text-center tracking-tight">
                            Everything you need to deploy your app
                        </p>
                        <div class="gap-4 grid lg:grid-cols-3 lg:grid-rows-2 mt-10 sm:mt-16">
                            <!-- Example Cards: Mobile, Performance, Security, APIs -->
                            <div class="bg-white shadow p-6 rounded-lg text-black">
                                <h3 class="font-medium text-lg">Mobile friendly</h3>
                                <p class="mt-2 text-gray-600 text-sm">Optimized for all devices with responsive design.</p>
                            </div>
                            <div class="bg-white shadow p-6 rounded-lg text-black">
                                <h3 class="font-medium text-lg">Performance</h3>
                                <p class="mt-2 text-gray-600 text-sm">Fast loading and optimized experience.</p>
                            </div>
                            <div class="bg-white shadow p-6 rounded-lg text-black">
                                <h3 class="font-medium text-lg">Security</h3>
                                <p class="mt-2 text-gray-600 text-sm">Reliable protection for user data and content.</p>
                            </div>
                            <div class="bg-white shadow p-6 rounded-lg text-black">
                                <h3 class="font-medium text-lg">Powerful APIs</h3>
                                <p class="mt-2 text-gray-600 text-sm">Integrate seamlessly with robust APIs.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 3: Leadership -->
                <div class="bg-white py-24 sm:py-32 text-black">
                    <div class="gap-20 grid xl:grid-cols-3 mx-auto px-6 lg:px-8 max-w-7xl">
                        <div class="max-w-xl">
                            <h2 class="font-semibold text-gray-900 text-3xl sm:text-4xl tracking-tight">Meet our leadership</h2>
                            <p class="mt-6 text-gray-600 text-lg">We’re a dynamic group passionate about delivering the best results for our clients.</p>
                        </div>
                        <ul role="list" class="gap-x-8 gap-y-12 sm:gap-y-16 grid sm:grid-cols-2 xl:col-span-2">
                            <li>
                                <div class="flex items-center gap-x-6">
                                    <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="rounded-full w-16 h-16" />
                                    <div>
                                        <h3 class="font-semibold text-gray-900 text-base tracking-tight">Leslie Alexander</h3>
                                        <p class="font-semibold text-indigo-600 text-sm">Co-Founder / CEO</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center gap-x-6">
                                    <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="rounded-full w-16 h-16" />
                                    <div>
                                        <h3 class="font-semibold text-gray-900 text-base tracking-tight">Michael Foster</h3>
                                        <p class="font-semibold text-indigo-600 text-sm">Co-Founder / CTO</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center gap-x-6">
                                    <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="rounded-full w-16 h-16" />
                                    <div>
                                        <h3 class="font-semibold text-gray-900 text-base tracking-tight">Dries Vincent</h3>
                                        <p class="font-semibold text-indigo-600 text-sm">Business Relations</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>

        <!-- Logos -->
        <section>
            <h2 class="mb-6 font-extrabold text-vermillion text-3xl">🏁 Logos</h2>
            <div class="flex flex-wrap items-center gap-10">
                <div class="flex flex-col items-center">
                    <div class="flex justify-center items-center bg-white rounded-full w-32 h-32">
                        <img src="images/logo.png" alt="Circle Logo" class="w-20 h-20 object-contain">
                    </div>
                    <p class="mt-3 text-gray-300 text-sm">Circle Logo</p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="flex justify-center items-center bg-white rounded-lg w-32 h-32">
                        <img src="images/logo.png" alt="Square Logo" class="w-20 h-20 object-contain">
                    </div>
                    <p class="mt-3 text-gray-300 text-sm">Square Logo</p>
                </div>
            </div>
        </section>

    </main>

    <!-- Footer -->
    <footer class="px-8 py-6 border-gray-700 border-t text-gray-400 text-center">
        STREETLINE SUPPLY CO. © 2024. ALL RIGHTS RESERVED.<br>
        <div class="flex justify-center gap-6 mt-2">
            <a href="/services" class="hover:text-vermillion">GEAR SERVICES</a>
            <a href="/roadmap" class="hover:text-vermillion">ROAD MAP</a>
        </div>
    </footer>

</body>

</html>