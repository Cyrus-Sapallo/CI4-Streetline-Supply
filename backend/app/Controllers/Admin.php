<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function dashboard()
    {
        return view('admin/dashboard');
    }

    public function services()
    {
        return view('admin/services');
    }

    public function accounts()
    {
        return view('admin/accounts');
    }

    public function requests()
    {
        return view('admin/requests');
    }
}
