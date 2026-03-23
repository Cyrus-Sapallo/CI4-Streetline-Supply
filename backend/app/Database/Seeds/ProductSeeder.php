<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $data = [
            // 🛹 Decks
            [
                'name' => 'Female Skate Deck Pro',
                'price' => 120,
                'image' => 'images/shop/skate1.png',
                'category' => 'Decks',
            ],
            [
                'name' => 'Street Demon Skate Deck Pro',
                'price' => 65,
                'image' => 'images/shop/skate2.png',
                'category' => 'Decks',
            ],
            [
                'name' => 'Toy Machine Skate Deck Pro',
                'price' => 30,
                'image' => 'images/shop/skate3.png',
                'category' => 'Decks',
            ],

            // 👕 Clothing
            [
                'name' => 'Streetline Hoodie Black',
                'price' => 55,
                'image' => 'images/shop/Streetline Hoodie Black.jpg',
                'category' => 'Clothing',
            ],

            // 🧢 Accessories
            [
                'name' => 'Skate Cap Black',
                'price' => 18,
                'image' => 'images/shop/Skate Cap Black.jpg',
                'category' => 'Accessories',
            ],
            // Additional items from dev2
            [
                'name'        => 'Skate and Destroy',
                'slug'        => 'skate-and-destroy',
                'excerpt'     => 'Durable skateboard parts and accessories built for every ride.',
                'description' => 'Complete skate setup for daily use with premium parts.',
                'price'       => 120.00,
                'image'       => 'images/snd.jpg',
                'category'    => 'Accessories',
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'name'        => 'Hoodside',
                'slug'        => 'hoodside',
                'excerpt'     => 'Streetwear for skaters — comfort, style, and attitude.',
                'description' => 'A comfortable hoodie made for long skate sessions.',
                'price'       => 65.00,
                'image'       => 'images/hs.jpg',
                'category'    => 'Clothing',
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'name'        => 'Grind Supply',
                'slug'        => 'grind-supply',
                'excerpt'     => 'Essential tools and gear every skater needs.',
                'description' => 'T-tool, wax, spare bearings, and more.',
                'price'       => 25.00,
                'image'       => 'images/access.jpg',
                'category'    => 'Accessories',
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ]
        ];
        $this->db->table('products')->insertBatch($data);
    }
}
