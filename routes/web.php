<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\AdminController;

Route::middleware('guest')->group(function () {
  Route::get('/', [SesiController::class, 'index'])->name('login');
  Route::post('/', [SesiController::class, 'login']);
});

Route::middleware('auth')->group(function () {
  // Route::get('/admin', [AdminController::class, 'index']);
  Route::get('/admin/operator', [AdminController::class, 'operator'])->middleware('admin:operator');
  Route::get('/admin/keuangan', [AdminController::class, 'keuangan'])->middleware('admin:keuangan');
  Route::get('/admin/marketing', [AdminController::class, 'marketing'])->middleware('admin:marketing');
  Route::post('/logout', [SesiController::class, 'logout']);

  Route::get('/dashboard', function () {
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
});
