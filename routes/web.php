<?php

namespace App\Http\Controllers; //RECONOCE LOS CONTROLADORES

use Illuminate\Support\Facades\Route;



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

Route::get('/', function () {
    return view('welcome');
});




//CLIENTE PRODUCTO

Route::get('cliente/asociar/producto',[CustomerProductController::class,'asociar']);
Route::post('cliente/store',[CustomerProductController::class,'store'])->name('customer_product.store');


//PRODUCTO
Route::get('producto/listar',[ProductController::class,'listar'])->name('product.listar');
Route::get('producto/create',[ProductController::class,'create'])->name('product.create');
Route::post('producto/store',[ProductController::class,'store'])->name('product.store');
Route::get('producto/{dato}',[ProductController::class,'show'])->name('product.show');
Route::put('producto/{dato}',[ProductController::class,'update'])->name('product.update');
Route::delete('producto/{dato}',[ProductController::class,'destroy'])->name('product.destroy');
Route::get('producto/{dato}/edit',[ProductController::class,'edit'])->name('product.edit');