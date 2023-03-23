<?php

use App\Http\Controllers\Administrator\ManagementUser\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArtController;
use App\Http\Controllers\PoetryController;
use App\Http\Controllers\ReviewController;

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

Auth::routes(['verify' => true]);

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/artist-showcase', [HomeController::class, 'artistShowCase'])->name('artist-showcase');
Route::get('/artist-showcase-profile/{id}', [HomeController::class, 'artistShowCaseProfile'])->name('artist-showcase-profile');
Route::get('/art-detail/{id}', [HomeController::class, 'artDetail'])->name('art-detail');
Route::get('/poetry-detail/{id}', [HomeController::class, 'poetryDetail'])->name('poetry-detail');
Route::get('/author-showcase', [HomeController::class, 'authorShowCase'])->name('author-showcase');
Route::get('/author-showcase-profile/{id}', [HomeController::class, 'authorShowCaseProfile'])->name('author-showcase-profile');
Route::post('add-review', [ReviewController::class, 'store'])->name('add-review');

Route::prefix('administrator')->group(function () {
    Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');
    Route::prefix('manage-user')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('manage.user.index');
        Route::get('create', [UserController::class, 'create'])->name('manage.user.create');
        Route::post('store', [UserController::class, 'store'])->name('manage.user.store');
        Route::get('edit/{id}',[UserController::class,'edit'])->name('manage.user.edit');
        Route::put('update/{id}', [UserController::class, 'update'])->name('manage.user.update');
        Route::delete('delete/{id}', [UserController::class, 'delete'])->name('manage.user.delete');
        Route::get('author',[UserController::class,'author'])->name('author.index');
        Route::get('create-author', [UserController::class, 'createAuthor'])->name('manage.user.createAuthor');
        Route::get('artist',[UserController::class,'artist'])->name('artist.index');
        Route::get('create-artist', [UserController::class, 'createArtist'])->name('manage.user.createArtist');
    });
    
    Route::prefix('art')->group(function () {
        Route::get('list',[ArtController::class,'index'])->name('art.index');
        Route::get('create', [ArtController::class, 'create'])->name('art.create');
        Route::post('store', [ArtController::class, 'store'])->name('art.store');
        Route::get('edit/{id}',[ArtController::class,'edit'])->name('art.edit');
        Route::post('update/{id}', [ArtController::class, 'update'])->name('art.update');
        Route::delete('delete/{id}', [ArtController::class, 'delete'])->name('art.delete');
    });
    
    Route::prefix('poetry')->group(function () {
        Route::get('list',[PoetryController::class,'index'])->name('poetry.index');
        Route::get('create', [PoetryController::class, 'create'])->name('poetry.create');
        Route::post('store', [PoetryController::class, 'store'])->name('poetry.store'); 
        Route::get('edit/{id}',[PoetryController::class,'edit'])->name('poetry.edit');
        Route::post('update/{id}', [PoetryController::class, 'update'])->name('poetry.update');
        Route::delete('delete/{id}', [PoetryController::class, 'delete'])->name('poetry.delete');
    });
});
