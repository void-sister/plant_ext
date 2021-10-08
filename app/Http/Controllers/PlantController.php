<?php

namespace App\Http\Controllers;

use App\Http\ApiService;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\RedirectResponse;

class PlantController extends Controller
{
    /**
     * @throws GuzzleException
     */
    public function index()
    {
        $api = new ApiService();
        $plants = $api->get('plant/list'); //todo

        dd($plants);

        if(!$plants) {
            //todo return smth
        }

        return view('plants.index', compact(['plants']));
    }

    /**
     * @throws GuzzleException
     */
    public function show($slug)
    {
        $api = new ApiService();
        $plant = $api->post('plant/getBySlug', [
            'slug' => $slug
        ]);

        dd($plant);

        return view('shop.show');
    }
}
