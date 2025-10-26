<?php

namespace App\Controllers;

use App\Models\ProductModel;
use CodeIgniter\Controller;

class Shop extends Controller
{
    public function index()
    {
        // ✅ Example product data (replace with DB query later)
        $products = [
            [
                'id' => 1,
                'title' => 'Streetline Deck – Redline Edition',
                'description' => 'Pro-quality 8.25" maple skateboard deck with Streetline Vermillion graphic.',
                'price' => 59.99,
                'image' => base_url('images/products/deck_redline.jpg')
            ],
            [
                'id' => 2,
                'title' => 'Hoodside Classic Hoodie',
                'description' => 'Thick fleece streetwear hoodie designed for riders. Comfortable & warm.',
                'price' => 49.99,
                'image' => base_url('images/products/hoodie_black.jpg')
            ],
            [
                'id' => 3,
                'title' => 'Grind Supply Skate Tool',
                'description' => 'Multi-purpose skate tool for quick setup adjustments.',
                'price' => 14.99,
                'image' => base_url('images/products/skate_tool.jpg')
            ],
            [
                'id' => 4,
                'title' => 'Streetline Beanie – Asphalt Gray',
                'description' => 'Rib-knit beanie with embroidered Streetline logo. Streetwear staple.',
                'price' => 24.99,
                'image' => base_url('images/products/beanie_gray.jpg')
            ],
        ];

        return view('shop/index', ['products' => $products]);
    }

    public function show($id)
    {
        // In real use, query ProductModel by ID
        $product = [
            'id' => $id,
            'title' => 'Streetline Deck – Redline Edition',
            'description' => '8.25" maple deck with our Vermillion flame design, built for street skaters.',
            'price' => 59.99,
            'image' => base_url('images/products/deck_redline.jpg'),
        ];

        return view('shop/show', ['product' => $product]);
    }

    public function cart()
    {
        // Example cart data (temporary)
        $cartItems = [
            [
                'title' => 'Streetline Deck – Redline Edition',
                'quantity' => 1,
                'price' => 59.99,
                'image' => base_url('images/products/deck_redline.jpg')
            ]
        ];

        return view('shop/cart', ['cartItems' => $cartItems]);
    }
}
