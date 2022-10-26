<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;
    protected $table = "equipos";

    protected $fillable = [
            "nombre",
            "siglas",
            "logo",
            "cantidad",
            "fechaCreacion",
            "delegado_id",
            "categoria_id"
    ];
    public function delegado(){
        return $this->belongsTo(Delegado::class);
    }
    public function incripcion(){
        return $this->hasOne(Inscripcion::class);
    }
    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }
}
