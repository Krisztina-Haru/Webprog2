<?php

// Webes útvonalak és végpontok

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('Pizzazo');
});

Route::get('/etlap', [PizzaController::class, 'index']);

Route::get('/user', function ()
{
    return view('user');
})->name('user');

Route::get('/admin', [AdminController::class, 'adminPage'])->name('admin');
