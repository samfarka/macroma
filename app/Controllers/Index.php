<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Index extends BaseController
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function games()
    {
        return view('games');
    }

    public function contact()
    {
        return view('contact');
    }
}
