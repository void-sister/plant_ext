<?php

use App\Http\Controllers\{
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

Route::get('/products/{category}', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{category}/{product}', [ProductController::class, 'show'])->name('products.show');
