<?php

namespace App\Http\Controllers;
use App\Models\Campeonato;
use Illuminate\Http\Request;

class CampeonatoController extends Controller
{
    public function mostrar()
    {
        return Campeonato::get();
    }
}
