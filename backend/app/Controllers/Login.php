<?php

namespace App\Controllers;

use App\Models\UsersModel;
use CodeIgniter\Controller;

class Login extends Controller
{
    //Login:
    // Create login function
    public function login()
    {
        //Start a Session
        $session = session();
        $request = service('request');

        //Create Validation Rules. This depends on your logic
        // Here I created rules for email and password
        $validation = \Config\Services::validation();

        // Variable comes from the HTML input id
        // Format: variable, human-readable name, rules separated by |
        // The following rule means variable email is Email which means it should not be null and must be valid email format
        $validation->setRule('email', 'Email', 'required|valid_email');

        // The following rule means variable password is named Password and it should not be null
        $validation->setRule('password', 'Password', 'required');

        //Other optional rules you can use:
        // min_length[]
        // max_length[]
        // permit_empty
        // matches[<variable name here>]

        //Transfer POST data to variable
        $post = $request->getPost();

        //If validation of email or password fails then trigger to return the input to HTML input element and set validation error messages
        if (!$validation->run($post)) {
            $session->setFlashdata('errors', $validation->getErrors());
            $session->setFlashdata('old', $post);
            return redirect()->back()->withInput();
        }

        //Extract email value to email variable
        $email = $request->getPost('email');

        //Using model we will call the database and query
        $userModel = new UsersModel();
        $user = $userModel->where('email', $email)->first();

        //Condition that there should be return value which means user is registered
        if (!$user) {
            $session->setFlashdata('errors', ['email' => 'No account found for that email']);
            $session->setFlashdata('old', ['email' => $email]);
            return redirect()->back()->withInput();
        }

        //Converting to usable array
        $userArr = is_array($user) ? $user : (method_exists($user, 'toArray') ? $user->toArray() : (array)$user);

        //Condition to check password using hash
        if (!password_verify($request->getPost('password'), $userArr['password_hash'] ?? '')) {
            $session->setFlashdata('errors', ['password' => 'Incorrect password']);
            $session->setFlashdata('old', ['email' => $email]);
            return redirect()->back()->withInput();
        }

        //Create a session making sure the user is logged in
        $session->set('user', [
            'id'           => $userArr['id'] ?? null,
            'email'        => $userArr['email'] ?? null,
            'first_name'   => $userArr['first_name'] ?? null,
            'middle_name'  => $userArr['middle_name'] ?? null,
            'last_name'    => $userArr['last_name'] ?? null,
            'type'         => $userArr['type'] ?? 'client',
            'display_name' => trim(
                ($userArr['first_name'][0] ?? '') . ' ' .
                    ($userArr['middle_name'][0] ?? '') . ' ' .
                    ($userArr['last_name'] ?? '')
            ),
        ]);

        //Conditional return depends on the type of user
        $type = strtolower($userArr['type'] ?? 'client');

        //Redirect manager to dashboard
        if ($type === 'manager') return redirect()->to('/admin/dashboard');

        //Redirect client to home
        if ($type === 'client') return redirect()->to('/');

        //Default redirect (optional)
        return redirect()->to('/');
    }

    //Create logout function
    public function logout()
    {
        //Destroy session
        $session = session();
        $session->destroy();

        //Remove session cookie
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 3600, $params['path'] ?? '/', $params['domain'] ?? '', isset($_SERVER['HTTPS']), true);

        //Redirect to home/login page
        return redirect()->to('/');
    }
}
