@extends('layouts.layout')
@section('title','Login')
@section('contenido')
    @extends('layouts.navlog')
    <div style="position:absolute; top: 50%; left: 50%; transform: translate(-50%,-50%);">
    <form method="POST" action="{{ route('usuario.store') }}" style="border: 1px solid grey;border-radius: 5px;padding: 17px; width: 500px">
        @csrf
        <div class="col-lg-14">
            <div class="mb-3">
                <input type="text" class="form-control"  placeholder="Nombre de Usuario" name="nombre">
            </div>
            <div class="mb-3">
                <input type="email" class="form-control"  placeholder="Correo electrónico" name="email">
            </div>
            <div class="mb-3">
                <input type="password" class="form-control"  placeholder="Contraseña" name="password">
            </div>
            <input class="btn btn-secondary" type="submit" value="Registrar">
        </div>
    </form>
    <br>
    <p>Si tienes una cuenta, prueba a <a href="{{ route('view.login') }}">iniciar sesión</a>.</p>
    </div>
@endsection
