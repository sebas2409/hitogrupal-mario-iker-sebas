@extends('layouts.layout')
@section('contenido')
    @extends('layouts.navbar')
    <div class="container mt-5">
        <form method="POST" action="{{ route('publication.update',$publicacion->id) }}">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Título de la entrada</label>
                <input name="titulo" type="text" class="form-control"  placeholder="Aquí va el título (50 carácteres máximo)" maxlength="50" value="{{ $publicacion->titulo }}">
            </div>
            <br>
            <div class="mb3">
                <textarea name="descripcion" class="form-control" placeholder="Escribe aquí la entrada." id="floatingTextarea2" style="height: 100px">{{ $publicacion->contenido }}</textarea>
            </div>
            <br>
            <div>
                <input type="submit" value="Editar" class="btn btn-success" >
            </div>
        </form>
    </div>
@endsection
