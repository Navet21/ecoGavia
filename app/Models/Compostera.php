<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Compostera extends Model
{
    protected $fillable = [
        'url',
        'tipo',
        'centro_id'
        ];

    public function registros(){
        return $this->hasMany(Registro::class);
    } 
}

