<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\crudcontroller;
use App\Http\Controllers\ProductController;

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

Route::get('/',[ProductController::class , 'index']);

Route::get('/create_product' , [ProductController::class , 'create']);

Route::post('/products' ,     [ProductController::class , 'store']);

Route::get('/products/{products}', [ProductController::class , 'show']);

Route::get('/products/{products}/edit' , [ProductController::class , 'edit']);

Route::patch('/products/{products}',[ProductController::class , 'update']);

Route::get('/products/delete/{id}',  [ProductController::class , 'destroy']);




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
