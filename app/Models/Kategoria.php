<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// Kategória modell: a pizzák kategóriáinak és kapcsolatainak kezelése

class Kategoria extends Model
{
    //Kategoria modell
    protected $table = 'kategoria';
    protected $primaryKey = 'nev';
    public $incrementing = false;
    protected $keyType = 'string';

    public function pizzak()
    {
        return $this->hasMany(Pizza::class, 'kategorianev', 'nev');
    }
}
