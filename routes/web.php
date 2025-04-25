<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Default landing page
Route::get('/', function () {
    return view('welcome');
});

// Resourceful routes for product CRUD
Route::resource('products', ProductController::class);
