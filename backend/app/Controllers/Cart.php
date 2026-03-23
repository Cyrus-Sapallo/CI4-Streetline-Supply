<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Cart extends BaseController
{
    public function index()
    {
        $session = session();
        $cart = $session->get('cart') ?? [];

        $subtotal = 0;
        foreach ($cart as $item) {
            $subtotal += $item['price'] * $item['quantity'];
        }

        // Apply a mock shipping cost if cart is not empty
        $shipping = empty($cart) ? 0 : 15.00;
        $total = $subtotal + $shipping;

        return view('cart/index', [
            'cart'     => $cart,
            'subtotal' => $subtotal,
            'shipping' => $shipping,
            'total'    => $total
        ]);
    }

    public function add()
    {
        $session = session();
        $cart = $session->get('cart') ?? [];

        $productId = $this->request->getPost('product_id');
        $quantity = (int) $this->request->getPost('quantity') ?: 1;

        $productModel = new ProductModel();
        $product = $productModel->find($productId);

        if ($product) {
            // Check if product already in cart
            if (isset($cart[$productId])) {
                $cart[$productId]['quantity'] += $quantity;
            } else {
                $cart[$productId] = [
                    'id'       => $product['id'],
                    'name'     => $product['name'],
                    'price'    => $product['price'],
                    'image'    => $product['image'],
                    'quantity' => $quantity
                ];
            }
            $session->set('cart', $cart);
        }

        return redirect()->back()->with('message', 'Product added to cart!');
    }

    public function update()
    {
        $session = session();
        $cart = $session->get('cart') ?? [];

        $productId = $this->request->getPost('product_id');
        $quantity = (int) $this->request->getPost('quantity');

        if (isset($cart[$productId])) {
            if ($quantity > 0) {
                $cart[$productId]['quantity'] = $quantity;
            } else {
                unset($cart[$productId]);
            }
            $session->set('cart', $cart);
        }

        return redirect()->to('/cart');
    }

    public function remove()
    {
        $session = session();
        $cart = $session->get('cart') ?? [];

        $productId = $this->request->getPost('product_id');

        if (isset($cart[$productId])) {
            unset($cart[$productId]);
            $session->set('cart', $cart);
        }

        return redirect()->to('/cart');
    }
}
