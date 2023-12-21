<?php

use App\Models\Product;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
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
// Route::resource('mhs', MahasiswaController::class);

Route::group(['middleware' => ['auth']], function () {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
});

Route::get('admin', function () {
    // return view('welcome');
    return '<h1>Helo admin</h1>';
})->middleware(['auth', 'role:admin']);


Route::get('penulis', function () {
    return '<h1>Helo penulis</h1>';
})->middleware(['auth', 'role:penulis|admin']);

Route::get('tulisan', function () {
    return view('tulisan');
})->middleware(['auth', 'role_or_permission:lihat-tulisan|penulis|admin']);
