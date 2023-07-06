<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Documento;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class DocumentoController extends Controller
{
    //Nos devuelve el catalogo de los documentos
    public function home (){
        $documentos = Documento::paginate(10);
        $usuariosCantidad = DB::table('users')->count();

        return view('home',compact('documentos','usuariosCantidad'));
    }

    //admin
    //Listado
    public function index(){
        $documentos = Documento::paginate(10);

        return view('documentos.index',compact('documentos'));
    }
    //Creacion
    public function create(){
        $documento = new Documento();

        return view('documentos.create',compact('documento'));
    }
    //Edicion
    public function edit($id){
        $documento = Documento::findOrFail($id);

        return view('documentos.edit',compact('documento'));
    }
    public function show($id){
        $documento = Documento::findOrFail($id);

        return view('documentos.show',compact('documento'));
    }
    public function destroy($id){
        $documento = Documento::findOrFail($id);
        $documento->delete();

        return redirect()->route('documentos.index')
            ->with('eliminar','Documento eliminado exitosamente');
    }
    public function store(Request $request){
        //Validaciones de los campos en el formulario
        $validated = $request->validate([
            'imagen' => 'required|mimes:jpg,jpeg,png,bmp',
            'titulo' => 'required|max:255',
            'autor' => 'required|max:255',
            'descripcion' => 'required',
            'archivo' => 'required|mimes:pdf'
        ]);
        //Creamos un documento nuevo para luego asignar los valores
        //que vienen del formulario
        $documento = new Documento();
        //Preguntamos si esta cargado el archivo
        if($request->hasFile('archivo')){
            $file = $request->file('archivo');
            $destinationPath ='pdf/';
            $filename = time()."-".$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath,$filename);
            $documento->ubicacion = $destinationPath.$filename;
        }
        //Preguntamos si esta cargada la imagen
        if($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $destinationPath ='imagenes/';
            $filename = time()."-".$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath,$filename);
            $documento->portada = $destinationPath.$filename;
        }
        //Completamos los datos al documento con los campos del formulario
        $documento->titulo = $request->titulo;
        $documento->autor = $request->autor;
        $documento->descripcion = $request->descripcion;
        //Guardamos el documento en la base de datos
        $documento->save();

        return redirect()->route('documentos.index')
        ->with('crear','Documento creado exitosamente');
    }
    //Almacenar un documento editado
    public function update(Request $request, $id){
        $validated = $request->validate([
            'imagen' => 'mimes:jpg,jpeg,png,bmp',
            'titulo' => 'required|max:255',
            'autor' => 'required|max:255',
            'descripcion' => '',
            'archivo' => 'mimes:pdf'
        ]);
        $documento = Documento::findOrFail($id);
        $destinationPath ='pdf/'.$documento->archivo;
        if(File::exists($destinationPath)){
            File::delete($destinationPath);
        }
        if($request->hasFile('archivo')){
            $file = $request->file('archivo');
            $destinationPath ='pdf/';
            $filename = time()."-".$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath,$filename);
            $documento->ubicacion = $destinationPath.$filename;
        }
        $destinationPath ='imagenes/'.$documento->portada;
        if(File::exists($destinationPath)){
            File::delete($destinationPath);
        }
        if($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $destinationPath ='imagenes/';
            $filename = time()."-".$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath,$filename);
            $documento->portada = $destinationPath.$filename;
        }
        $documento->titulo = $request->titulo;
        $documento->autor = $request->autor;
        $documento->descripcion = $request->descripcion;
        $documento->update();

        return redirect()->route('documentos.index')
        ->with('editar','Documento editado exitosamente');
    }
}
