<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = [
        "nombre",
        "edadMinima",
        "edadMaxima"
    ];

    public function equipos(){
        return $this->hasMany(Equipo::class);
    }
}
