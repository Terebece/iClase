<div class="sticky-top">
    <nav class="navbar navbar-expand-lg navbar-iclase bg-iclase">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="/home_tutor_activities/{{$padre->id}}">
                    <img src="{{url('/images/logo_app.png')}}" class="d-inline-block align-middle img-logo" alt="">
                    iClase
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{url('/images/avatar_tutor.png')}}" class="img-avatar" alt="">
                            {{$padre->nombre}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/config_tutor">Editar perfil</a>
                            <a class="dropdown-item" href="/">Cerrar sesión</a>
                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
</div>


<div class="w-100">

    <img class="pleca-lg" src="{{url('/images/pleca-lg.jpg')}}" alt="Image" />
</div>