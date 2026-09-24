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

// 1. 入力画面の表示(GET)
Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');

// 2.入力内容の確認(POST)
Route::post('/contact/confirm', [ContactController::class, 'confirm'])->name('contact.confirm');

// 3.送信(POST)
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');

// 4. サンクスページの表示(GET)
Route::get('/contact/thanks', [ContactController::class, 'thanks'])->name('contact.thanks');


