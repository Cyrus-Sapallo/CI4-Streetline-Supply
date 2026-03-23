<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Users extends BaseController
{
    public function index()
    {
        return view('user/landing');
    }

    public function login()
    {
        return view('user/loginPage');
    }

    public function signup()
    {
        return view('user/signup');
    }

    public function moodboard()
    {
        return view('user/moodboardPage');
    }

    public function roadmap()
    {
        return view('user/roadmapPage');
    }

    public function profile()
    {
        $session = session();
        $sessionUser = $session->get('user');

        if (!$sessionUser || !isset($sessionUser['id'])) {
            return redirect()->to('/login');
        }

        $userModel = new UsersModel();
        $user = $userModel->find($sessionUser['id']);

        return view('user/profilePage', [
            'user' => $user
        ]);
    }

    public function updateProfile()
    {
        $session = session();
        $sessionUser = $session->get('user');

        $userModel = new UsersModel();

        $data = [
            'first_name' => $this->request->getPost('first_name'),
            'last_name'  => $this->request->getPost('last_name'),
        ];

        $userModel->update($sessionUser['id'], $data);

        return redirect()->to('/profile');
    }

    public function uploadProfile()
    {
        $session = session();
        $sessionUser = $session->get('user');

        $file = $this->request->getFile('profile_image');

        if ($file && $file->isValid()) {
            $newName = $file->getRandomName();
            $file->move('uploads/', $newName);

            $userModel = new UsersModel();
            $userModel->update($sessionUser['id'], [
                'profile_image' => $newName
            ]);
        }

        return redirect()->to('/profile');
    }
}
