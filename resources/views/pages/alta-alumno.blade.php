@extends('layouts.default_tutor')

@section('content')

<div class="w-50 mx-auto">
<form action="" id="alta-alumno">

<div class="form-group">
    <div class="form-group">
        <label for="formGroupExampleInput">Nombre del alumno</label>
        <input type="text" class="form-control" id="student_name" placeholder="Anita">
    </div>
    <div class="form-group">
        <label for="student_grade">Grado</label>
        <select id="get_student_grade" class="form-control">
            <option disabled>Selecciona...</option>
            <option>1° primaria</option>
            <option>2° primaria</option>
            <option>3° primaria</option>
            <option>4° primaria</option>
            <option>5° primaria</option>
            <option>6° primaria</option>
            <option>1° secundaria</option>
            <option>2° secundaria</option>
            <option>3° secundaria</option>
        </select>
    </div>
    <label for="formGroupExampleInput">Usuario</label>
    <input type="text" class="form-control" id="get_student_name" placeholder="anita_2010">
</div>
<div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="******">
</div>

<a href="/home_tutor_activities" type="submit" class="btn button-modal">Registrar</a>
<button type="button" class="btn button-modal-cancel">Cancelar</button>
</form>
</div>


@stop