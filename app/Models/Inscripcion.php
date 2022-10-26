<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    use HasFactory;

    protected $table = "inscripciones";
    
    protected $fillable = [
            "comprobantePago",
            "pagoMedioUno",
            "pagoMedioDos",
            "pagoEntero",
            "equipo_id",
            "campeonato_id"
    ] ;

    public function equipo(){
        return $this->belongsTo(Equipo::class);
    }
    public function campeonato(){
        return $this->belongsTo(Campeonato::class);
    }
}
