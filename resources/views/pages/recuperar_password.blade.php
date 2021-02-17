@extends('layouts.default')
@section('content')
<section class="w-100">
  <div class="container-fluid">
    <div class="contenedor_f1">
      <div class="contenedor_f2">
        <form action="">
          <div class="contenedor_f4">
            <h2>Restablecer contraseña</h2>
          </div><br>
          <p>Correo electrónico: <input type="text" id ="email" name="email" class="t-input"></p>
          <div class="contenedor_f4">
              <button class="btn button" type="submit">Enviar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
@stop
