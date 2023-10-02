<?php

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
// Home
Route::get('/', function () {
    return view('pages/home');
});
// Profile
Route::get('/profile', function () {
    return view('pages/profile');
});
// product
Route::get('/product', function () {
    return view('pages/product');
});
// Contact
Route::get('/contact', function () {
    return view('pages/contact');
});
