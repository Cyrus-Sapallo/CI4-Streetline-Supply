<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class User extends Entity
{
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $casts = [
        'account_status'  => 'boolean',
        'email_activated' => 'boolean'
    ];

    protected $attributes = [
        'first_name'      => null,
        'middle_name'     => null,
        'last_name'       => null,
        'email'           => null,
        'password_hash'   => null,
        'type'            => 'client',
        'account_status'  => 1,
        'email_activated' => 0,
        'profile_image'   => null,
    ];

    public function getFullName(): string
    {
        return trim("{$this->attributes['first_name']} {$this->attributes['middle_name']} {$this->attributes['last_name']}");
    }
}
