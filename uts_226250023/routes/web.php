<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProdukController;

Route::get('/', function () {
    return view('welcome');
    

Route::get('/products', [ProdukController::class, 'index']);
Route::post('/products', [ProdukController::class, 'store']);

});
