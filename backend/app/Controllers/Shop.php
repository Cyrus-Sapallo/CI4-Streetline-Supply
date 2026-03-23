<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Shop extends BaseController
{
    public function index()
    {
        $model = new ProductModel();
        $data['products'] = $model->findAll(); // fetch from DB

        return view('user/shop/shop', $data);
    }
}
