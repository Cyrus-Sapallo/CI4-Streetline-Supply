<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'first_name'       => 'Ramon',
                'middle_name'      => 'D',
                'last_name'        => 'Santos',
                'email'            => 'ramon.santos@example.com',
                'password_hash'    => password_hash('password123', PASSWORD_DEFAULT),
                'type'             => 'client',
                'account_status'   => 1,
                'email_activated'  => 1,
                'profile_image'    => null,
            ],
            [
                'first_name'       => 'Liza',
                'middle_name'      => 'M',
                'last_name'        => 'Reyes',
                'email'            => 'liza.reyes@example.com',
                'password_hash'    => password_hash('password123', PASSWORD_DEFAULT),
                'type'             => 'admin',
                'account_status'   => 1,
                'email_activated'  => 1,
                'profile_image'    => null,
            ],
            [
                'first_name'       => 'Carlo',
                'middle_name'      => 'J',
                'last_name'        => 'Garcia',
                'email'            => 'carlo.garcia@example.com',
                'password_hash'    => password_hash('password123', PASSWORD_DEFAULT),
                'type'             => 'client',
                'account_status'   => 1,
                'email_activated'  => 0,
                'profile_image'    => null,
            ],
            [
                'first_name'       => 'Jessa',
                'middle_name'      => 'F',
                'last_name'        => 'Lopez',
                'email'            => 'jessa.lopez@example.com',
                'password_hash'    => password_hash('password123', PASSWORD_DEFAULT),
                'type'             => 'client',
                'account_status'   => 1,
                'email_activated'  => 1,
                'profile_image'    => null,
            ],
            [
                'first_name'       => 'Miguel',
                'middle_name'      => 'C',
                'last_name'        => 'Torres',
                'email'            => 'miguel.torres@example.com',
                'password_hash'    => password_hash('password123', PASSWORD_DEFAULT),
                'type'             => 'client',
                'account_status'   => 1,
                'email_activated'  => 0,
                'profile_image'    => null,
            ],
        ];

        $this->db->table('users')->insertBatch($users);
    }
}
