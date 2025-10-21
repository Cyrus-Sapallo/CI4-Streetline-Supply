<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Entities\User;

class UserModel extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;

    // ✅ Return Entity instead of array
    protected $returnType       = User::class;

    // ✅ Enable timestamps & soft deletes
    protected $useSoftDeletes   = true;
    protected $useTimestamps    = true;

    // ✅ DB fields (excluding timestamps & deleted_at)
    protected $allowedFields    = [
        'first_name',
        'middle_name',
        'last_name',
        'email',
        'password_hash',
        'type',
        'account_status',
        'email_activated',
        'profile_image',
    ];

    // ✅ Validation rules
    protected $validationRules = [
        'email'         => 'required|valid_email|is_unique[users.email,id,{id}]',
        'first_name'    => 'required|min_length[2]',
        'last_name'     => 'required|min_length[2]',
        'password_hash' => 'permit_empty|min_length[8]',
    ];

    // ✅ Automatically hash password before saving
    protected $beforeInsert = ['hashPassword'];
    protected $beforeUpdate = ['hashPassword'];

    protected function hashPassword(array $data)
    {
        if (!isset($data['data']['password_hash']) || empty($data['data']['password_hash'])) {
            return $data;
        }

        $data['data']['password_hash'] = password_hash($data['data']['password_hash'], PASSWORD_DEFAULT);
        return $data;
    }
}
