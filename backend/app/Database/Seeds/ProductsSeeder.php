<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'Streetline Hoodie',
                'description' => 'Comfortable hoodie for casual wear.',
                'price' => 49.99,
                'stock' => 20,
                'image' => 'hoodie.jpg',
                'category' => 'Clothing',
            ],
            [
                'name' => 'Streetline Sneakers',
                'description' => 'Stylish sneakers for everyday use.',
                'price' => 89.99,
                'stock' => 15,
                'image' => 'sneakers.jpg',
                'category' => 'Footwear',
            ],
            [
                'name' => 'Streetline Skateboard',
                'description' => 'High-quality skateboard for tricks and cruising.',
                'price' => 129.99,
                'stock' => 10,
                'image' => 'skateboard.jpg',
                'category' => 'Sports',
            ],
        ];

        $this->db->table('products')->insertBatch($data);
    }
}
