<?php

namespace App\Controllers;

use App\Models\ProductModel;

class ProductController extends BaseController
{
    public function view($id)
    {
        $model = new ProductModel();

        $product = $model->find($id);

        if (!$product) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('user/shop/product', [
            'product' => $product
        ]);
    }
}
