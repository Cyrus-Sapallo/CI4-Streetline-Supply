<?php
// Component: cards/card_product.php
// Purpose: Showcase a product or featured item
// $title: string
// $excerpt: string
// $image: string|null
// $href: string|null
?>
<article class="bg-white shadow-md rounded-lg overflow-hidden hover:scale-[1.02] transition-transform duration-300">
    <?php if (!empty($image)): ?>
        <img src="<?= esc($image) ?>" alt="<?= esc($title ?? '') ?>" class="w-full h-48 object-cover">
    <?php endif; ?>
    <div class="p-4 text-black">
        <?php if (!empty($title)): ?>
            <h3 class="font-semibold text-xl"><?= esc($title) ?></h3>
        <?php endif; ?>
        <?php if (!empty($excerpt)): ?>
            <p class="mt-1 text-gray-600 text-sm"><?= esc($excerpt) ?></p>
        <?php endif; ?>
        <?php if (!empty($href)): ?>
            <a href="<?= esc($href) ?>" class="inline-block mt-3 font-semibold text-vermillion hover:underline">
                View Product →
            </a>
        <?php endif; ?>
    </div>
</article>