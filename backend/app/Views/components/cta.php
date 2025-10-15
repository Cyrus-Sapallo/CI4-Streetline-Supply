<?php
// components/sections/cta.php
// Call to Action section
// Props:
// $title: string
// $subtitle: string
// $button_label: string
// $button_link: string
?>

<section class="bg-vermillion px-6 py-20 text-white text-center">
    <style>
        /* 🎨 Fragmented Typography Effect */
        .fragmented-text {
            position: relative;
            display: inline-block;
            font-weight: 900;
            color: transparent;
            letter-spacing: 1px;
            background: linear-gradient(90deg, #ffffff, #ffcfcc);
            -webkit-background-clip: text;
            background-clip: text;
        }

        .fragmented-text::before,
        .fragmented-text::after {
            content: attr(data-text);
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            overflow: hidden;
        }

        .fragmented-text::before {
            color: rgba(255, 255, 255, 0.6);
            clip-path: polygon(0 0, 100% 0, 100% 45%, 0 40%);
        }

        .fragmented-text::after {
            color: rgba(0, 0, 0, 0.3);
            clip-path: polygon(0 55%, 100% 60%, 100% 100%, 0 100%);
        }
    </style>

    <div class="mx-auto max-w-3xl">
        <h2 class="mb-4 font-extrabold text-4xl tracking-tight fragmented-text"
            data-text="<?= esc($title ?? 'Ready to Elevate Your Street Style?') ?>">
            <?= esc($title ?? 'Ready to Elevate Your Street Style?') ?>
        </h2>

        <p class="mb-8 text-gray-100 text-lg">
            <?= esc($subtitle ?? 'Join Streetline Supply today and step into a culture built for movement and attitude.') ?>
        </p>

        <?= view('components/buttons/button_border', [
            'label' => $button_label ?? 'Shop Now',
            'href' => $button_link ?? '/shop'
        ]) ?>
    </div>
</section>