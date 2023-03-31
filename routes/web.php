<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SauceController;
use App\Models\Sauce;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/api/sauces', [SauceController::class, 'index']);

Route::get('/api/sauces/:id', [SauceController::class, 'show']);

Route::post('/api/sauces/:id', [SauceController::class, 'store']);

Route::delete('/api/sauces/:id', [SauceController::class, 'destroy']);

Route::post('/api/sauces/:id/like', [SauceController::class, 'like']);

Route::get('/api/sauces', [SauceController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
