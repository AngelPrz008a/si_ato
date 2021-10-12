<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Nota;
use Illuminate\Http\Request;
use App\Http\Requests\storeNota;

class NotaController extends Controller
{

    /**
     * Index
     */
    public function index()
    {
        $p = 25;

        return view('nota.index')
        ->with('notas', Nota::paginate($p));
    }



    /**
     * Crear nota
     * envia la fecha actual
     */
    public function create()
    {
        $carbon = Carbon::now();

        return view('nota.create')
        ->with('Actual',$carbon);
    }
//



//
    /**
     * post crear nota
     */
    public function store(storeNota $request)
    {
        $array = ['titulo','nota','fecha_creacion'];

        $new = new Nota();
        foreach($array as $a){
            $new->$a = $request->input($a);
        }
        $new->save();

        return redirect('nota')
        ->with('msg', 'Se Creo Correctamente.');
    }
//



//
    /**
     * muestra especificamente la nota
     */
    public function show($id)
    {
        $id = Nota::find($id);

        return view('nota.show')
        ->with('nota', $id);
    }
//



//
    /**
     * interfaz para modificar nota
     */
    public function edit($id)
    {
        $id = Nota::find($id);

        return view('nota.edit')
        ->with('nota', $id);
    }
//



//
    /**
     * post, modificar nota
     */
    public function update(Request $request, $id)
    {
        $id = Nota::find($id);
        $id->titulo = $request->input('titulo');
        $id->nota = $request->input('nota');
        $id->fecha_modificacion = Carbon::now();
        $id->save();

        return redirect('nota')
        ->with('msg','Se Actualizo Correctamente');
    }
//



//
    /**
     * post, eliminar
     */
    public function destroy($id)
    {
        $id = Nota::find($id);

        $id->delete();

        return redirect('nota')
        ->with('msg', ' Se Elimino Correctamente');
    }
//
}
