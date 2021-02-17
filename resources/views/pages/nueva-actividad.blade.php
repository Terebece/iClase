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



    .wrapper_date,
    .wrapper_colors {
        display: flex;
        justify-content: space-between;
    }

    input#get_time_start,
    input#get_time_end {
        width: 80%;
    }

    /* radio buttons */
    .wrapper_colors .custom-control,
    .wrapper_icons .custom-control {
        padding: 0;
    }

    .custom-control-label::after {
        width: 50px;
        height: 50px;
        position: absolute;
        top: 50%;
        right: 50%;
        transform: translate(50%, -50%);
        left: unset;

    }

    .form-group.w-100{
        display: flex;
    justify-content: space-between;
    align-items: center;
    }

    #radio_color_1 .custom-control-label {
        width: 50px;
        height: 50px;
        border: solid 8px #FFAEAD;
    }

    #radio_color_1.custom-radio .custom-control-input:checked~.custom-control-label::after {
        background-color: #FFAEAD;
        background-image: none;
    }

    #radio_color_2 .custom-control-label {
        width: 50px;
        height: 50px;
        border: solid 8px #CBFFBF;
    }

    #radio_color_2.custom-radio .custom-control-input:checked~.custom-control-label::after {
        background-color: #CBFFBF;
        background-image: none;
    }

    #radio_color_3 .custom-control-label {
        width: 50px;
        height: 50px;
        border: solid 8px #FFC6FF;
    }

    #radio_color_3.custom-radio .custom-control-input:checked~.custom-control-label::after {
        background-color: #FFC6FF;
        background-image: none;
    }

    #radio_color_4 .custom-control-label {
        width: 50px;
        height: 50px;
        border: solid 8px #FDFFB6;
    }

    #radio_color_4.custom-radio .custom-control-input:checked~.custom-control-label::after {
        background-color: #FDFFB6;
        background-image: none;
    }

    #radio_color_5 .custom-control-label {
        width: 50px;
        height: 50px;
        border: solid 8px #FFD7A6;
    }

    #radio_color_5.custom-radio .custom-control-input:checked~.custom-control-label::after {
        background-color: #FFD7A6;
        background-image: none;
    }

    #radio_color_6 .custom-control-label {
        width: 50px;
        height: 50px;
        background-image: url('{{url('/images/iconos/1.png')}}');
        background-repeat: no-repeat;
        background-position: center;
        background-size: contain;
    }

    #radio_color_6.custom-radio .custom-control-input:checked~.custom-control-label::after {
        background-image: unset;
        /* background-image: url('{{url('/images/iconos/1.png')}}'); */
        border: solid 3px #FFD7A6;
    }

    #radio_color_7 .custom-control-label {
        width: 50px;
        height: 50px;
        background-image: url('{{url('/images/iconos/2.png')}}');
        background-repeat: no-repeat;
        background-position: center;
        background-size: contain;
    }

    #radio_color_7.custom-radio .custom-control-input:checked~.custom-control-label::after {

        background-image: unset;
        border: solid 3px #FFD7A6;
    }

    #radio_color_8 .custom-control-label {
        width: 50px;
        height: 50px;
        background-image: url('{{url('/images/iconos/3.png')}}');
        background-repeat: no-repeat;
        background-position: center;
        background-size: contain;
    }

    #radio_color_8.custom-radio .custom-control-input:checked~.custom-control-label::after {

        background-image: unset;
        border: solid 3px #FFD7A6;
    }

    #radio_color_9 .custom-control-label {
        width: 50px;
        height: 50px;
        background-image: url('{{url('/images/iconos/4.png')}}');
        background-repeat: no-repeat;
        background-position: center;
        background-size: contain;
    }

    #radio_color_9.custom-radio .custom-control-input:checked~.custom-control-label::after {

        background-image: unset;
        border: solid 3px #FFD7A6;
    }

    #radio_color_10 .custom-control-label {
        width: 50px;
        height: 50px;
        background-image: url('{{url('/images/iconos/5.png')}}');
        background-repeat: no-repeat;
        background-position: center;
        background-size: contain;
    }

    #radio_color_10.custom-radio .custom-control-input:checked~.custom-control-label::after {

        background-image: unset;
        border: solid 3px #FFD7A6;
    }

    #radio_color_11 .custom-control-label {
        width: 50px;
        height: 50px;
        background-image: url('{{url('/images/iconos/6.png')}}');
        background-repeat: no-repeat;
        background-position: center;
        background-size: contain;
    }

    #radio_color_11.custom-radio .custom-control-input:checked~.custom-control-label::after {

        background-image: unset;
        border: solid 3px #FFD7A6;
    }

    #radio_color_12 .custom-control-label {
        width: 50px;
        height: 50px;
        background-image: url('{{url('/images/iconos/7.png')}}');
        background-repeat: no-repeat;
        background-position: center;
        background-size: contain;
    }

    #radio_color_12.custom-radio .custom-control-input:checked~.custom-control-label::after {

        background-image: unset;
        border: solid 3px #FFD7A6;
    }

    #radio_color_13 .custom-control-label {
        width: 50px;
        height: 50px;
        background-image: url('{{url('/images/iconos/8.png')}}');
        background-repeat: no-repeat;
        background-position: center;
        background-size: contain;
    }

    #radio_color_13.custom-radio .custom-control-input:checked~.custom-control-label::after {

        background-image: unset;
        border: solid 3px #FFD7A6;
    }

    #radio_color_14 .custom-control-label {
        width: 50px;
        height: 50px;
        background-image: url('{{url('/images/iconos/9.png')}}');
        background-repeat: no-repeat;
        background-position: center;
        background-size: contain;
    }

    #radio_color_14.custom-radio .custom-control-input:checked~.custom-control-label::after {

        background-image: unset;
        border: solid 3px #FFD7A6;
    }

    #radio_color_15 .custom-control-label {
        width: 50px;
        height: 50px;
        background-image: url('{{url('/images/iconos/10.png')}}');
        background-repeat: no-repeat;
        background-position: center;
        background-size: contain;
    }

    #radio_color_15.custom-radio .custom-control-input:checked~.custom-control-label::after {

        background-image: unset;
        border: solid 3px #FFD7A6;
    }



    .custom-radio .custom-control-label::before {
        display: none;
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
                <div class=" form-group wrapper_colors ">
                    <div class="custom-control custom-radio " id="radio_color_1">
                        <input type="radio" id="customRadio1" name="customRadio1" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio1"></label>
                    </div>
                    <div class="custom-control custom-radio" id="radio_color_2">
                        <input type="radio" id="customRadio2" name="customRadio1" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio2"></label>
                    </div>
                    <div class="custom-control custom-radio " id="radio_color_3">
                        <input type="radio" id="customRadio3" name="customRadio1" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio3"></label>
                    </div>
                    <div class="custom-control custom-radio " id="radio_color_4">
                        <input type="radio" id="customRadio4" name="customRadio1" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio4"></label>
                    </div>
                    <div class="custom-control custom-radio " id="radio_color_5">
                        <input type="radio" id="customRadio5" name="customRadio1" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio5"></label>
                    </div>

                </div>
                <br>
                <div>
                    <label for="formGroupExampleInput">Selecciona un ícono identificador:</label>
                </div>
                <!-- check icons -->
                <div class="wrapper_icons">
                    <div class="form-group w-100">
                        <div class="custom-control custom-radio " id="radio_color_6">
                            <input type="radio" id="customRadio6" name="customRadio2" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio6"></label>
                        </div>
                        <div class="custom-control custom-radio" id="radio_color_7">
                            <input type="radio" id="customRadio7" name="customRadio2" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio7"></label>
                        </div>
                        <div class="custom-control custom-radio " id="radio_color_8">
                            <input type="radio" id="customRadio8" name="customRadio2" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio8"></label>
                        </div>
                        <div class="custom-control custom-radio " id="radio_color_9">
                            <input type="radio" id="customRadio9" name="customRadio2" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio9"></label>
                        </div>
                        <div class="custom-control custom-radio " id="radio_color_10">
                            <input type="radio" id="customRadio10" name="customRadio2" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio10"></label>
                        </div>
                    </div>

                    <div class="form-group w-100">
                        <div class="custom-control custom-radio " id="radio_color_11">
                            <input type="radio" id="customRadio11" name="customRadio2" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio11"></label>
                        </div>
                        <div class="custom-control custom-radio" id="radio_color_12">
                            <input type="radio" id="customRadio12" name="customRadio2" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio12"></label>
                        </div>
                        <div class="custom-control custom-radio " id="radio_color_13">
                            <input type="radio" id="customRadio13" name="customRadio2" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio13"></label>
                        </div>
                        <div class="custom-control custom-radio " id="radio_color_14">
                            <input type="radio" id="customRadio14" name="customRadio2" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio14"></label>
                        </div>
                        <div class="custom-control custom-radio " id="radio_color_15">
                            <input type="radio" id="customRadio15" name="customRadio2" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio15"></label>
                        </div>

                    </div>
                </div>



                <br><br>



                <a href="/home_tutor_activities" type="submit" class="btn button-modal">Registrar</a>
                <button type="button" class="btn button-modal-cancel">Cancelar</button>
        </form>
    </div>
</div>


@stop