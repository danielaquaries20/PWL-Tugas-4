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
        return view('about');
    }

    public function services()
    {
        return view( 'services');
    }

    public function contact()
    {
        return view('contact');
    }

    public function description()
    {
        return view('description');
    }

    // public function index(): string
    // {
    //     return view('welcome_message');
    // }
}
