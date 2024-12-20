<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compostera extends Model
{
    use HasFactory;

    protected $fillable = [
        'url',
        'tipo',

        'centro_id',
        'ocupada',
        ];


    public function registros()
    {
        return $this->hasMany(Registro::class);

    } 
    public function ciclos(){
        return $this->hasMany(Ciclo::class,'compostera_id','id');

    }
}
