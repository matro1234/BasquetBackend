<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campeonato extends Model
{
    use HasFactory;
    protected $table="Campeonato";
    protected $primaryKey="CODCAMPEONATO";
    protected $fillable = ["FECHAINSCRIPCION","FECHAINICIO","FECHAFIN","CATEGORIA"];
    public $timestamps = false;
}
