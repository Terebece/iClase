@extends('layouts.default_tutor')

@section('content')
<style>
    .footer {
        position: relative;
    }

    .wrapper_days {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .wrapper_days .form-check-label,
    .wrapper_colors .form-check-label {
        margin-bottom: 0;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        color: black;
        border: solid 0.5px #41AAC0;
    }

    .wrapper_colors .form-check-label {
        border-radius: 0;
    }

    .wrapper_days .form-check-inline,
    .wrapper_colors .form-check-inline {
        margin: 0;
        position: relative;
    }

    .wrapper_days .form-check-inline .form-check-input,
    .wrapper_colors .form-check-inline .form-check-input {
        position: absolute;
        opacity: 0;
        width: 100%;
        height: 100%;
        border-radius: 50%;
    }

    .wrapper_days input.form-check-input[type="checkbox"]:checked+label {
        color: white;
        font-weight: bold;
        background-color: #41AAC0;
    }

    .wrapper_colors #check_color_1 .form-check-label {
        border: solid 8px #FFAEAD;
    }

    .wrapper_colors #check_color_1 input.form-check-input[type="radio"]:checked+label {
        background-color: #FFAEAD;
    }

    .wrapper_colors #check_color_2 .form-check-label {
        border: solid 8px #FFC6FF;
    }

    .wrapper_colors #check_color_2 input.form-check-input[type="radio"]:checked+label {
        background-color: #FFC6FF;
    }

    .wrapper_colors #check_color_3 .form-check-label {
        border: solid 8px #FFD7A6;
    }

    .wrapper_colors #check_color_3 input.form-check-input[type="radio"]:checked+label {
        background-color: #FFD7A6;
    }

    .wrapper_colors #check_color_4 .form-check-label {
        border: solid 8px #BDB2FF;
    }

    .wrapper_colors #check_color_4 input.form-check-input[type="radio"]:checked+label {
        background-color: #BDB2FF;
    }

    .wrapper_colors #check_color_5 .form-check-label {
        border: solid 8px #CBFFBF;
    }

    .wrapper_colors #check_color_5 input.form-check-input[type="radio"]:checked+label {
        background-color: #CBFFBF;
    }

    .wrapper_date,
    .wrapper_colors {
        display: flex;
        justify-content: space-between;
    }

    input#get_time_start,
    input#get_time_end {
        width: 80%;
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
                <div class="form-group wrapper_date">
                    <div class="w-50">
                        <div>
                            <label for="formGroupExampleInput">Inicio</label>
                        </div>
                        <input type="time" id="get_time_start" name="appt" required>
                    </div>
                    <div class="w-50 text-right">
                        <div>
                            <label for="formGroupExampleInput" class="text-right">Termina</label>
                        </div>
                        <input type="time" id="get_time_end" name="appt" required>
                    </div>
                </div>
                <div>
                    <label for="formGroupExampleInput">Selecciona el día:</label>
                </div>

                <!-- check days -->
                <div class="wrapper_days">
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
                <br>
                <div>
                    <label for="formGroupExampleInput">Selecciona un color identificador:</label>
                </div>
                <!-- check colors -->
                


                <div class="wrapper_colors">
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio1">a</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio2">b</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio2">c</label>
                    </div>
                </div>


                <br><br>



                <a href="/home_tutor_activities" type="submit" class="btn button-modal">Registrar</a>
                <button type="button" class="btn button-modal-cancel">Cancelar</button>
        </form>
    </div>
</div>


@stop