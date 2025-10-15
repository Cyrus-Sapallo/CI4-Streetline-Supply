<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Streetline Supply Store</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <link rel="icon" type="image/png" href="images/logo.png">
</head>

<body class="bg-black font-sans text-white">
    <!-- Header -->
    <header class="flex justify-between items-center px-8 py-6 border-gray-700 border-b">
        <h1 class="font-bold text-2xl tracking-wide">Streetline Supply Store</h1>
        <nav class="space-x-6">
            <a href="/" class="pb-1 border-vermillion border-b-2 font-semibold text-vermillion">Home</a>
            <a href="/roadmap" class="hover:text-vermillion">Road Map</a>
            <a href="/login" class="hover:text-vermillion">Login</a>
            <a href="/moodboard" class="hover:text-vermillion">THE MOOD BOARD</a>
        </nav>
        <a href="/shop" class="bg-vermillion hover:bg-vermillion-dark px-5 py-2 rounded-lg font-bold text-white">
            Shop Now
        </a>
    </header>

    <main class="mx-auto px-6 py-12 max-w-6xl">
        <!-- Hero -->
        <section class="items-center gap-8 grid grid-cols-1 md:grid-cols-2">
            <div class="order-2 md:order-1">
                <h1 class="font-extrabold text-4xl md:text-5xl leading-tight">
                    Streetline Supply Store — Urban Culture Starts Here
                </h1>
                <p class="mt-4 max-w-xl text-gray-300">
                    We live and breathe street culture. Every piece tells a story of rebellion and self-expression.
                </p>
                <div class="flex flex-wrap items-center gap-3 mt-6">
                    <a href="#" class="hover:bg-vermillion px-5 py-2 border border-vermillion rounded-lg text-vermillion hover:text-white">
                        Request Assistance
                    </a>
                </div>
                <div class="mt-6">
                    <div class="inline-flex items-center gap-3 bg-black px-4 py-3 border border-gray-600 rounded-full text-white">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8" />
                        </svg>
                        <div>
                            <div class="font-semibold text-sm">Speak to our Crew</div>
                            <div class="text-gray-300 text-sm">Call (555) 123-4567</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="order-1 md:order-2">
                <div class="shadow-lg rounded-2xl overflow-hidden">
                    <img src="images/HarajukuStreetwear.jpg" alt="harajuku streetwear" class="w-full">
                </div>
            </div>
        </section>

        <!-- Features -->
        <section class="mt-12">
            <div class="gap-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
                <div class="bg-gray-900 shadow-lg rounded-lg overflow-hidden">
                    <img src="images/snd.jpg" alt="Skate and Destroy" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-vermillion text-xl">Skate and Destroy</h3>
                        <p class="mt-2 text-gray-300">
                            Offers durable skateboard parts and accessories built for every ride.
                        </p>
                    </div>
                </div>

                <div class="bg-gray-900 shadow-lg rounded-lg overflow-hidden">
                    <img src="images/hs.jpg" alt="Hoodside" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-vermillion text-xl">Hoodside</h3>
                        <p class="mt-2 text-gray-300">
                            Delivers streetwear made for skaters, blending comfort, style, and attitude.
                        </p>
                    </div>
                </div>

                <div class="bg-gray-900 shadow-lg rounded-lg overflow-hidden">
                    <img src="images/access.jpg" alt="Grind Supply" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-vermillion text-xl">Grind Supply</h3>
                        <p class="mt-2 text-gray-300">
                            Packs the essential gear and tools every skater needs to keep rolling.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Package Summary -->
        <section class="bg-black mt-12 p-6 border border-vermillion-dark rounded-lg">
            <div class="md:flex md:justify-between md:items-center gap-8">
                <div class="md:flex-1">
                    <h3 class="font-bold text-vermillion text-3xl uppercase tracking-wider">Skate Starter Pack</h3>
                    <p class="mt-2 text-gray-300">A solid set of essentials to get you rolling with confidence.</p>
                    <ul class="space-y-2 mt-4 text-gray-100 list-disc list-inside">
                        <li>Durable deck for everyday sessions</li>
                        <li>Reliable trucks and smooth wheels</li>
                        <li>Basic tools and grip for easy setup</li>
                    </ul>
                </div>
                <div class="flex flex-col items-start md:items-end mt-6 md:mt-0 md:w-64">
                    <div class="text-gray-400 text-sm">Starting from</div>
                    <div class="mt-1 mb-4 font-bold text-green-500 text-4xl">$100</div>
                    <a href="#" class="bg-vermillion hover:bg-vermillion-dark px-5 py-3 rounded-lg font-bold text-white">
                        Get an Instant Quote
                    </a>
                </div>
            </div>
        </section>

        <!-- Steps -->
        <section class="mt-12">
            <h3 class="mb-6 font-bold text-vermillion text-3xl uppercase tracking-wider">
                How We Keep You on Deck
            </h3>
            <div class="gap-6 grid grid-cols-1 md:grid-cols-4">
                <div class="bg-gray-900 p-6 border-2 border-vermillion rounded-lg text-center">
                    <div class="font-bold text-vermillion text-xl uppercase">You Spot It</div>
                </div>
                <div class="bg-gray-900 p-6 border-2 border-vermillion rounded-lg text-center">
                    <div class="font-bold text-vermillion text-xl uppercase">We Bag It</div>
                </div>
                <div class="bg-gray-900 p-6 border-2 border-vermillion rounded-lg text-center">
                    <div class="font-bold text-vermillion text-xl uppercase">It Ships</div>
                </div>
                <div class="bg-gray-900 p-6 border-2 border-vermillion rounded-lg text-center">
                    <div class="font-bold text-vermillion text-xl uppercase">You Shred</div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="bg-vermillion my-12 py-12 rounded-lg text-white text-center">
            <h2 class="font-bold text-4xl">Need Gear Fast?</h2>
            <p class="mx-auto mt-2 max-w-2xl">
                Our crew is ready 24/7. Hit us up for immediate supply and support.
            </p>
            <div class="flex flex-wrap justify-center gap-4 mt-6">
                <a href="tel:5551234567" class="bg-white hover:bg-gray-200 px-5 py-3 rounded-lg font-bold text-vermillion">
                    CALL THE SUPPLY LINE
                </a>
                <a href="/services" class="hover:bg-white px-5 py-3 border border-white rounded-lg hover:text-vermillion">
                    CHECK THE STOCK
                </a>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="px-8 py-6 border-gray-700 border-t text-center">
        <p class="mb-4 text-gray-400">
            STREETLINE SUPPLY CO. © 2024. ALL RIGHTS RESERVED.
        </p>
        <div class="flex flex-wrap justify-center gap-6">
            <a href="/services" class="hover:text-vermillion">GEAR SERVICES</a>
            <a href="/" class="hover:text-vermillion">Home</a>
            <a href="/moodboard" class="hover:text-vermillion">THE MOOD BOARD</a>
            <a href="/roadmap" class="hover:text-vermillion">ROAD MAP</a>
        </div>
    </footer>
</body>

</html>