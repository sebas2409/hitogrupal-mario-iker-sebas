@extends('layouts.layout')
@section('title','Login')
@section('contenido')
    @extends('layouts.navlog')
    <div style="position:absolute; top: 50%; left: 50%; transform: translate(-50%,-50%);">
        <form method="GET" action="{{ route('usuario.comprobar') }}" style="border: 1px solid grey;border-radius: 5px;padding: 17px; width: 500px">
            @csrf
            <div class="col-lg-14">
                @if( session('error'))
                    <p class="alert alert-danger">{{ session('error') }}</p>
                @endif
                <div class="mb-3">
                    <input type="email" class="form-control"  placeholder="Correo electrónico" name="email">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control"  placeholder="Contraseña" name="contraseña">
                </div>
                <input class="btn btn-secondary" type="submit" value="Entrar">
            </div>
        </form>
    </div>
@endsection
