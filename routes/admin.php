<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PostController;

Route::middleware("guest:admin")->group( function (){
    Route::get('login', [\App\Http\Controllers\Admin\AuthController::class, 'index'])->name('login');
    Route::post('login_process', [\App\Http\Controllers\Admin\AuthController::class, 'login'])->name('login_process');
});

// правила для зарегестрированных пользователей с правами администратора
Route::middleware("auth:admin")->group( function (){
    // главная страница администрирования
    Route::get('dashboard',[\App\Http\Controllers\Admin\DashboardController::class, 'dashboard'])->name('dashboard');
    // страница администрирования новостей
    Route::resource('posts',PostController::class);

    // выход пользователя
    Route::get('/logout', [\App\Http\Controllers\Admin\AuthController::class, 'logout'])->name('logout');
});

