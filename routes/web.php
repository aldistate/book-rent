<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'auth'])->name('auth');
    Route::get('/register', [AuthController::class, 'register'])->name('indexRegister');
    Route::post('/register', [AuthController::class, 'authRegis'])->name('authRegis');
});

Route::middleware(['auth'])->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/dashboard', 'index')->middleware('isAdmin')->name('indexDashboard');
        Route::get('/users', 'usersIndex')->middleware('isAdmin')->name('usersIndex');
        Route::get('/category', 'categoryIndex')->middleware('isAdmin')->name('categoryIndex');
        Route::get('/rentlog', 'rentlog')->middleware('isAdmin')->name('rentlog');
    });

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    
    Route::get('/profile', [UserController::class, 'profile'])->middleware('isClient')->name('profile');
});

Route::get('/books', [BookController::class, 'index'])->name('bookIndex');