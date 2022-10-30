<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delegado extends Model
{
    use HasFactory;
    protected $table="delegados";
    protected $fillable = [
        "nombre",
        "ci",   
        "email",
        "celular",
        "fechaNacimiento",
        "nacionalidad",
        "genero",
        "api_token"
    ];
    protected $hidden = ['created_at','updated_at'];

    public function equipo(){
        return $this->hasOne(Equipo::class);
    }
}
