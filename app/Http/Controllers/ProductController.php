<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function index($category)
    {
        var_dump($category);

        return view('shop.index');
    }
}
