<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Pizzazo');
});

Route::get('/etlap', [PizzaController::class, 'index']);
