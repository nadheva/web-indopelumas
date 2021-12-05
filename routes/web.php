<?php

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
    return view('users.index');
});

Route::get('/about-us', function () {
    return view('users.about-us');
});

Route::get('/products', function () {
    return view('users.products');
});

Route::get('/contact-us', function () {
    return view('users.contact-us');
});

Route::get('/nebula', function () {
    return view('users.single-page');
});

Route::get('/admin', function () {
    return view('admin.index');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
