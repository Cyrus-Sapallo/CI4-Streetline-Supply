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
                'name'        => 'Female Skate Deck Pro',
                'slug'        => 'female-skate-deck-pro',
                'excerpt'     => 'Pro deck for female skaters.',
                'description' => 'Durable and lightweight deck for tricks and street riding.',
                'price'       => 120.00,
                'image'       => 'images/shop/skate1.png',
                'category'    => 'Decks',
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'name'        => 'Street Demon Skate Deck Pro',
                'slug'        => 'street-demon-skate-deck-pro',
                'excerpt'     => 'Cool pro deck for aggressive street skating.',
                'description' => 'High-performance deck built for speed and durability.',
                'price'       => 65.00,
                'image'       => 'images/shop/skate2.png',
                'category'    => 'Decks',
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'name'        => 'Toy Machine Skate Deck Pro',
                'slug'        => 'toy-machine-skate-deck-pro',
                'excerpt'     => 'Classic graphic deck for all-level skaters.',
                'description' => 'Stable deck with great pop and style.',
                'price'       => 30.00,
                'image'       => 'images/shop/skate3.png',
                'category'    => 'Decks',
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],

            // 👕 Clothing
            [
                'name'        => 'Streetline Hoodie Black',
                'slug'        => 'streetline-hoodie-black',
                'excerpt'     => 'Comfortable hoodie with a sleek design.',
                'description' => 'Warm and soft hoodie for streetwear and skate sessions.',
                'price'       => 55.00,
                'image'       => 'images/shop/Streetline Hoodie Black.jpg',
                'category'    => 'Clothing',
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],

            // 🧢 Accessories
            [
                'name'        => 'Skate Cap Black',
                'slug'        => 'skate-cap-black',
                'excerpt'     => 'Stylish black cap for skaters.',
                'description' => '100% cotton cap to protect from sun and style your outfit.',
                'price'       => 18.00,
                'image'       => 'images/shop/Skate Cap Black.jpg',
                'category'    => 'Accessories',
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
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
