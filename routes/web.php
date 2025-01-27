<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TractorController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Models\Tractor;
Route::get('/', function () {
    return view('indexes.index');
});

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...

]);


Route::get('about-us', [HomeController::class, 'aboutus'])->name('about-us');
Route::get('contact-us', [HomeController::class, 'contactus'])->name('contact-us');
Route::get('a', [HomeController::class, 'index'])->name('index');
Route::get('try', [TractorController::class, 'tracindex'])->name('trac.index');


//Route::get('', [TractorController::class, 'layoutproducts'])->name('layout2.tractors');
Route::get('aushdjahsd', function () {
    return view('indexes.layout2'); // Данные `$tractors` уже автоматически доступны
})->name('layout2.tractors');
Route::get('catalogs', [App\Http\Controllers\TractorController::class, 'catalog'])->name('catalogs.index');
Route::get('catalogs/{tractor}', [App\Http\Controllers\TractorController::class, 'catalogproduct'])->name('catalogs.show');

Route::get('/blog-posts', [App\Http\Controllers\BlogController::class, 'blogpost'])->name('blogpost');

Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('admin-home', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::get('/video', [App\Http\Controllers\VideoController::class, 'index'])->name('videosindex');
    Route::post('/video', [App\Http\Controllers\VideoController::class, 'upload'])->name('upload');
    Route::resource('admin-home/tractors', TractorController::class);
    Route::resource('admin-home/blogs', BlogController::class);
});
