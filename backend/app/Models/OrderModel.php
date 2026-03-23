<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model
{
    protected $table            = 'orders';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'user_id',
        'customer_name', 
        'email', 
        'phone', 
        'address', 
        'shipping_method', 
        'shipping_cost', 
        'payment_method', 
        'total_amount', 
        'status'
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // Validation
    protected $validationRules      = [
        'customer_name' => 'required',
        'email'         => 'required|valid_email',
        'phone'         => 'required',
        'address'       => 'required',
        'shipping_method' => 'required|in_list[delivery,pickup]',
        'payment_method'  => 'required|in_list[cod,ewallet]',
        'total_amount'    => 'required|decimal',
    ];
}
