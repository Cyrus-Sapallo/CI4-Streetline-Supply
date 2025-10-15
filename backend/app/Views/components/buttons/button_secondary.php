<?php
// components/buttons/button_secondary.php
// Secondary button — softer accent
// Props:
// $label: string
// $href: string
// $dark: boolean
// $disable: boolean
?>

<?php if ($disable ?? false): ?>
    <a href="<?= esc($href ?? '#') ?>"
        class="inline-block bg-gray-400 opacity-50 shadow px-4 py-2 rounded text-white cursor-not-allowed">
        <?= esc($label ?? 'Secondary') ?>
    </a>
<?php elseif ($dark ?? false): ?>
    <a href="<?= esc($href ?? '#') ?>"
        class="inline-block bg-rose-800 hover:bg-rose-700 shadow px-4 py-2 rounded text-white transition duration-200">
        <?= esc($label ?? 'Secondary') ?>
    </a>
<?php else: ?>
    <a href="<?= esc($href ?? '#') ?>"
        class="inline-block bg-rose-600 hover:bg-rose-500 shadow px-4 py-2 rounded text-white transition duration-200">
        <?= esc($label ?? 'Secondary') ?>
    </a>
<?php endif; ?>