@extends('layouts.default_tutor')

@section('content')
<style>
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

    .form-group.w-100 {
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
        background-image: url('{{url('/images/avatar_tutor/1.png')}}');
        background-repeat: no-repeat;
        background-position: center;
        background-size: contain;
    }

    #radio_color_6.custom-radio .custom-control-input:checked~.custom-control-label::after {
        background-image: unset;
        /* background-image: url('{{url('/images/avatar_tutor/1.png')}}'); */
        border: solid 3px #FFD7A6;
    }

    #radio_color_7 .custom-control-label {
        width: 50px;
        height: 50px;
        background-image: url('{{url('/images/avatar_tutor/2.png')}}');
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
        background-image: url('{{url('/images/avatar_tutor/3.png')}}');
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
        background-image: url('{{url('/images/avatar_tutor/4.png')}}');
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
        background-image: url('{{url('/images/avatar_tutor/5.png')}}');
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
        background-image: url('{{url('/images/avatar_tutor/6.png')}}');
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
        background-image: url('{{url('/images/avatar_tutor/7.png')}}');
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
        background-image: url('{{url('/images/avatar_tutor/8.png')}}');
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
        background-image: url('{{url('/images/avatar_tutor/9.png')}}');
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
        background-image: url('{{url('/images/avatar_tutor/10.png')}}');
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
<section id="config_tutor" class="col-sm-12 col-md-6 mx-auto">
    <form action="" class="w-100">
        <div class="row">
            <div class="col-sm-12 col-md-6 confi_left">
                <div class="contenedor_f1">
                    <div class="contenedor_f2">
                        <div class="contenedor_f4">
                            <h2>Editar perfil</h2>
                        </div><br>
                        <!-- <p>Nombre de usuario: <input type="text" id="change_name_user" name="name_user" class="t-input"></p> -->
                        <div class="form-group">
                            <label for="get_new_username">Nombre de usuario</label>
                            <input type="text" class="form-control" id="get_new_username" placeholder="Javier López">
                        </div>
                        <div class="form-group">
                            <label for="get_new_email">Correo electrónico</label>
                            <input type="email" class="form-control" id="get_new_email"
                                aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 confi_right">
                <div class="w-100">
                    <div>
                        <label for="formGroupExampleInput">Selecciona un ícono identificador:</label>
                    </div>
                    <br>
                    <br>
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
                    <br>
                </div>
            </div>
        </div>
        <br>
        <div class="contenedor_f6">
            <a href="/home_tutor_activities" type="submit" class="btn button-edit">Guardar</a>
            <a href="/home_tutor_activities" type="submit" class="btn button-cancel">Cancelar</a>
        </div>
    </form>
</section>

@stop