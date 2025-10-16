<?php
// components/buttons/button_link.php
// Simple link-style button
// Props:
// $label: string
// $href: string
?>

<a href="<?= esc($href ?? '#') ?>" class="inline-block text-blue-600 hover:text-blue-800 underline transition">
    <?= esc($label ?? 'Learn more') ?>
</a>