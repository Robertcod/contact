<?php

namespace App\Http\Controllers;

use App\Models\SolicitudModel;
use Illuminate\Http\Request;

class Solicitudes extends Controller
{
    public function mostrarVista(){
        return view('welcome');
    }

    public function guardar(Request $request){

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'message' => 'required|string|max:510',
        ]);

        $usuario = new SolicitudModel();
        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->message = $request->message;
        $usuario->save();
    }
}
