<nav nav class="navbar navbar-expand-lg bg-blue">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
        aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="/">
        <img class="logo_app" src="{{url('/images/logo_app.png')}}" alt="">
    </a>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link underl" href="/iniciar_sesion">
                    <img src="https://cdn.onlinewebfonts.com/svg/img_184513.png" alt="">
                </a>
            </li>
            
            <li class="nav-item">
                <!-- <a class="nav-link underl" href="/registro">Nombre Tutor</a> -->
                <div class="dropdown dropleft">
                    <a class="btn btn-secondary dropdown-toggle nav-link underl" href="#" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Nombre Tutor
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="/config_tutor">Editar perfil</a>
                        <a class="dropdown-item" href="/">Cerrar sesión</a>
                       
                    </div>
                </div>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li> -->
        </ul>

    </div>
</nav>


<div class="w-100">

    <img class="pleca-lg" src="{{url('/images/pleca-lg.jpg')}}" alt="Image" />
</div>