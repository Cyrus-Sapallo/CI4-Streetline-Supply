<?php
$hash = '$2y$10$.6.zYACDgzXhkHydogFP8eRQVfDoFGhUIiAa.uIuJCIZtpwwn7VCa'; // paste your user's hash here

if (password_verify('yourpassword', $hash)) {
    echo "✅ Password matches";
} else {
    echo "❌ Password incorrect";
}
