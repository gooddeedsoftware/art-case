<?php

use App\Http\Controllers\Administrator\ManagementUser\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/artist-showcase', [HomeController::class, 'artistShowCase'])->name('artist-showcase');
Route::get('/artist-showcase-profile', [HomeController::class, 'artistShowCaseProfile'])->name('artist-showcase-profile');
Route::get('/art-detail', [HomeController::class, 'artDetail'])->name('art-detail');
Route::get('/poetry-detail', [HomeController::class, 'poetryDetail'])->name('poetry-detail');
Route::get('/author-showcase', [HomeController::class, 'authorShowCase'])->name('author-showcase');
Route::get('/author-showcase-profile', [HomeController::class, 'authorShowCaseProfile'])->name('author-showcase-profile');

Route::prefix('administrator')->group(function () {
    Route::prefix('manage-user')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('manage.user.index');
        Route::post('create', [UserController::class, 'create'])->name('manage.user.create');
        Route::put('update/{id}', [UserController::class, 'update'])->name('manage.user.update');
        Route::delete('delete/{id}', [UserController::class, 'delete'])->name('manage.user.delete');
    });
});
