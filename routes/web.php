<?php

use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/faq', function () {
    return view('faq');
});

Route::get('/change/{lang}',[LanguageController::class,'changeLang'])->name('changeLang');
