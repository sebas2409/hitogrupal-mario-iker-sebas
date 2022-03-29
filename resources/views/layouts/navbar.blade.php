<nav class="navbar navbar-expand-lg navbar-light bg-info">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="font-size: 18px">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="{{ route('usuario.usuario') }}">Página Principal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="{{ route('publication.show') }}">Publicaciones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="{{ route('view.crear') }}">Crear entrada</a>
                </li>
            </ul>
        </div>
    </div>
    <a style="float: right; margin-right: 15px" href="{{ route('view.login') }}"><button class="btn btn-danger">Cerrar Sesión</button></a>
</nav>
