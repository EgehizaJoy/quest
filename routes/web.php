<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;

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




//Route::get('detail', function () { return view('layouts.detail');});
/*Route::get('/logout', function () {
    Session::forget('user');
    return redirect()->back();
});*/

Route::get('/logout', function () {
    Session::forget('user');
    return back();
});

Route::resource('/adproducts',productController::class);

Route::get("/det/{id}", [App\Http\Controllers\ProductController::class, 'det'])->name('det');

Route::get('/products', [App\Http\Controllers\ProductController::class, 'products'])->name('products');

Route::get("/detail/{id}", [App\Http\Controllers\ProductController::class, 'detail'])->name('detail');

Route::post("add_to_cart",[App\Http\Controllers\CartController::class,'addToCart']);

Route::post("login",[App\Http\Controllers\UserController::class,'login']);

Route::post("register",[App\Http\Controllers\UserController::class,'register']);

Route::get("checkout",[App\Http\Controllers\CartItemsController::class,'cartList']);

Route::get("removecart/{id}",[App\Http\Controllers\CartItemsController::class,'removeCart']); 

//Route::get("det",[App\Http\Controllers\Ttalprice::class,'orderNow']); 

//Route::any('/mpesa/stk/push/{amount}/', 'App\Http\Controllers\MpesaController@stkPush')->name('lipa');