<?php
use App\Http\Controllers\ProcurementRegistrationController;
use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
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
Route::post('/submit_registration', [ProcurementRegistrationController::class, 'submit']);


Route::post('/submit_freeregistration', [RegistrationController::class, 'submitRegistration'])->name("submit_freeregistration");
