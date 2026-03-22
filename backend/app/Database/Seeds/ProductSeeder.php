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
        ];

        $this->db->table('products')->insertBatch($data);
    }
}
