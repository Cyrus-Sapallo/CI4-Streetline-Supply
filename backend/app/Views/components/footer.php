<foter class="bg-zinc-950 mt-12 border-gray-800 border-t text-gray-400">
    <div class="gap-8 grid md:grid-cols-3 mx-auto px-6 py-10 max-w-6xl">
        <div>
            <img src="<?= esc($logo) ?>" alt="Logo" class="mb-3 h-10">
            <h3 class="font-semibold text-white"><?= esc($brandTitle) ?></h3>
            <p class="mt-2 text-sm"><?= esc($tagline) ?></p>
        </div>

        <div>
            <h4 class="mb-3 font-semibold text-white">Explore</h4>
            <ul class="space-y-2 text-sm">
                <li><a href="<?= base_url('/') ?>" class="hover:text-vermillion">Home</a></li>
                <li><a href="<?= base_url('roadmap') ?>" class="hover:text-vermillion">Roadmap</a></li>
                <li><a href="<?= base_url('moodboard') ?>" class="hover:text-vermillion">Moodboard</a></li>
                <li><a href="<?= base_url('login') ?>" class="hover:text-vermillion">Login</a></li>
            </ul>
        </div>

        <div>
            <h4 class="mb-3 font-semibold text-white">Contact</h4>
            <p class="text-sm">Email: <a href="mailto:info@streetline.com" class="hover:text-vermillion">info@streetline.com</a></p>
            <p class="mt-2 text-sm">Phone: (555) 123-4567</p>
        </div>
    </div>
    <div class="py-4 border-gray-800 border-t text-gray-500 text-xs text-center">
        © <?= date('Y') ?> Streetline Supply Co. — All Rights Reserved.
    </div>
    </footer>