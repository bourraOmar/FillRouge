<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('Home');
})->name('home');
Route::get('/cataloge', function () {
    return view('Cataloge');
})->name('cataloge');
Route::get('/detail', function () {
    return view('Detail');
})->name('detail');
Route::get('/signup', function (){
    return view('SignUp');
})->name('signup');
Route::get('/login', function (){
    return view('login');
})->name('login');
Route::get('/profile', function (){
    return view('profil');
})->name('profil');
Route::get('/dashboardAdmin', function (){
    return view('DashboardAdmin');
})->name('dashboardAdmin');
Route::get('/dashboardOwner', function (){
    return view('DashboardOwner');
})->name('dashboardOwner');
