<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\ContactoFormRequest;

use App\Contacto;

use Illuminate\Support\Facades\DB;

class ContactoController extends Controller
{
    public function index(Request $request)
    {
        $query=trim($request->get('searchText'));
        $contacto=DB::table('contacto')-> where('nombre_apellido', 'LIKE', '%'.$query. '%')->paginate(10);
        return view('contacto.index', ["contacto" => $contacto, "searchText"=> $query]);
    }

    public function create(){ 
        
        return view('contacto.create');
    }

    public function store(ContactoFormRequest $request)
    {
        $crear=request()->all();
       $crear=request()->except('_token');
       contacto::insert($crear);
        
       return redirect('contacto')->with('mensaje', "Se ha creado el contacto correctamente");
      // return response()->json($crear);
    }

    public function show($id)
    {
        
        $cont = contacto::findOrFail($id);

        return view('contacto.show', compact('cont'));

    }

    public function edit($id){
        
        $cont = contacto::findOrFail($id);

        return view('contacto.edit', compact('cont'));

    }

    public function update(ContactoFormRequest $request, $id)
    {

        $notaActualizada = contacto::findOrFail($id);
        $notaActualizada->nombre_apellido = $request->nombre_apellido;
        $notaActualizada->telefono = $request->telefono;
        $notaActualizada->direccion = $request->direccion;
        $notaActualizada->email = $request->email;
        $notaActualizada->fecha_nato = $request->fecha_nato;
        $notaActualizada->save();
        return redirect('/contacto')->with('actualizada', '¡Su contacto se ha actualizado correctamente!');


    }


    public function destroy($id)
    {
           DB::table('contacto')->delete($id);

            return redirect('/contacto')->with('alert', "Se ha eliminado el contacto");

        
    }
    

}

