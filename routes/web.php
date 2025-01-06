<?php

use App\Http\Controllers\MailController;
use App\Http\Controllers\PageDisplayController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\VCardController;
use Illuminate\Support\Facades\Route;
use Spatie\Honeypot\ProtectAgainstSpam;

Route::middleware(['cacheResponse'])->group(function () {
    Route::get('linktree', [PageDisplayController::class, 'linktree'])->name('frontend.linktree');
    Route::get('vcard', [VCardController::class, 'index'])->name('frontend.vcard');
    Route::get('/', [PageDisplayController::class, 'home'])->name('frontend.home');
    Route::get('{slug}', [PageDisplayController::class, 'show'])->name('frontend.page');
});

Route::post('/mail', [MailController::class, 'contact'])
    ->middleware(ProtectAgainstSpam::class)
    ->name('mail.contact');

Route::post('/registration', [RegistrationController::class, 'index'])
    ->middleware(ProtectAgainstSpam::class)
    ->name('appointment.registration');
