<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index');
    }

    public function home(){
        return view ('homepage');
    }

    public function bayar(){
        return view ('bayar');
    }
    
}
