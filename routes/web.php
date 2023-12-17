<?php

use Illuminate\Support\Facades\Route;

use App\Models\User;
use App\Models\Materi;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\SettingController;


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
    $user = User::WhereNot('id', 1)->count();
    $materi = Materi::count();

    return view('layouts/users/base' , [
        'user' => $user,
        'materi' => $materi,
        'title' => 'STARS || Home'
    ]);
});

Route::get('/register-user', [App\Http\Controllers\UserController::class, 'create'])->name('register-user');
Route::post('/create-pengunjung', [App\Http\Controllers\UserController::class, 'storePengunjung'])->name('create-pengunjung');

Route::get('/animation', [App\Http\Controllers\SettingController::class, 'animasi'])->name('animation');

Route::get('/list-materi', [App\Http\Controllers\SettingController::class, 'list'])->name('list-materi');

Route::get('/inovation', [App\Http\Controllers\SettingController::class, 'inovation'])->name('inovation');

Auth::routes();

Route::get('/dashboard-admin', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard-admin');


Route::resource('pengunjung', UserController::class);
Route::resource('materi', MateriController::class);


