<?php
// components/buttons/button_primary.php
// Primary button — Vermillion accent
// Props:
// $label: string
// $href: string
// $disable: boolean
?>

<?php if ($disable ?? false): ?>
    <a href="<?= esc($href ?? '#') ?>"
        class="inline-flex justify-center items-center bg-vermillion opacity-60 shadow px-5 py-3 rounded-md font-semibold text-white transition duration-200 cursor-not-allowed"
        aria-disabled="true" role="button">
        <?= esc($label ?? 'Primary Action') ?>
    </a>
<?php else: ?>
    <a href="<?= esc($href ?? '#') ?>"
        class="inline-flex justify-center items-center bg-vermillion hover:bg-red-800 shadow px-5 py-3 rounded-md font-semibold text-white transition duration-200">
        <?= esc($label ?? 'Primary Action') ?>
    </a>
<?php endif; ?>