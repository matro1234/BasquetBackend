<?php

namespace App\Http\Controllers;

use App\Models\Jugador;
use Illuminate\Http\Request;

class JugadorController extends Controller
{
    public function store(Request $request)
    {
        $jugador = new Jugador;
        $jugador->CODJUGADOR=$request->CODJUGADOR;
        $jugador->CODEQUIPO=$request->CODEQUIPO;
        $jugador->NOMBREJUGADOR=$request->NOMBREJUGADOR;
        $jugador->CIJUGADO=$request->CIJUGADO;
        $jugador->NACIONALIDAD=$request->NACIONALIDAD;
        $jugador->FECHANACIMIENTO=$request->FECHANACIMIENTO;
        $jugador->CANASTAS=$request->CANASTAS;
        $jugador->save();
        return $jugador;
    }


    public function show()
    {
        return Jugador::get();
    }
}
