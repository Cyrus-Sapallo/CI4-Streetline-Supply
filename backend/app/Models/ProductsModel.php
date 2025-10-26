<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductsModel extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    protected $allowedFields = [
        'title',
        'description',
        'price',
        'image',
        'stock',
        'category',
    ];

    protected $returnType = 'array';
    protected $useTimestamps = true;
}
