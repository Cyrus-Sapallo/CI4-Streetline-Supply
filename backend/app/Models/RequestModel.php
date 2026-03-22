<?php

namespace App\Models;

use CodeIgniter\Model;

class RequestModel extends Model
{
    protected $table = 'requests';

    protected $allowedFields = [
        'user_id',
        'product_id',
        'service',
        'status',
        'created_at'
    ];
}
