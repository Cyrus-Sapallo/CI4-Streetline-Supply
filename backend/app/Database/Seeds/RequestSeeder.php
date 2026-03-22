<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RequestSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'user_id' => 1,
                'service' => 'Skateboard Repair',
                'status' => 'pending',
            ],
            [
                'user_id' => 2,
                'service' => 'Deck Replacement',
                'status' => 'completed',
            ],
        ];

        $this->db->table('requests')->insertBatch($data);
    }
}
