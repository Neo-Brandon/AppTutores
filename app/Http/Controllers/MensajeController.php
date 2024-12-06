<?php

namespace App\Http\Controllers;

use App\Models\Mensaje;
use Illuminate\Http\Request;

class MensajeController extends Controller
{
    public function index(){
        $mensajes = Mensaje::paginate(8);

        return view('mensajes.index', compact('mensajes'))
        ->with('i', (request()->input('page', 1) - 1)*8);
    }

    public function show($id){
        $mensaje = Mensaje::find($id);        //Encontrará el ID que estaba buscando
        return view('mensajes.show', compact('mensaje'));
    }

    public function create(){
        return view('mensajes.create');
    }

    public function store(Request $request){
        $request->validate([
            'mensaje' => 'required|string'
        ]);

        $mensaje = new Mensaje();
        $mensaje -> mensaje = $request->mensaje;

        $mensaje -> save();
        return redirect()-> route('mensaje.index');
        return redirect()-> route('mensaje.index')->with('errors', 'Error');
    }

    public function destroy($id){
        Mensaje::find($id) -> delete();
        return redirect() -> route('mensaje.index');
    }

    public function edit($id){
        $mensaje = Mensaje::find($id);
        return view('mensajes.edit', compact('mensaje'));
    }

    public function update(Request $request){       //Post y Put necesitan recibir la informacion en un request
        $request->validate([
            'mensaje' => 'required|string'
        ]);

        $mensaje = Mensaje::findOrFail($request->id);
        echo($mensaje);
        $mensaje -> mensaje = $request->mensaje;
        $mensaje->save();
        return redirect()->route('mensaje.index');
        return redirect()-> route('mensaje.index')->with('errors', 'Error');
    }
}


