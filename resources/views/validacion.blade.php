@extends('layouts.layout')
@section('contenido')
    <div class="card">
        <h5 class="card-header">Validación de la cuenta</h5>
        <div class="card-body">
            @if( session('error'))
                <p class="alert alert-danger">{{ session('error') }}</p>
            @endif
            <h5 class="card-title">Te hemos enviado un correo con el código que teines que introducis a continación: </h5>
            <form method="GET" action="{{ route('usuario.codigo') }}">
                <div class="container">
                    <div class="col-lg-5">
                        <input class="form-control" type="text" name="codigo" placeholder="Introduce aquí tu código">
                        <input class="btn btn-warning" type="submit" value="Comprobar">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
