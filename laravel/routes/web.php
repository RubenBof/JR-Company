<?php

use Illuminate\Support\Facades\Route;

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
