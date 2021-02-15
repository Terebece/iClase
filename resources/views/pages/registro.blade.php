@extends('layouts.default')
@section('content')
<section class="w-100">
    <div class="w-50 mx-auto text-center">
        <h1>Registrar cuenta</h1>

        <form action="">
            <label for="name_user">Nombre de usuario:</label><br>
            <input type="text" id="name_user" name="name_user"><br>
            <label for="email">Correo electrónico:</label><br>
            <input type="text" id="email" name="email"><br>
            <label for="password">Contraseña:</label><br>
            <input type="password" id="password" name="password"><br><br>
            <label for="conf_password">Confirmar contraseña:</label><br>
            <input type="password" id="conf_password" name="conf_password"><br><br>
            <input type="submit" value="Registrar">
        </form>
        <br>
        <p>Al registrar la cuenta, acepta los <a href=""> Términos de servicio </a> y la <a href=""> Política de
                privacidad </a></p>
    </div>
</section>
@stop