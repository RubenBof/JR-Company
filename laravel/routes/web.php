<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('index');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/servicios', function () {
    return view('servicios');
});

Route::get('/plantilla1', function () {
    return view('plantilla1');
});

Route::get('/plantilla2', function () {
    return view('plantilla2');
});

Route::get('/plantilla3', function () {
    return view('plantilla3');
});


Route::get('/contacto', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contacto', [ContactController::class, 'store'])->name('contact.store');