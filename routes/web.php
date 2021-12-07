<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\IsiProdukController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\KomentarController;
use App\Http\Controllers\TestimonialsController;
use App\Http\Controllers\LandingPageController;
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


Route::get('', [LandingPageController::class, 'home'])->name('landingpage');
Route::get('artikel', [LandingPageController::class, 'artikel'])->name('artikel');
Route::get('/about-us', function () {
    return view('users.about-us');
})->name('aboutus');
Route::get('/products', function () {
    return view('users.products');
});
Route::get('/contact-us', function () {
    return view('users.contact-us');
})->name('contactus');
Route::get('product/{id}', [LandingPageController::class, 'details'])->name('details');
Route::get('news-article/{id}', [LandingPageController::class, 'newsDetail'])->name('newsDetail');


//Admin
Route::middleware(['auth'])->group(function () {

    Route::get('/admin', function () {
        return view('admin.index');
    });
    Route::resource('produk', ProdukController::class);
    Route::resource('isiproduk', IsiProdukController::class);

    // Isi Produk 
    Route::get('tambah-isi-produk/{id}', [IsiProdukController::class, 'create'])->name('tambahisiproduk');
    Route::get('edit-isi-produk/{id}', [IsiProdukController::class, 'edit']);
    Route::put('update-isi-produk/{id}', [IsiProdukController::class, 'update'])->name('updateisiproduk');
    Route::get('delete-isi-produk/{id}', [IsiProdukController::class, 'delete'])->name('deleteisiproduk');

    Route::get('produk/delete/{id}', [ProdukController::class, 'delete']);

    Route::get('product-details/{id}', [IsiProdukController::class, 'productDetails'])->name('showdata');

    Route::resource('news', NewsController::class);
    Route::get('news/delete/{id}', [NewsController::class, 'delete']);
    Route::get('news/show/{id}', [NewsController::class, 'show']);
    Route::resource('komentar', KomentarController::class);
    Route::resource('testimonials', TestimonialsController::class);
    Route::get('testimonials/delete/{id}', [testimonialsController::class, 'delete']);

    Route::get('/dashboard', function () {
        return view('admin.produk.index');
    })->middleware(['auth'])->name('dashboard');
});

require __DIR__ . '/auth.php';


