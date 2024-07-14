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
Route::get('/regsiter_procurement', function () {
    return view('regsiter_procurement');
});
Route::get('/features', function () {
    return view('features');
});

Route::get('/change/{lang}',[LanguageController::class,'changeLang'])->name('changeLang');
