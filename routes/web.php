<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layouts/users/base');
});

Route::get('/dashboard-admin', function () {
    return view('layouts/admin/base');
});

Route::get('/register', function () {
    return view('/users/register');
});

Route::get('/animation', function () {
    return view('/users/animation');
});

Route::get('/list', function () {
    return view('/users/list');
});
