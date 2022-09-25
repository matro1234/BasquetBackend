<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;
    protected $table="Equipo";
    protected $primaryKey="CODEQUIPO";
    protected $fillable = ["CODDELEGADO","NOMBREEQUIPO","CANTIDADJUGADORES","PUNTOS"];
    public $timestamps = false;
}
