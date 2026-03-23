<?php

namespace App\Controllers;

use App\Models\ProductModel;
use App\Models\RequestModel;

class Admin extends BaseController
{
    public function dashboard()
    {
        $productModel = new ProductModel();
        $requestModel = new RequestModel();
        $db = \Config\Database::connect();

        $data = [
            'products' => $productModel->findAll(),
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
        $model = new RequestModel();
        $data['requests'] = $model->findAll();

        return view('admin/requests', $data);
    }

    public function saveProduct()
    {
        $validation = \Config\Services::validation();

        $validation->setRules([
            'name' => 'required|min_length[3]',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
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
            'stock' => $this->request->getPost('stock'),
            'category' => $this->request->getPost('category'),
            'image' => 'uploads/' . $newName,
        ]);

        return redirect()->to('/admin/dashboard')->with('success', 'Product added successfully');
    }

    public function editProduct($id)
    {
        $model = new ProductModel();
        $data['product'] = $model->find($id);

        return view('admin/edit_product', $data);
    }

    public function updateProduct($id)
    {
        $model = new ProductModel();

        $data = [
            'name' => $this->request->getPost('name'),
            'price' => $this->request->getPost('price'),
            'stock' => $this->request->getPost('stock'),
            'category' => $this->request->getPost('category'),
        ];

        $file = $this->request->getFile('image');

        if ($file && $file->isValid() && !$file->hasMoved()) {
            if (!is_dir('uploads')) {
                mkdir('uploads', 0777, true);
            }

            $newName = $file->getRandomName();
            $file->move('uploads', $newName);

            $data['image'] = 'uploads/' . $newName;
        }

        $model->update($id, $data);

        return redirect()->to('/admin/dashboard')->with('success', 'Product updated successfully');
    }

    public function deleteProduct($id)
    {
        $model = new ProductModel();
        $model->delete($id);

        return redirect()->to('/admin/dashboard')->with('success', 'Product deleted successfully');
    }
}