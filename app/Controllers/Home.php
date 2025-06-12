<?php

namespace App\Controllers;
use App\Models\ProductModel;

class Home extends BaseController
{

    protected $product;

    public function __construct()
    {
        helper('number');
        helper('form');
        $this->product = new ProductModel();
    }

    public function index(): string
    {
        $product = $this->product->findAll();
        $data['product'] = $product;
        return view('v_home', $data);
        // return view('layout');
    }

    public function produk()
    {
        $product = $this->product->findAll();
        $data['product'] = $product;
        return view('v_produk', $data);
    }

    public function keranjang()
    {
        return view('v_keranjang');
    }

    public function about()
    {
        return view('about');
    }

    public function services()
    {
        return view('services');
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
