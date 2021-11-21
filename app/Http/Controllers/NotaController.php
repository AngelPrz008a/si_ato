<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Nota;
use Illuminate\Http\Request;
use App\Http\Requests\storeNota;

class NotaController extends Controller
{
//
    public function index()
    {
        return view('nota.index')
        ->with('notas', Nota::all() );
    }
//



//
    public function store(storeNota $request)
    {
        $new = new Nota();
        $new->titulo = $request->titulo;
        $new->nota = $request->nota;
        $new->fecha_creacion = Carbon::now();
        $new->id_categoria = $request->id_categoria;
        $new->save();


        return redirect('nota')
        ->with('msg', 'Se Creo Correctamente.');
    }
//



//

    public function show($id)
    {
        $id = Nota::find($id);

        return view('nota.show')
        ->with('nota', $id);
    }
//



//
    public function update(Request $request, $id)
    {
        $id = Nota::find($id);
        $id->titulo = $request->titulo;
        $id->nota = $request->nota;
        $id->fecha_modificacion = Carbon::now();
        $id->id_categoria = $request->id_categoria;
        $id->save();

        return redirect('nota')
        ->with('msg','Se Actualizo Correctamente');
    }
//



//
    public function destroy($id)
    {
        $id = Nota::find($id);

        return redirect('nota')
        ->with('msg', ' Se Elimino Correctamente');
    }
//



//
public function verNover($id, $msg)
{
    switch($msg){
        case 'true':
            return redirect('nota')
            ->with('ver', 'false')
            ->with('verId',$id);
        break;

        default:
            return redirect('nota')
            ->with('ver', 'true')
            ->with('verId',$id);
        break;
    }//end switch

}
//
}
