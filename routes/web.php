<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// authentification
Route::get('/signup', function () {
    return view('SignUp');
})->name('signup');
Route::post('/signup', [UserController::class, 'signup'])->name('signup.post');

Route::get('/login', function () {
    return view('login');
})->name('login');
Route::post('/login', [UserController::class, 'login'])->name('login.post');

Route::post('/logout', function () {
    Auth::logout();
    return redirect()->route('home');
})->name('logout');

// pages
Route::get('/', function () {
    return view('Home');
})->name('home');

Route::get('/cataloge', function () {
    return view('Cataloge');
})->name('cataloge');

Route::get('/detail', function () {
    return view('Detail');
})->name('detail');

// profiles
Route::get('/profile', function () {
    $user = Auth::user();
    return view('Profil',compact('user'));
})->name('profile');

Route::get('/dashboardOwner', function () {
    $user = Auth::user();
    return view('DashboardOwner');
})->name('dashboardOwner');

Route::get('/dashboardAdmin', function () {
    $user = Auth::user();
    return view('DashboardAdmin');
})->name('dashboardAdmin');

Route::middleware(['RoleMiddleware'])->prefix('admin')->group(function () {


});