<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user_postController;
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

Route::get('/', [user_postController::class, 'index'])->name('Auth.Login');

Route::get('welcome', [user_postController::class, 'login'])->name('userpost.login');

Route::put('roles/admin', [HomeController::class, 'update'])->name('account.update');

// Route::get('userpost', [user_postController::class, 'index'])->name('userpost.index');
Route::get('roles/admin', [HomeController::class, 'create'])->name('admin.create');
Route::post('roles/admin', [HomeController::class, 'adminstore'])->name('admin.store');

Route::get('userpost/{userpost}/edit', [user_postController::class, 'edit'])->name('userpost.edit');
Route::put('userpost/{userpost}/update', [user_postController::class, 'update'])->name('userpost.update');
Route::delete('userpost/{userpost}/destroy', [user_postController::class, 'destroy'])->name('userpost.destroy');

//portfolio
Route::get('portfolio/android', [user_postController::class, 'android'])->name('portfolio.android');
Route::get('portfolio/website', [user_postController::class, 'website'])->name('portfolio.website');
Route::get('portfolio/system', [user_postController::class, 'system'])->name('portfolio.system');

Route::get('header', [user_postController::class, 'mainheader'])->name('main.header');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//authenticator
Auth::routes();

//Normal Users Routes List
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

//Admin Routes List
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/roles/admin', [HomeController::class, 'admin'])->name('admin.home');
});

//Admin Routes List
Route::middleware(['auth', 'user-access:manager'])->group(function () {
    Route::get('/roles/client', [HomeController::class, 'client'])->name('manager.home');
});
