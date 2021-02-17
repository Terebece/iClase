@extends('layouts.default_tutor')

@section('content')

<div class="container-fluid">
      <div class="contenedor_f1">
        <div class="contenedor_f2">
            <div class="contenedor_f4">
              <h2>Nueva actividad</h2>
            </div><br>
            <p>Nombre: <input type="text" id ="name_activity" name="name_activity" class="t-input" required></p>
            <p>Descripcion: <input type="text" id ="description" name="description" class="t-input" required></p>
            <div>
            <label for="exampleFormControlSelect1">Tipo de actividad</label>
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>Examen</option>
                    <option>Tarea</option>
                    <option>Repaso</option>
                    <option>Videoclase</option>
                    <option>Otros</option>
                </select>
            </div>
            <div>
                <div>
                    <label for="formGroupExampleInput">Empieza</label>
                </div>
                <input type="time" id="time_start" name="time_start" class="time-input" required>
            </div>
            <div>
                <div>
                    <label for="formGroupExampleInput">Termina</label>
                </div>
                <input type="time" id="time_end" name="time_end" class="time-input" required>
            </div>
            <div>
                <label for="formGroupExampleInput">Días</label>
            </div>
            <div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">L</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2">M</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                    <label class="form-check-label" for="inlineCheckbox3">Mi</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                    <label class="form-check-label" for="inlineCheckbox3">J</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                    <label class="form-check-label" for="inlineCheckbox3">V</label>
                </div>
            </div>
            </p>
            <div class="contenedor_f4">
                <a href="/home_tutor_activities" type="submit" class="btn button-modal">Registrar</a>
                <a href="/home_tutor" type="submit" class="btn button-modal-cancel">Cancelar</a>
            </div>
          </div>
        </div>
      </div>
    </div>

@stop