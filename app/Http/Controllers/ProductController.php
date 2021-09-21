<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function index($category)
    {
        var_dump($category);

        return view('shop.index');
    }

    public function show($category, $product)
    {
        var_dump($category);
        var_dump($product);

        return view('shop.show');
    }
}
