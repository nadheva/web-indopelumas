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
});

Route::get('/admin', function () {
    return view('admin.index');
});
Route::resource('produk', ProdukController::class);
Route::get('produk/delete/{id}', [ProdukController::class, 'delete']);
Route::resource('news', NewsController::class);
Route::get('news/delete/{id}', [NewsController::class, 'delete']);
Route::resource('komentar', KomentarController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
