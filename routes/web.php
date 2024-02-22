<?php

use App\Http\Controllers\ProductController;
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

Route::get('/', [ProductController::class,'index']);



Route::get('/productlist', [ProductController::class,'show'])->name('getProduct');

Route::post('/addproduct', [ProductController::class,'store'])->name('addProduct');

Route::get('/addproduct', [ProductController::class,'create'])->name('createProduct');

Route::get('/search', [ProductController::class,'search']);

Route::get('/editproduct/{id}', [ProductController::class,'edit'])->name('editProduct');

Route::put('/updateproduct/{id}', [ProductController::class,'update'])->name('updateProduct');



Route::get('/delete/{id}', [ProductController::class,'destroy'])->name('deleteProduct');






