<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;

Route::get('/', function () {
    return view('Pizzazo');
});

Route::get('/etlap', [PizzaController::class, 'index']);
