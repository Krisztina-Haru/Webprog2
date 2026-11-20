<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;
use App\Models\Kategoria;

//pizza vezérlő: az étlap lekéréseinek és funkcióinak kezelése

class PizzaController extends Controller
{
    public function index()
    {
        $pizzak = Pizza::with('kategoria')->get();
        return view('etlap', compact('pizzak'));
    }
}
