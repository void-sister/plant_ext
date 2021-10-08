<?php

use App\Http\Controllers\{
    CartController,
    PlantController,
    ProductController,
    SiteController,
};
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [SiteController::class, 'home'])->name('home');

Route::get('/plants', [PlantController::class, 'index'])->name('plants.index');
Route::get('/plants/{slug}', [PlantController::class, 'show'])->name('plants.show');
Route::post('/plants/{slug}/add-to-cart', [PlantController::class, 'addToCart'])->name('plants.add-to-cart');

Route::get('/products/{category}', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{category}/{product}', [ProductController::class, 'show'])->name('products.show');

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::put('/cart/update', [CartController::class, 'update'])->name('cart.update');
Route::delete('/cart/remove', [CartController::class, 'remove'])->name('cart.remove');
