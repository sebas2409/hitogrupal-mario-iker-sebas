@extends('layouts.layout')
@section('contenido')
    @extends('layouts.navbar')
    <h1 style="text-align: center">{{ $publicacion->titulo }}</h1>
    <h3 style="text-align: center">{{ $publicacion->autor }}</h3>
    <h4 style="text-align: center">{{ $publicacion->created_at }}</h4>
    <p style="margin-left: 20px">{{ $publicacion->contenido }}</p>
@endsection
