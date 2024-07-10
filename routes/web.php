<?php

use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/change/{lang}',[LanguageController::class,'changeLang'])->name('changeLang');
