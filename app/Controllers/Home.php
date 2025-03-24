<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('home');
    }

    public function about()
    {
        return view(name: 'about');
    }

    public function services()
    {
        return view(name: 'services');
    }

    public function contact()
    {
        return view(name: 'contact');
    }

    // public function index(): string
    // {
    //     return view('welcome_message');
    // }
}
