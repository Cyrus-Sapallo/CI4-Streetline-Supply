<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Auth extends BaseController
{
    // Create signup function
    public function signup()
    {
        // Create session
        $session = session();

        // Extract data from frontend
        $request = service('request');
        $post = $request->getPost();

        // Create validation rules
        $validation = \Config\Services::validation();
        $validation->setRule('first_name', 'First Name', 'required|min_length[2]|max_length[50]');
        $validation->setRule('last_name', 'Last Name', 'required|min_length[2]|max_length[50]');
        $validation->setRule('email', 'Email', 'required|valid_email|is_unique[users.email]');
        $validation->setRule('password', 'Password', 'required|min_length[6]');
        $validation->setRule('confirm_password', 'Confirm Password', 'required|matches[password]');

        // Check for errors, return with messages if validation fails
        if (! $validation->run($post)) {
            $session->setFlashdata('errors', $validation->getErrors());
            $session->setFlashdata('old', $post);
            return redirect()->back()->withInput();
        }

        // Use UsersModel to prepare data for database insertion
        $userModel = new UsersModel();

        $data = [
            'first_name' => $post['first_name'],
            'middle_name' => $post['middle_name'] ?? null, // nullable data
            'last_name' => $post['last_name'],
            'email' => $post['email'],
            'password_hash' => password_hash($post['password'], PASSWORD_DEFAULT),
            'type' => 'client',
            'account_status' => 1,
            'email_activated' => 0,
        ];

        // Insert data into the database
        $inserted = $userModel->insert($data);

        // Redirect based on success
        if ($inserted) {
            $session->setFlashdata('success', 'Account created successfully. Please log in.');
            return redirect()->to('/login');
        } else {
            $session->setFlashdata('errors', ['Unable to create account. Please try again.']);
            return redirect()->back()->withInput();
        }
    }
}
