<?php

use App\Http\Controllers\cartController;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/add', [ProductController::class, 'create']);

//route edit & destroy
Route::get('/product/{id}/edit', [ProductController::class, 'edit']);
Route::get('/product/{id}/destroy', [ProductController::class, 'destroy']);

// api eror
Route::post('/product', [ProductController::class, 'store']);

// update data
Route::put('/product/{id}', [ProductController::class, 'update']);

//cart
Route::post('/layouts', [cartController::class, 'add_to_cart']);
