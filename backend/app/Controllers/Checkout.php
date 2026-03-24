<?php

namespace App\Controllers;

use App\Models\OrderModel;
use App\Models\OrderItemModel;

class Checkout extends BaseController
{
    public function index()
    {
        $session = session();
        $cart = $session->get('cart') ?? [];

        if (empty($cart)) {
            return redirect()->to('/cart')->with('error', 'Your cart is empty.');
        }

        $subtotal = 0;
        foreach ($cart as $item) {
            $subtotal += $item['price'] * $item['quantity'];
        }

        return view('checkout/index', [
            'cart'     => $cart,
            'subtotal' => $subtotal,
        ]);
    }

    public function process()
    {
        $session = session();
        $cart = $session->get('cart') ?? [];

        if (empty($cart)) {
            return redirect()->to('/cart');
        }

        $rules = [
            'customer_name'   => 'required|min_length[3]',
            'email'           => 'required|valid_email',
            'phone'           => 'required',
            'address'         => 'required',
            'shipping_method' => 'required|in_list[delivery,pickup]',
            'payment_method'  => 'required|in_list[cod,ewallet]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $shippingMethod = $this->request->getPost('shipping_method');
        $shippingCost = ($shippingMethod === 'delivery') ? 15.00 : 0.00;

        $subtotal = 0;
        foreach ($cart as $item) {
            $subtotal += $item['price'] * $item['quantity'];
        }
        $totalAmount = $subtotal + $shippingCost;

        $orderModel = new OrderModel();
        $orderData = [
            'user_id'         => session()->get('user_id') ?? null,
            'customer_name'   => $this->request->getPost('customer_name'),
            'email'           => $this->request->getPost('email'),
            'phone'           => $this->request->getPost('phone'),
            'address'         => $this->request->getPost('address'),
            'shipping_method' => $shippingMethod,
            'shipping_cost'   => $shippingCost,
            'payment_method'  => $this->request->getPost('payment_method'),
            'total_amount'    => $totalAmount,
            'status'          => 'pending',
        ];

        $orderId = $orderModel->insert($orderData);

        if ($orderId) {
            $orderItemModel = new OrderItemModel();
            foreach ($cart as $item) {
                $orderItemModel->insert([
                    'order_id'   => $orderId,
                    'product_id' => $item['id'],
                    'quantity'   => $item['quantity'],
                    'price'      => $item['price'],
                ]);
            }

            // Clear Cart
            $session->remove('cart');

            return redirect()->to('/checkout/success/' . $orderId);
        }

        return redirect()->back()->with('error', 'Failed to place order. Please try again.');
    }

    public function success($orderId)
    {
        $orderModel = new OrderModel();
        $order = $orderModel->find($orderId);

        if (!$order) {
            return redirect()->to('/shop');
        }

        $orderItemModel = new OrderItemModel();
        $items = $orderItemModel->where('order_id', $orderId)->findAll();

        return view('checkout/success', [
            'order' => $order,
            'items' => $items,
        ]);
    }
}
