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
});
Route::get('/login', function (){
    return view('login');
});
Route::get('/profile', function (){
    return view('profil');
});
Route::get('/dashboardAdmin', function (){
    return view('DashboardAdmin');
});
Route::get('/dashboardOwner', function (){
    return view('DashboardOwner');
});