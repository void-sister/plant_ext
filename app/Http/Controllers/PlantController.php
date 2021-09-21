<?php

namespace App\Http\Controllers;

class PlantController extends Controller
{
    public function index()
    {
        return view('shop.index');
    }

    public function show($plant)
    {
        var_dump($plant);
        return view('shop.show');
    }
}
