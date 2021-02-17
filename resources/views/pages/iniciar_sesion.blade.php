@extends('layouts.default')
@section('content')

<section class="w-100">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="tutores-tab" data-toggle="tab" href="#tutores" role="tab" aria-controls="tutores"
                    aria-selected="true">Tutores</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="alumnos-tab" data-toggle="tab" href="#alumnos" role="tab" aria-controls="alumnos"
                    aria-selected="false">Alumnos</a>
        </li>

    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="tutores" role="tabpanel" aria-labelledby="tutores-tab">
            <div class="contenedor_f3">
                <br>
                <div class="contenedor_f4">
                <h2>Iniciar sesión padres</h2>
                </div>
                <!-- LOGIN PADRES -->
                <form action="/home_tutor">
                    <p>Correo electrónico: <input type="text" id ="email" name="email" class="t-input" required></p>
                    <p>Contraseña: <input type="password" id="password" name="password" class="t-input" required></p>
                    <div class="contenedor_f4">
                        <button class="btn button" type="submit">Iniciar sesión</button>
                    </div>
                </form>
                <br>
                <div class="contenedor_f4">
                <a href="/recuperar_password">¿Olvidaste la contraseña?</a>
                <p>¿Eres nuevo en iClase? <a href="/registro"> Registra una cuenta</a></p>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="alumnos" role="tabpanel" aria-labelledby="alumnos-tab">
            <div class="contenedor_f3">
                <br>
                <div class="contenedor_f4">
                <h2>Iniciar sesión alumnos</h2>
                </div>
                <!-- LOGIN ALUMNOS -->
                <form action="/home_alumnos">
                    <p>Correo electrónico: <input type="text" id ="email" name="email" class="t-input" required></p>
                    <p>Contraseña: <input type="password" id="password" name="password" class="t-input" required></p>
                    <div class="contenedor_f4">
                        <button class="btn button" type="submit">Iniciar sesión</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@stop
