<?php

use App\Http\Controllers\Administrator\ManagementUser\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArtController;
use App\Http\Controllers\PoetryController;

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
Route::get('/artist-showcase-profile', [HomeController::class, 'artistShowCaseProfile'])->name('artist-showcase-profile');
Route::get('/art-detail', [HomeController::class, 'artDetail'])->name('art-detail');
Route::get('/poetry-detail', [HomeController::class, 'poetryDetail'])->name('poetry-detail');
Route::get('/author-showcase', [HomeController::class, 'authorShowCase'])->name('author-showcase');
Route::get('/author-showcase-profile', [HomeController::class, 'authorShowCaseProfile'])->name('author-showcase-profile');

Route::prefix('administrator')->group(function () {
    Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');
    Route::prefix('manage-user')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('manage.user.index');
        Route::get('create', [UserController::class, 'create'])->name('manage.user.create');
        Route::put('update/{id}', [UserController::class, 'update'])->name('manage.user.update');
        Route::delete('delete/{id}', [UserController::class, 'delete'])->name('manage.user.delete');
       
        Route::get('author',[UserController::class,'author'])->name('author.index');
        Route::get('create-author', [UserController::class, 'createAuthor'])->name('manage.user.createAuthor');
        
        Route::get('artist',[UserController::class,'artist'])->name('artist.index');
        Route::get('create-artist', [UserController::class, 'createArtist'])->name('manage.user.createArtist');
        
        Route::get('art-table',[ArtController::class,'index'])->name('art.index');
        Route::get('art-edit/{id}',[ArtController::class,'edit'])->name('art.edit');
        Route::get('create-art', [ArtController::class, 'create'])->name('art.create');
        Route::post('store-art', [ArtController::class, 'store'])->name('art.stor');
       
        Route::get('poetry-table',[PoetryController::class,'index'])->name('poetry.index');
        Route::get('create-poetry', [PoetryController::class, 'create'])->name('poetry.create');
        Route::post('store-poetry', [PoetryController::class, 'store'])->name('poetry.stor');
        
   
    });
    
});
