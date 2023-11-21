<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('register');
});
Route::post('/register', [Usercontroller::class, 'register']);

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', [Usercontroller::class, 'login'])->name('login');
Route::post('/logout', [Usercontroller::class, 'logout']);

Route::get('/question', function () {
    return view('question');
});

Route::get('/question/{id}', 'QuestionController@show')->name('showQuestion');
Route::get('/next-question/{id}', 'QuestionController@nextQuestion')->name('nextQuestion');

Route::get('/test', function () {
    return view('test');
});

Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
Route::post('/profile', [ProfileController::class, 'store'])->name('profile.store');
Route::get('/profile/{id}/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::put('/profile/{id}', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile/{id}', [ProfileController::class, 'destroy'])->name('profile.destroy');

Route::get('/forgot-password', [\App\Http\Controllers\ForgotPasswordController::class, 'forgetPassword'])->name('forget.password');
Route::post('/forgot-password', [\App\Http\Controllers\ForgotPasswordController::class, 'forgetPasswordPost'])->name('forget.password.post');

Route::get('/reset-password/{token}', [\App\Http\Controllers\ForgotPasswordController::class, 'resetPassword'])->name('reset.password');
Route::post('/reset-password', [\App\Http\Controllers\ForgotPasswordController::class, 'resetPasswordPost'])->name('reset.password.post');

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/add-user', function () {
    return view('add-user');
})->name('addUser');
Route::post('/add-user', [UserController::class, 'addUser'])->name('addUser');
