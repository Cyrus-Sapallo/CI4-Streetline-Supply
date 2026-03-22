<?php

namespace App\Controllers;

class Shop extends BaseController
{
    public function index()
    {
        return view('user/shop/shop'); // 👈 matches your file
    }
}
