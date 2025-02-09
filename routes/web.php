<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/stock', function () {
    return view('stock.index');
});

Route::get('/order', function () {
    return view('order.index');
});

Route::get('/harga', function () {
    return view('harga.index');
});
