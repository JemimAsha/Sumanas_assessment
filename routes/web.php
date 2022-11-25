<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubscriptionController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', function () {
    return redirect()->route('products.index');
    // return view('welcome');
});
Route::get('/home', function () {
    return redirect()->route('products.index');
    // return view('welcome');
});


Route::get('/payment/{string}/{price}', [App\Http\Controllers\PaymentController::class, 'charge'])->name('goToPayment');

Route::post('payment/process-payment/{string}/{price}', [App\Http\Controllers\PaymentController::class, 'processPayment'])->name('processPayment');


// Product
Route::middleware('auth')->prefix('products')->name('products.')->group(function(){

    Route::get('/', [ProductController::class, 'index'])->name('index');
    Route::get('show/{product}', [ProductController::class, 'show'])->name('show');

    // Route::get('/create', [ProductController::class, 'create'])->name('create');
    // Route::post('/store', [ProductController::class, 'store'])->name('store');
    // Route::get('/edit', [ProductController::class, 'edit'])->name('edit');
    // Route::put('/update/{product}', [ProductController::class, 'update'])->name('update');
    // Route::delete('/delete/{product}', [ProductController::class, 'delete'])->name('destroy');
});
