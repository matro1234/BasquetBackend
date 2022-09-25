<?php

namespace App\Http\Controllers;

use App\Models\Delegado;
use Illuminate\Http\Request;

class DelegadoController extends Controller
{

    public function store(Request $request)
    {
        $delegado = new Delegado;
        $delegado->CODDELEGADO=$request->CODDELEGADO;
        $delegado->CODEQUIPO=$request->CODEQUIPO;
        $delegado->CODCAMPEONATO=$request->CODCAMPEONATO;
        $delegado->NOMBREDELEGADO=$request->NOMBREDELEGADO;
        $delegado->CIDELEGADO=$request->CIDELEGADO;
        $delegado->FECHANACIMIENTO=$request->FECHANACIMIENTO;
        $delegado->NACIONALIDAD=$request->NACIONALIDAD;
        $delegado->CONTRASENA=$request->CONTRASENA;
        $delegado->CORREO=$request->CORREO;
        $delegado->save();
        return $delegado;
    }

    public function show()
    {
        return Delegado::get();
    }

}
