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


    public function update(Request $request, $id)
    {
        $input = $request->all();
        $campeonato = Campeonato::find($id);
        $campeonato->update($input);
    
        return \response()->json(["res" => false,"message" => "modificado correctamente"],200);
    }
}
