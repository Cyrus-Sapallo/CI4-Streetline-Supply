<?php

namespace App\Controllers;

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
}
