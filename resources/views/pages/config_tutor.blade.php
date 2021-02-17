@extends('layouts.default_tutor')

@section('content')

<section class="w-100">
    <div class="container-fluid">
      <div class="contenedor_f1">
        <div class="contenedor_f2">
            <div class="contenedor_f4">
              <h2>Editar perfil</h2>
            </div><br>
            <p>Nombre de usuario: <input type="text" id ="name_user" name="name_user" class="t-input"></p>
            <p>Seleccionar un avatar:</p>
            <div class="contenedor_f6">
              <a  href="/home_tutor" type="submit" class="btn button-edit">Guardar</a>
              <a  href="/home_tutor" type="submit" class="btn button-cancel">Cancelar</a>
            </div>
        </div>
      </div>
    </div>
</section>

@stop
