<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Shop extends BaseController
{
    public function index()
    {
        $productModel = new ProductModel();
        $products = $productModel->findAll();

        return view('shop/index', ['products' => $products]);
    }
}
