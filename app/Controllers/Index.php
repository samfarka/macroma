<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Index extends BaseController


{

    private  $data;
    public function index()
    {
        $data["title"] = "home";
        return view('index',$data);
    }

    public function about()
    {
        $data["title"] = "about";
        return view('about',$data);
    }

    public function games()
    {
        $data["title"] = "games";
        return view('games',$data);
    }

    public function contact()
    {
        $data["title"] = "contact";
        return view('contact',$data);
    }
}
