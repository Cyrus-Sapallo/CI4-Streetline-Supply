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
        $userModel = new UsersModel();

        $userId = $session->get('user')['id'];

        $file = $this->request->getFile('profile_image');
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move(ROOTPATH . 'public/uploads', $newName);

            // Update DB
            $userModel->update($userId, ['profile_image' => $newName]);

            // ✅ Update session
            $user = $userModel->find($userId);
            $session->set('user', [
                'id' => $user->id,
                'first_name' => $user->first_name,
                'last_name' => $user->last_name,
                'email' => $user->email,
                'type' => $user->type,
                'profile_image' => $user->profile_image
            ]);
        }

        return redirect()->back();
    }
}
