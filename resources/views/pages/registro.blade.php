@extends('layouts.default')
@section('content')
<section class="w-100">
    <div class="container-fluid">
      <div class="contenedor_f1">
        <div class="contenedor_f2">
          <form id="form_registro" action="/home_tutor">
            <div class="contenedor_f4">
              <h2>Registrar cuenta</h2>
            </div><br>
            <p>Nombre de usuario: <input type="text" id ="name_user" name="name_user" class="t-input" required></p>
            <p>Correo electrónico: <input type="text" id ="email" name="email" class="t-input" required></p>
            <p>Contraseña: <input type="password" id="password" name="password" class="t-input" required></p>
            <p>Confirmar contraseña: <input type="password" id="conf_password" name="conf_password" class="t-input" required></p>
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
