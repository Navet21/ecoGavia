<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Centro extends Model
{
    protected $fillable = [
        'nombre',
        'direccion',
        'codigo'
        ];
}
