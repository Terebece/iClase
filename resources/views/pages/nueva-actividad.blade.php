@extends('layouts.default_tutor')

@section('content')
<style>
    .footer{
        position:relative;
    }
</style>
<div class="w-50 mx-auto">
    <div class="w-50 mx-auto wrapper_add_activity">
        <form action="" id="alta-actividad">
            <h5 class="text-center">Alta actividad</h5>
            <div class="form-group">
                <div class="form-group">
                    <label for="formGroupExampleInput">Título</label>
                    <input type="text" class="form-control" id="get_title_activity" placeholder="Tarea Español">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Descripción</label>
                    <input type="text" class="form-control" id="get_description"
                        placeholder="Resumen de páginas 18 a 21">
                </div>
                <div class="form-group">
    <label for="exampleFormControlSelect1">Tipo de actividad</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Examen</option>
      <option>Tarea</option>
      <option>Repaso</option>
      <option>Videoclase</option>
      <option>Otros</option>
    </select>
  </div>
                <div class="form-group">
                    <div>
                        <div>
                            <label for="formGroupExampleInput">Inicio</label>
                        </div>
                        <input type="time" id="get_time_start" name="appt" required>
                    </div>
                    <div>
                        <div>
                            <label for="formGroupExampleInput">Termina</label>
                        </div>
                        <input type="time" id="get_time_end" name="appt" required>
                    </div>
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


                <br><br>

                <a href="/home_tutor_activities" type="submit" class="btn button-modal">Registrar</a>
                <button type="button" class="btn button-modal-cancel">Cancelar</button>
        </form>
    </div>
</div>


@stop