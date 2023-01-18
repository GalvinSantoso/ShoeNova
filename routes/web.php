<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;



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
Route::get('/detail/{id}',[ProductController::class, 'detail' ]); 
Route::get('/category/{category_id}', [ProductController::class, 'category'])->name('category');

//manage product

Route::middleware(['admin'])->group(function () {
    Route::get('/manage', [AdminController::class, 'manage']);
    // update
    Route::get('/manage/update/{product_id}', [AdminController::class, 'updateProduct'])->name('update');
    Route::put('/manage/update/{product_id}', [AdminController::class, 'updateProductAction'])->name('updateAction');
    // delete
    Route::delete('/manage/delete/{product_id}', [AdminController::class, 'deleteProduct'])->name('delete');
    //add
    Route::get('/addProduct', [AdminController::class, 'addProduct']);
    Route::post('/addProduct', [AdminController::class, 'store']);
    
    
});




// cart
Route::get('/cartlist',[CartController::class, 'cartList'])->middleware('customer'); 
Route::post('/add_to_cart',[CartController::class, 'addToCart']); 
Route::delete('/removeCart/{id}', [CartController::class, 'removeCart']);

Route::get('/transactionHistory', [TransactionController::class, 'index']);
Route::post('/transactionHistory', [TransactionController::class, 'checkOut']);



