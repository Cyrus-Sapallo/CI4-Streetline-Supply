
<?php

namespace App\Controllers;

use function view;

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
}
