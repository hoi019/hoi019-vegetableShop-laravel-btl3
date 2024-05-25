<?php

use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\Client\CartController;
use App\Http\Controllers\Client\CommentController;
use App\Http\Controllers\client\EvaluateController;
use App\Http\Controllers\client\PaymentController;
use App\Http\Controllers\Client\ShopController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ManufactureController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\BillController;
use App\Http\Controllers\Admin\StatisticsController;
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
   return view('client.home.index');
});

Auth::routes();

// default
Route::get('/home', [HomeController::class, 'index'])->name('home');

// admin 
Route::middleware(['auth', 'is_admin'])->group(function () {
   Route::get('dashboard', [HomeController::class, 'adminHome'])->name('dashboard');
   Route::resource('categories', CategoryController::class);
   Route::resource('manufactures', ManufactureController::class);
   Route::resource('products', ProductController::class);
   Route::get('search-product', [ProductController::class, 'search'])->name('search');
   Route::get('search-bill', [BillController::class, 'search'])->name('search-bill');
   Route::resource('bills', BillController::class);
   Route::delete('billDelete/{id}', [BillController::class, 'billDelete'])->name('bill_delete');
   Route::resource('users', UserController::class);
   Route::resource('statistics', StatisticsController::class);
});

// Route::get('search', [ProductController::class, 'search']);
// client
Route::middleware(['auth', 'is_login'])->group(function () {
   Route::resource('carts', CartController::class);
   Route::get('add-to-cart/{id}', [CartController::class, 'addToCart'])->name('add_to_cart');
   Route::resource('payment', PaymentController::class);
   Route::get('search-shop', [ShopController::class, 'search'])->name('search-shop');
   // comment for users
   Route::resource('comments', CommentController::class);
});

//shop
Route::resource('shop', ShopController::class);
Route::get('product-detail/{id}', [ShopController::class, 'showDetail'])->name('show_detail');