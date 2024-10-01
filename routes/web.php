<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\GetUserDetail;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/inicio', [HomeController::class, 'index'])->name('inicio');
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('faq',[HomeController::class,'faq'])->name('faq');
Route::get('help_center',[HomeController::class,'help_center'])->name('help_center');
Route::get('contact_us',[HomeController::class,'contact_us'])->name('contact_us');

Route::prefix('store')->name('store.')->group(function () {
    Route::get('/{event:slug}', [EventController::class, 'detail'])->name('detail')->middleware(GetUserDetail::class);
    Route::post('/event_list', [HomeController::class, 'event_list'])->name('event_list');
});
