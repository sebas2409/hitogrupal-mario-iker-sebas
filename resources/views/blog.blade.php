@extends('layouts.layout')
@section('script')
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            window.addEventListener('scroll', function () {
                if (window.scrollY > 50) {
                    document.getElementById('navbar_top').classList.add('fixed-top');
                    navbar_height = document.querySelector('.navbar').offsetHeight;
                    document.body.style.paddingTop = navbar_height + 'px';
                } else {
                    document.getElementById('navbar_top').classList.remove('fixed-top');
                    document.body.style.paddingTop = '0';
                }
            });
        });
    </script>
@endsection
@section('title','Blog')
@section('contenido')
    @extends('layouts.navbar')

    <nav id="navbar_top" class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" style="margin-left: 50%; transform: translate(-50%)"
               href="{{ route('view.crear') }}">Crear Publicación</a>
        </div>
    </nav>

    @foreach( $publicaciones as $publi)
        <div class="card mt-5" style="width: 25rem; margin-left: 50%; transform: translate(-50%); box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;">
            <img src="{{ asset("$publi->categoria") }}" class="card-img-top" alt="">
            <div class="card-body">
                @if( $usuario == $publi->autor)
                    <form method="post" action="{{ route('publication.delete',$publi->id) }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" style="float: right;box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;"><i class="bi bi-trash"></i></button>
                    </form>
                @endif
                <h5 class="card-title">{{ $publi->titulo }}</h5>
                @if( $usuario == $publi->autor)
                    <a class="btn btn-primary" style="float: right; box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;"
                       href="{{ route('publication.editar',$publi->id) }}"><i class="bi bi-pencil-fill"></i></a>
                @endif
                <p class="card-subtitle text-danger"><b>{{ $publi->autor }}</b></p>
                <small>Publicado el {{ $publi->created_at }}</small>
                <br><br>
                <p class="card-text">{{ mb_strimwidth($publi->contenido,0,25,"...") }}</p>
                <a style="box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;" href="{{ route('publication.individual',$publi->id) }}" class="btn btn-primary">Ir a la publicación</a>
            </div>
        </div>
    @endforeach


@endsection
