<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    public function storePublication(Request $request)
    {
        session_start();
        $nuevaPubli = new Publication();
        $nuevaPubli->titulo=$request->titulo;
        $nuevaPubli->autor=$_SESSION['usuario'];
        $nuevaPubli->categoria=$request->categoria;
        $nuevaPubli->contenido=$request->descripcion;
        $nuevaPubli->save();

        return redirect()->route('publication.show');
    }

    public function show()
    {
        session_start();
        $publicaciones = Publication::all();
        return view('blog')
            ->with('publicaciones',$publicaciones)
            ->with('usuario',$_SESSION['usuario']);
    }

    public function editar($id)
    {
        $publicacion=Publication::find($id);
        return view('editar')->with('publicacion',$publicacion);
    }

    public function update(Request $request,$id)
    {
        $publicacion=Publication::find($id);
        $publicacion->titulo=$request->titulo;
        $publicacion->contenido=$request->descripcion;
        $publicacion->save();

        return redirect()->route('publication.show');
    }
    public function delete($id)
    {
        Publication::destroy($id);
        return redirect()->route('publication.show');
    }

    public function individual($id)
    {
        $publicacion=Publication::find($id);
        return view('individual')->with('publicacion',$publicacion);
    }
}
