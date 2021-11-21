<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
//
    public function index(){
        return view('categoria.index')
        ->with('categorias', Categoria::all());
    }
//



//
    public function store(Request $request){
        $new = new Categoria();
        $new->nombre = $request->nombre;
        $new->save();

        return redirect('categoria')
        ->with('msg', 'Se Registro');
    }
//



//
    public function update(Request $request, $id){

        $id = Categoria::find($id);
        $id->nombre = $request->nombre;
        $id->save();

        return redirect('categoria')
        ->with('msg', 'Se Registro');
    }
//
}
