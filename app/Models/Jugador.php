<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    use HasFactory;
    protected $table="Jugador";
    protected $primaryKey="CODDELEGADO";
    protected $fillable = ["CODJUGADOR ","CODEQUIPO	","NOMBREJUGADOR","CIJUGADO","NACIONALIDAD","FECHANACIMIENTO","CANASTAS"];
    public $timestamps = false;
}
