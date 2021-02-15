@extends('layouts.default')
@section('content')
<p>Iniciar sesión</p>


<section class="w-100">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                aria-selected="true">Padres</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                aria-selected="false">Alumnos</a>
        </li>

    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

            <h1>Iniciar sesión - Tutor</h1>
                <!-- LOGIN PADRES -->
            <form action="">
                <label for="email">Correo electrónico:</label><br>
                <input type="text" id="email" name="email"><br>
                <label for="password">Contraseña:</label><br>
                <input type="password" id="password" name="password"><br><br>
                <!-- <input type="submit" value="Iniciar sesión"> -->
                <a type="button" class="btn btn-primary" href="/home_tutor">Iniciar sesión</a>
            </form>
            <br>
            <a href="/recuperar_password">¿Olvidaste la contraseña?</a>
            <p>¿Eres nuevo en iClase? <a href="/registro"> Registra una cuenta</a></p>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">


            <h1>Iniciar sesión - Alumno</h1>
                <!-- LOGIN ALUMNOS -->
            <form action="">
                <label for="email">Correo electrónico:</label><br>
                <input type="text" id="email" name="email"><br>
                <label for="password">Contraseña:</label><br>
                <input type="password" id="password" name="password"><br><br>
                <input type="submit" value="Iniciar sesión">
            </form>
        </div>

    </div>
</section>
@stop