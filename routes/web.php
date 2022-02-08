<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

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
Route::get('/about', '\App\Http\Controllers\PagesController@about')->name('about');

Route::get('/business', '\App\Http\Controllers\PagesController@business')->name('business');
Route::get('/civilian', '\App\Http\Controllers\PagesController@civilian')->name('civilian');
// страница контакты
//Route::get('/contact', '\App\Http\Controllers\ContactController@contact')->name('contact');
// все новости
Route::get('/posts', '\App\Http\Controllers\PagesController@posts')->name('posts');
// одиночная новость
Route::get('/single/{key}', '\App\Http\Controllers\PagesController@single')->name('single');
// новости по категории
Route::get('/category/{key}', \App\Http\Controllers\PostsByCategoryController::class)->name('posts_by_category');
// для аутентифицированных пользователей
Route::middleware("auth")->group(function (){
    // выход пользователя
    Route::get('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
    // отправка комментария
    Route::post('/posts/comment/{id}', [\App\Http\Controllers\CommentController::class, 'comment'])->name('comment');
});
// для гостей
Route::middleware("guest")->group(function (){
    // аутентификация пользователя
    Route::get('/login', [\App\Http\Controllers\AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login_process', [\App\Http\Controllers\AuthController::class, 'login'])->name('login_process');
    // регистрация пользователя
    Route::get('/register', [\App\Http\Controllers\AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register_process', [\App\Http\Controllers\AuthController::class, 'register'])->name('register_process');
    // восстановление пароля
    Route::get('/forgot_pass', [\App\Http\Controllers\AuthController::class, 'showForgotForm'])->name('forgot_pass');
    Route::post('/forgot_process', [\App\Http\Controllers\AuthController::class, 'forgot_process'])->name('forgot_process');
});

// страница контакты
Route::get('/contact', '\App\Http\Controllers\ContactController@contact')->name('contact');
// отправка формы обратной связи (email) с страницы контакты
Route::post('/contact_form_process', [\App\Http\Controllers\ContactController::class, 'email'])->name('contact_form_process');
// отправка формы обратной связи (email) с футера
Route::post('/email_form_process', [\App\Http\Controllers\ContactController::class, 'email_subscribed'])->name('email_form_process');

// отправка формы обратной связи (телефон)
Route::post('/phone_form', [\App\Http\Controllers\ContactController::class, 'phone'])->name('phone_form');

// email верификация (https://laravel.com/docs/8.x/verification)
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');
// повторная отправка кода верификации
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect()->route('index');
})->middleware(['auth', 'signed'])->name('verification.verify');

