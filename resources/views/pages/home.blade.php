@extends('layouts.default')

@section('content')
<style>.footer{ position: relative}</style>
<div class="contenedor contenedor-landig">
    <br>
    <div class="contenedor_f4">
      <h1>¡Organiza tus horarios y tareas con iClase!</h1>  
    </div>
    <br><br>
    <div class="row">
      <div class="col-md-7">
        <h2 class="encabezado-landig">Construya y comparta sus esquemas con otros.</h2>
        <p>iClase está aquí para ayudarlo a construir esquemas que se adapten a todas las necesidades de sus hijos. </p>
      </div>
      <div class="col-md-5">
        <img src="{{url('/images/inicio1.jpg')}}" class="img-inicio" alt="">
      </div>
    </div>
    <hr class="divisor">
    <div class="row">
      <div class="col-md-7 order-md-2">
        <h2 class="encabezado-landig">Organice el horario de sus hijos.</h2>
        <p>Desde las actividades escolares hasta las actividades extracurriculares, para aprovechar al máximo su tiempo.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="{{url('/images/inicio2.jpg')}}" class="img-inicio" alt="">
      </div>
    </div>
    <hr class="divisor">
    <div class="row">
      <div class="col-md-7">
        <h2 class="encabezado-landig">Reciba recordatorios y dé seguimiento a las actividades de sus hijos.</h2>
        <p>Establezca un recordatorio para que esté al tanto de sus avances.</p>
      </div>
      <div class="col-md-5">
        <img src="{{url('/images/inicio3.jpg')}}" class="img-inicio" alt="">
      </div>
    </div>
    <div class="divisor-final"></div>
@stop
