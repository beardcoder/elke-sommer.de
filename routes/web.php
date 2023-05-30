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

Route::get('linktree', [
  \App\Http\Controllers\PageDisplayController::class,
  'linktree',
])->name('frontend.linktree');

Route::get('vcard', [
  \App\Http\Controllers\VCardController::class,
  'index',
])->name('frontend.vcard');

Route::get('/', [
  \App\Http\Controllers\PageDisplayController::class,
  'home',
])->name('frontend.home');

Route::get('{slug}', [
  \App\Http\Controllers\PageDisplayController::class,
  'show',
])->name('frontend.page');
