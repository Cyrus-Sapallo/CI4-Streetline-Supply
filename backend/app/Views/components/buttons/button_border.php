<?php
// components/buttons/button_border.php
// Border button — outlined style
// Props:
// $label: string
// $href: string
// $dark: boolean
// $disable: boolean
?>

<?php if ($disable ?? false): ?>
    <a href="<?= esc($href ?? '#') ?>"
        class="inline-block opacity-50 shadow px-4 py-2 border-2 border-gray-400 rounded text-gray-400 cursor-not-allowed">
        <?= esc($label ?? 'Bordered') ?>
    </a>
<?php elseif ($dark ?? false): ?>
    <a href="<?= esc($href ?? '#') ?>"
        class="inline-block hover:bg-white shadow px-4 py-2 border-2 border-white rounded text-white hover:text-black transition duration-200">
        <?= esc($label ?? 'Bordered') ?>
    </a>
<?php else: ?>
    <a href="<?= esc($href ?? '#') ?>"
        class="inline-block hover:bg-vermillion shadow px-4 py-2 border-2 border-vermillion rounded text-vermillion hover:text-white transition duration-200">
        <?= esc($label ?? 'Bordered') ?>
    </a>
<?php endif; ?>