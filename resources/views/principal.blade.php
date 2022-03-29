@extends('layouts.layout')
@section('title','Bienvenido')
@section('contenido')
    @extends('layouts.navbar')
    <div class="container" style="padding: 25px; color: #8648c7">
        <h1>Bienvenido {{ $usuario }}</h1>
        <h3>En publicaciones podras ver las actualizaciones de tus amigos!! Entra para verlo 🤫 </h3>
    </div>
@endsection
