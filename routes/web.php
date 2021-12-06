<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\KomentarController;

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
})->name('landingpage');

Route::get('/artikel', function () {
    return view('users.news');
});

Route::get('/about-us', function () {
    return view('users.about-us');
})->name('aboutus');

Route::get('/products', function () {
    return view('users.products');
});

Route::get('/contact-us', function () {
    return view('users.contact-us');
})->name('contactus');

Route::get('/test', function () {
    return view('users.test');
});

Route::get('/admin', function () {
    return view('admin.index');
});
Route::resource('produk', ProdukController::class);
Route::get('product-details/{id}', [ProdukController::class, 'productDetails']);
Route::get('produk/delete/{id}', [ProdukController::class, 'delete']);
Route::resource('news', NewsController::class);
Route::get('news/delete/{id}', [NewsController::class, 'delete']);
Route::resource('komentar', KomentarController::class);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
