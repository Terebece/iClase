@extends('layouts.default')
@section('content')
<section class="w-100">
    <div class="container-fluid">
      <div class="contenedor_f1">
        <div class="contenedor_f2">
        <form method="POST" action="">
          @csrf
            <div class="contenedor_f4">
              <h2>Registrar cuenta</h2>
            </div><br>
            <p>Nombre de usuario: <input type="text" id ="name_user" name="nombre" class="t-input"></p>
            <p>Correo electrónico: <input type="text" id ="email" name="correo" class="t-input"></p>
            <p>Contraseña: <input type="password" id="password" name="contrasena" class="t-input"></p>
            <p>Confirmar contraseña: <input type="password" id="conf_password" name="conf_password" class="t-input"></p>
            <div class="contenedor_f4">
              <button class="btn button" type="submit">Registrar</button>
            </div>
          </form>
          <br>
          <div class="contenedor_f4">
            <p>Al registrar la cuenta, acepta los <a href=""> Términos de servicio </a> y la <a href=""> Política de privacidad </a></p> 
          </div>
        </div>
      </div>
    </div>
</section>
@stop
