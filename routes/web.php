<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Session;



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
    return view('home');
});

Route::get('/about', function(){
    return view('about');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/cartlist', function () {
    return view('cartlist');
});

Route::get('/shop', function () {
    return view('shop');
});



//user
Route::post("/login", [UserController::class, 'login']);
Route::view("/register",'register');
Route::post("/register", [UserController::class, 'register']);
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});

//product
Route::get('/shop',[ProductController::class, 'index']); 
Route::get('/detail/{id}',[ProductController::class, 'detail']); 


// cart
Route::get('cartlist',[ProductController::class, 'cartList']); 
Route::post('add_to_cart',[ProductController::class, 'addToCart']); 


