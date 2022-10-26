<?php

namespace App\Http\Controllers;

use App\Models\Delegado;
use Illuminate\Http\Request;

class DelegadoController extends Controller
{


    public function index(Request $request)
    {
        //select * from delegado (ORM, lavavel...ELOQUENT)
        //select ^from producto inner join users on ... 
        $delegados = Delegado::with(['equipo:id,nombre,delegado_id,categoria_id'])->get();
      //$delegados = Delegado::with([user:id,nombre,delgado_id,categoria])->orwhere("nombre","=","$request->txtBuscar")->get();
        return \response()->json($delegados,200);

        //return $delegados;
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $delegado = Delegado::create($input);
        return \response()->json(["res" => true, "message" =>"insertado correctamente"],200);
    }



    public function show($id)
    {
        //select * from producto where id = $id
        $delegado = Delegado::find($id);
        return \response()->json($delegado,200);

    }

    public function update(Request $request, $id)
    {
        //update delegados set nombre= $request..... where id = $id;

        $input = $request->all();
        $producto = Producto::find($id);
        $producto->update($input);
    
        return \response()->json(["res" => true,"message" => "modificado correctamente"],200);
    }

    public function destroy($id)
    {
        //delete from delegados where id = $id
        try{
        Producto::destroy($id);
        return \response()->json(["res" => true,"message" => "Eliminado correctamente"],200);
        }
        catch(\Exception $e){
            return \response()->json(["res" => false,"message" => $e->getMessage()],200);
        }
    }
}
