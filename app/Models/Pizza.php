<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    //Pizza modell
    protected $table = 'pizza';
    protected $primaryKey = 'nev';
    public $incrementing = false;
    protected $keyType = 'string';

    public function kategoria()
    {
        return $this->belongsTo(Kategoria::class, 'kategorianev', 'nev');
    }
}
