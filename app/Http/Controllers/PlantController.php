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

    /**
     * Add to cart specified plant.
     *
     * @param string $slug
     * @param int $qty
     * @return RedirectResponse
     * @throws GuzzleException
     */
    public function addToCart(string $slug, int $qty = 1): RedirectResponse
    {
        $api = new ApiService();
        $plant = $api->post('plant/getBySlug', [
            'slug' => $slug
        ]);

        $cart = session()->get('cart', []);

        if(isset($cart[$slug])) {
            $cart[$slug]['quantity']++;
        } else {
            $cart[$slug] = [
                'name' => $plant['plant_name'],
                'quantity' => $qty,
                'price' => $plant['price'],
            ];
        }

        session()->put('cart', $cart);

        if(!$cart) {
            return redirect()->back()->with('error', 'Plant not added to cart');
        }

        return redirect()->back()->with('success', 'Plant added to cart successfully!');
    }
}
