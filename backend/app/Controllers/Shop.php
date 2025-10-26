<?php

namespace App\Controllers;

use App\Models\ProductsModel;
use CodeIgniter\Controller;

class Shop extends Controller
{
    protected $session;

    public function __construct()
    {
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        // Redirect to login if not logged in
        if (!$this->session->get('isLoggedIn')) {
            // Store intended page for redirect after login
            $this->session->set('redirectAfterLogin', base_url('shop'));
            return redirect()->to(base_url('login'));
        }

        $productModel = new ProductsModel();
        $products = $productModel->findAll(); // Fetch all products

        return view('shop/index', [
            'products' => $products
        ]);
    }

    public function show($id)
    {
        // Redirect to login if not logged in
        if (!$this->session->get('isLoggedIn')) {
            $this->session->set('redirectAfterLogin', base_url("shop/$id"));
            return redirect()->to(base_url('login'));
        }

        $productModel = new ProductsModel();
        $product = $productModel->find($id);

        if (!$product) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Product not found");
        }

        return view('shop/show', [
            'product' => $product
        ]);
    }
}
