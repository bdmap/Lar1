<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebController;

// страницы
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::get('/login', [UserController::class, 'login'])->name('login');

// обработчики
Route::post('/auth', [UserController::class, 'auth'])->name('auth');
Route::post('/user/create', [UserController::class, 'userCreate'])->name('userCreate');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

// статические страницы
Route::get('/', [WebController::class, 'index'])->name('index');
Route::get('/where', [WebController::class, 'where'])->name('where');
Route::get('/orders', [WebController::class, 'orders'])->name('orders');
Route::get('/basket', [WebController::class, 'basket'])->name('basket');
Route::get('/product/change/{id}', [WebController::class, 'changeProductPage'])->name('changeProductPage');