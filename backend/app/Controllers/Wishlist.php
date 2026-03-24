<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Wishlist extends BaseController
{
    public function index()
    {
        $wishlist = session()->get('wishlist') ?? [];

        return view('user/wishlist', [
            'wishlist' => $wishlist
        ]);
    }

    public function add($id)
    {
        $model = new ProductModel();
        $product = $model->find($id);

        if (!$product) {
            return redirect()->to(base_url('shop'))->with('error', 'Product not found.');
        }

        $wishlist = session()->get('wishlist') ?? [];

        // Prevent duplicates
        $wishlist[$id] = $product;

        session()->set('wishlist', $wishlist);

        return redirect()->back()->with('success', 'Product added to wishlist.');
    }

    public function remove($id)
    {
        $wishlist = session()->get('wishlist') ?? [];

        if (isset($wishlist[$id])) {
            unset($wishlist[$id]);
            session()->set('wishlist', $wishlist);
        }

        return redirect()->to(base_url('wishlist'))->with('success', 'Product removed from wishlist.');
    }
}