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
// главная
Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->name('index');
Route::get('/about', '\App\Http\Controllers\Pages_Controller@about')->name('about');

Route::get('/contact', '\App\Http\Controllers\Pages_Controller@contact')->name('contact');
Route::get('/business', '\App\Http\Controllers\Pages_Controller@business')->name('business');
Route::get('/civilian', '\App\Http\Controllers\Pages_Controller@civilian')->name('civilian');
// для новостей

Route::prefix("post")->group(function(){
    Route::get('/', '\App\Http\Controllers\Pages_Controller@post')->name('post');
    Route::get('/single', '\App\Http\Controllers\Pages_Controller@bsingle')->name('single');
});
