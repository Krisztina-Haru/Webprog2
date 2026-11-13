<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategoria extends Model
{
    //Kategoria modell
    protected $table = 'kategoria';
    protected $primaryKey = 'nev';
    public $incrementing = false;
    protected $keyType = 'string';
}
