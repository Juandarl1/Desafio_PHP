<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\clientes;
use App\Http\Requests;

class clientecontroller extends Controller
{
    public function consultarcliente()
    {
        $cliente=DB::select('select * from clientes');
        return view('welcome',array('cliente')->$cliente);
        
    }

    public function insertarcliente(Request $request){
        $insert=DB::insert('INSERT INTO clientes(id, Cedula, nombre_apellido, nombre_mascota) VALUES (?,?,?,?)',[null, $request->cedula,$request->nombre,$request->mascota]);
        dd($insert);
    }

     
    
}

