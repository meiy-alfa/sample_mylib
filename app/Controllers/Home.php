<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Home extends BaseController
{

    public function index()
    {
        if(session('id'))
        {
            return redirect()->to(base_url('home'));
        }
        return view('login');
    }

    public function home()
    {
        if(!session('id'))
        {
            return redirect()->to(base_url())->with('error','Anda Harus Login');
        }
        return view('home');
    }
}
