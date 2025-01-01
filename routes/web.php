<?php

use Illuminate\Support\Facades\Route;
use Spatie\Honeypot\ProtectAgainstSpam;

Route::middleware(['cacheResponse'])->group(function () {
  Route::get('linktree', [App\Http\Controllers\PageDisplayController::class, 'linktree'])->name('frontend.linktree');
  Route::get('vcard', [App\Http\Controllers\VCardController::class, 'index'])->name('frontend.vcard');
  Route::get('/', [App\Http\Controllers\PageDisplayController::class, 'home'])->name('frontend.home');
  Route::get('{slug}', [App\Http\Controllers\PageDisplayController::class, 'show'])->name('frontend.page');
});

Route::post('/mail', [App\Http\Controllers\MailController::class, 'contact'])
  ->middleware(ProtectAgainstSpam::class)
  ->name('mail.contact');

Route::post('/registration', [App\Twill\Capsules\Appointments\Http\Controllers\RegistrationController::class, 'index'])
  ->middleware(ProtectAgainstSpam::class)
  ->name('appointment.registration');
