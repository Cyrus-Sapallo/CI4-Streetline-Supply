<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Auth extends BaseController
{
    // Logout Function
    public function logout()
    {
        // Destroy session
        session()->destroy();

        // Remove session cookie
        $params = session_get_cookie_params();
        setcookie(
            session_name(),      // Session name
            '',                  // Empty value
            time() - 3600,       // Expire in the past
            $params['path'] ?? '/',
            $params['domain'] ?? '',
            isset($_SERVER['HTTPS']),
            true
        );

        // Redirect to homepage after logout
        return redirect()->to('/');
    }

    // Sign-Up Function
    public function signup()
    {
        $session = session();
        $request = service('request');
        $validation = \Config\Services::validation();

        $post = $request->getPost();

        // Set Validation Rules for Sign-Up
        $validation->setRules([
            'first_name' => 'required|min_length[2]',
            'last_name' => 'required|min_length[2]',
            'email' => 'required|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[8]',
        ]);

        // If validation fails, show errors and return input
        if (! $validation->run($post)) {
            $session->setFlashdata('errors', $validation->getErrors());
            $session->setFlashdata('old', $post);
            return redirect()->back()->withInput();
        }

        // Prepare data for the new user
        $userModel = new UsersModel();
        $data = [
            'first_name' => $post['first_name'],
            'middle_name' => $post['middle_name'] ?? null,
            'last_name' => $post['last_name'],
            'email' => $post['email'],
            'password_hash' => password_hash($post['password'], PASSWORD_DEFAULT), // Hash the password
            'type' => 'client',  // Default user type
            'account_status' => 1,  // Active account
            'email_activated' => 0,  // Not activated by email yet
        ];

        // Insert user data into the database
        if ($userModel->insert($data)) {
            $session->setFlashdata('success', 'Account created successfully. Please login.');
            return redirect()->to('/login');
        } else {
            $session->setFlashdata('errors', ['database' => 'Failed to create account. Try again later.']);
            return redirect()->back()->withInput();
        }
    }
}
