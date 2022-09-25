<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    public function store(Request $request)
    {
        $equipo = new Equipo;
        $equipo->CODEQUIPO=$request->CODEQUIPO;
        $equipo->CODDELEGADO=$request->CODDELEGADO;
        $equipo->NOMBREEQUIPO=$request->NOMBREEQUIPO;
        $equipo->CANTIDADJUGADORES=$request->CANTIDADJUGADORES;
        $equipo->PUNTOS=$request->PUNTOS;
        $equipo->save();
        return $equipo;
    }


    public function show()
    {
        return Equipo::get();
    }
}
