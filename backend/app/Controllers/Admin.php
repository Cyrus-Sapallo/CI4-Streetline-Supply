<?php

namespace App\Controllers;

use App\Models\ProductModel;
use App\Models\RequestModel;

class Admin extends BaseController
{
    // DASHBOARD (DYNAMIC)
    public function dashboard()
    {
        $productModel = new ProductModel();
        $requestModel = new RequestModel();
        $db = \Config\Database::connect();

        $data = [
            'products' => $productModel->findAll(),

            // ✅ DASHBOARD STATS
            'stats' => [
                [
                    'title' => 'Total Products',
                    'value' => $productModel->countAll(),
                    'icon' => '📦'
                ],
                [
                    'title' => 'Total Users',
                    'value' => $db->table('users')->countAll(),
                    'icon' => '👤'
                ],
                [
                    'title' => 'Total Requests',
                    'value' => $requestModel->countAll(),
                    'icon' => '🛒'
                ],
            ],

            // (OPTIONAL) recent requests
            'requests' => $requestModel
                ->orderBy('id', 'DESC')
                ->findAll(5),
        ];

        return view('admin/dashboard', $data);
    }

    public function services()
    {
        return view('admin/services');
    }

    public function accounts()
    {
        return view('admin/account');
    }

    public function requests()
    {
        $requestModel = new RequestModel();

        $data['requests'] = $requestModel->findAll();

        return view('admin/requests', $data);
    }

    // SAVE PRODUCT
    public function saveProduct()
    {
        $validation = \Config\Services::validation();

        $validation->setRules([
            'name' => 'required|min_length[3]',
            'price' => 'required|numeric',
            'category' => 'required'
        ]);

        if (!$validation->run($this->request->getPost())) {
            return redirect()->back()->with('error', $validation->getErrors());
        }

        $file = $this->request->getFile('image');

        if (!$file->isValid() || $file->hasMoved()) {
            return redirect()->back()->with('error', 'Invalid image upload');
        }

        if (!is_dir('uploads')) {
            mkdir('uploads', 0777, true);
        }

        $newName = $file->getRandomName();
        $file->move('uploads', $newName);

        $model = new ProductModel();

        $model->insert([
            'name' => $this->request->getPost('name'),
            'price' => $this->request->getPost('price'),
            'category' => $this->request->getPost('category'),
            'image' => 'uploads/' . $newName,
        ]);

        return redirect()->to('/admin/dashboard')
            ->with('success', 'Product added successfully');
    }
}
