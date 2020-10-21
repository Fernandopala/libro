<?php

namespace App\Http\Controllers;
use App\Models\Libro; // arreglar la ubicacion del modelo

use Illuminate\Http\Request;

class LibroController extends Controller
{
    
    public function index()
    {
        $libros=Libro::orderBy('id','DESC')->paginate(3);
        return view('Libro.index',compact('libros')); 
    }

    public function create()
    {
        return view('Libro.create');
    }


    public function store(Request $request)
    {
        $this->validate($request,[ 'nombre'=>'required',  'autor'=>'required']);
        Libro::create($request->all());
        return redirect()->route('libro.index')->with('success','Registro creado satisfactoriamente'); 
    }


    public function show($id)
    {
        $libros=Libro::find($id);
        return  view('libro.show',compact('libros'));
    }


    public function edit($id)
    {
        $libro=libro::find($id);
        return view('libro.edit',compact('libro'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request,[ 'nombre'=>'required', 'autor'=>'required']);
 
        libro::find($id)->update($request->all());
        return redirect()->route('libro.index')->with('success','Registro actualizado satisfactoriamente');
    }

 
    public function destroy($id)
    {
        Libro::find($id)->delete();
        return redirect()->route('libro.index')->with('success','Registro eliminado satisfactoriamente');
    }
}
