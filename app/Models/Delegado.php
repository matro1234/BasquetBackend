<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delegado extends Model
{
    use HasFactory;
    protected $table="Delegado";
    protected $primaryKey="CODDELEGADO";
    protected $fillable = ["CODEQUIPO","CODCAMPEONATO","NOMBREDELEGADO","CIDELEGADO","FECHANACIMIENTO","NACIONALIDAD","CONTRASENA","CORREO"];
    public $timestamps = false;
}
