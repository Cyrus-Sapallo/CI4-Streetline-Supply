<style>
    /* 🎨 Fragmented Typography Effect */
    .fragmented-text {
        position: relative;
        display: inline-block;
        font-weight: 900;
        letter-spacing: 1px;
        color: transparent;
        background: linear-gradient(90deg, #ff4c29, #ffffff);
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
        color: #ff4c29;
        overflow: hidden;
        z-index: -1;
    }

    .fragmented-text::before {
        clip-path: polygon(0 0, 100% 0, 100% 48%, 0 42%);
        opacity: 0.6;
        transform: translateY(-1px);
    }

    .fragmented-text::after {
        clip-path: polygon(0 58%, 100% 62%, 100% 100%, 0 100%);
        opacity: 0.8;
        transform: translateY(1px);
    }
</style>