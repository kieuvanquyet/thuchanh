<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Models\Category;
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


// Route::resource('categories',CategoryController::class);
// Route::resource('categories/{category}',CategoryController::class);
Route::prefix('admin')->as('admin.')->group(function(){
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashbroad');
    Route::resource('categories',CategoryController::class);
    Route::resource('products',ProductController::class);
});