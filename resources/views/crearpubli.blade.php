@extends('layouts.layout')
@section('title','Crear Entrada')
@section('contenido')
    @extends('layouts.navbar')
    <div class="container mt-5">
    <form method="POST" action="{{ route('publication.publication-store') }}">
        @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Título de la entrada</label>
                <input name="titulo" type="text" class="form-control"  placeholder="Aquí va el título (50 carácteres máximo)" maxlength="50">
            </div>
            <select name="categoria" class="form-select" aria-label="Default select example">
                <option selected>Seleccione una categoria</option>
                <option value="img/deportes.jpg">Deporte</option>
                <option value="img/arte.jpg">Arte</option>
                <option value="img/ciencia.jpg">Ciencia</option>
                <option value="img/musica.jpg">Musica</option>
                <option value="img/otro.jpg">Otro</option>
            </select>
            <br>
            <div class="mb3">
                <textarea name="descripcion" class="form-control" placeholder="Escribe aquí la entrada." id="floatingTextarea2" style="height: 100px"></textarea>
            </div>
            <br>
            <div>
                <input type="submit" value="Crear" class="btn btn-secondary" >
            </div>
        </form>
    </div>
@endsection
