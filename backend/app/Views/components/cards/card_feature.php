<?php
// Component: cards/card_feature.php
// Purpose: Highlight platform or app features (like "Mobile friendly", etc.)
// $title: string
// $excerpt: string
// $icon: string|null
?>
<div class="bg-gray-50 hover:bg-gray-100 shadow p-6 rounded-lg text-black transition">
    <?php if (!empty($icon)): ?>
        <div class="mb-3 text-vermillion text-3xl"><?= esc($icon) ?></div>
    <?php endif; ?>
    <h3 class="font-semibold text-lg"><?= esc($title ?? 'Feature') ?></h3>
    <p class="mt-2 text-gray-600 text-sm"><?= esc($excerpt ?? '') ?></p>
</div>