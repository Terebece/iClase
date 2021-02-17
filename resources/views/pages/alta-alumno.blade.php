@extends('layouts.default_tutor')

@section('content')

<section class="w-100">
    <div class="container-fluid">
      <div class="contenedor_f1">
        <div class="contenedor_f2">
            <div class="contenedor_f4">
              <h2>Registrar alumno</h2>
            </div><br>
            <p>Nombre del alumno: <input type="text" id ="name_student" name="name_student" class="t-input"></p>
            <p>Correo electrónico: <input type="text" id ="email" name="email" class="t-input"></p>
            <p>Contraseña: <input type="password" id="password" name="password" class="t-input"></p>
            <div class="contenedor_f4">
                <a href="/home_tutor_activities" type="submit" class="btn button-modal">Registrar</a>
                <button type="button" class="btn button-modal-cancel">Cancelar</button>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

@stop
