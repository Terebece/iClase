@extends('layouts.default')
@section('content')

<div class="w-100">
    <div class="w-50 mx-auto text-center">
        <h1>Restablecer contraseña</h1>

        <form action="">
            <label for="email">Correo electrónico:</label><br>
            <input type="text" id="email" name="email"><br>
            <input type="submit" value="Enviar">
        </form>
    </div>
</div>
@stop