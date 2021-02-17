@extends('layouts.default_student')

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
    
  #radio_avatar_b1 .custom-control-label {
    width: 50px;
    height: 50px;
    background-image: url('{{url('/images/avatar_alumno/b1.png')}}');
    background-repeat: no-repeat;
    background-position: center;
    background-size: contain;
  }

  #radio_avatar_b1.custom-radio .custom-control-input:checked~.custom-control-label::after {

    background-image: unset;
    border: solid 3px #FFD7A6;
  }

  #radio_avatar_b2 .custom-control-label {
    width: 50px;
    height: 50px;
    background-image: url('{{url('/images/avatar_alumno/b2.png')}}');
    background-repeat: no-repeat;
    background-position: center;
    background-size: contain;
  }

  #radio_avatar_b2.custom-radio .custom-control-input:checked~.custom-control-label::after {

    background-image: unset;
    border: solid 3px #FFD7A6;
  }
  #radio_avatar_b3 .custom-control-label {
    width: 50px;
    height: 50px;
    background-image: url('{{url('/images/avatar_alumno/b3.png')}}');
    background-repeat: no-repeat;
    background-position: center;
    background-size: contain;
  }

  #radio_avatar_b3.custom-radio .custom-control-input:checked~.custom-control-label::after {

    background-image: unset;
    border: solid 3px #FFD7A6;
  }
  #radio_avatar_b4 .custom-control-label {
    width: 50px;
    height: 50px;
    background-image: url('{{url('/images/avatar_alumno/b4.png')}}');
    background-repeat: no-repeat;
    background-position: center;
    background-size: contain;
  }

  #radio_avatar_b4.custom-radio .custom-control-input:checked~.custom-control-label::after {

    background-image: unset;
    border: solid 3px #FFD7A6;
  }
  #radio_avatar_b5 .custom-control-label {
    width: 50px;
    height: 50px;
    background-image: url('{{url('/images/avatar_alumno/b5.png')}}');
    background-repeat: no-repeat;
    background-position: center;
    background-size: contain;
  }

  #radio_avatar_b5.custom-radio .custom-control-input:checked~.custom-control-label::after {

    background-image: unset;
    border: solid 3px #FFD7A6;
  }
  #radio_avatar_b6 .custom-control-label {
    width: 50px;
    height: 50px;
    background-image: url('{{url('/images/avatar_alumno/b6.png')}}');
    background-repeat: no-repeat;
    background-position: center;
    background-size: contain;
  }

  #radio_avatar_b6.custom-radio .custom-control-input:checked~.custom-control-label::after {

    background-image: unset;
    border: solid 3px #FFD7A6;
  }
  #radio_avatar_b7 .custom-control-label {
    width: 50px;
    height: 50px;
    background-image: url('{{url('/images/avatar_alumno/b7.png')}}');
    background-repeat: no-repeat;
    background-position: center;
    background-size: contain;
  }

  #radio_avatar_b7.custom-radio .custom-control-input:checked~.custom-control-label::after {

    background-image: unset;
    border: solid 3px #FFD7A6;
  }
  #radio_avatar_b8 .custom-control-label {
    width: 50px;
    height: 50px;
    background-image: url('{{url('/images/avatar_alumno/b8.png')}}');
    background-repeat: no-repeat;
    background-position: center;
    background-size: contain;
  }

  #radio_avatar_b8.custom-radio .custom-control-input:checked~.custom-control-label::after {

    background-image: unset;
    border: solid 3px #FFD7A6;
  }
  #radio_avatar_b9 .custom-control-label {
    width: 50px;
    height: 50px;
    background-image: url('{{url('/images/avatar_alumno/b9.png')}}');
    background-repeat: no-repeat;
    background-position: center;
    background-size: contain;
  }

  #radio_avatar_b9.custom-radio .custom-control-input:checked~.custom-control-label::after {

    background-image: unset;
    border: solid 3px #FFD7A6;
  }
  #radio_avatar_b10 .custom-control-label {
    width: 50px;
    height: 50px;
    background-image: url('{{url('/images/avatar_alumno/b10.png')}}');
    background-repeat: no-repeat;
    background-position: center;
    background-size: contain;
  }

  #radio_avatar_b10.custom-radio .custom-control-input:checked~.custom-control-label::after {

    background-image: unset;
    border: solid 3px #FFD7A6;
  }

  #radio_avatar_g1 .custom-control-label {
    width: 50px;
    height: 50px;
    background-image: url('{{url('/images/avatar_alumno/b1.png')}}');
    background-repeat: no-repeat;
    background-position: center;
    background-size: contain;
  }

  #radio_avatar_g1.custom-radio .custom-control-input:checked~.custom-control-label::after {

    background-image: unset;
    border: solid 3px #FFD7A6;
  }
  #radio_avatar_g2 .custom-control-label {
    width: 50px;
    height: 50px;
    background-image: url('{{url('/images/avatar_alumno/b2.png')}}');
    background-repeat: no-repeat;
    background-position: center;
    background-size: contain;
  }

  #radio_avatar_g2.custom-radio .custom-control-input:checked~.custom-control-label::after {

    background-image: unset;
    border: solid 3px #FFD7A6;
  }
  #radio_avatar_g3 .custom-control-label {
    width: 50px;
    height: 50px;
    background-image: url('{{url('/images/avatar_alumno/g3.png')}}');
    background-repeat: no-repeat;
    background-position: center;
    background-size: contain;
  }

  #radio_avatar_g3.custom-radio .custom-control-input:checked~.custom-control-label::after {

    background-image: unset;
    border: solid 3px #FFD7A6;
  }
  #radio_avatar_g4 .custom-control-label {
    width: 50px;
    height: 50px;
    background-image: url('{{url('/images/avatar_alumno/g4.png')}}');
    background-repeat: no-repeat;
    background-position: center;
    background-size: contain;
  }

  #radio_avatar_g4.custom-radio .custom-control-input:checked~.custom-control-label::after {

    background-image: unset;
    border: solid 3px #FFD7A6;
  }
  #radio_avatar_g5 .custom-control-label {
    width: 50px;
    height: 50px;
    background-image: url('{{url('/images/avatar_alumno/g5.png')}}');
    background-repeat: no-repeat;
    background-position: center;
    background-size: contain;
  }

  #radio_avatar_g5.custom-radio .custom-control-input:checked~.custom-control-label::after {

    background-image: unset;
    border: solid 3px #FFD7A6;
  }
  #radio_avatar_g6 .custom-control-label {
    width: 50px;
    height: 50px;
    background-image: url('{{url('/images/avatar_alumno/g6.png')}}');
    background-repeat: no-repeat;
    background-position: center;
    background-size: contain;
  }

  #radio_avatar_g6.custom-radio .custom-control-input:checked~.custom-control-label::after {

    background-image: unset;
    border: solid 3px #FFD7A6;
  }
  #radio_avatar_g7 .custom-control-label {
    width: 50px;
    height: 50px;
    background-image: url('{{url('/images/avatar_alumno/g7.png')}}');
    background-repeat: no-repeat;
    background-position: center;
    background-size: contain;
  }

  #radio_avatar_g7.custom-radio .custom-control-input:checked~.custom-control-label::after {

    background-image: unset;
    border: solid 3px #FFD7A6;
  }
  #radio_avatar_g8 .custom-control-label {
    width: 50px;
    height: 50px;
    background-image: url('{{url('/images/avatar_alumno/g8.png')}}');
    background-repeat: no-repeat;
    background-position: center;
    background-size: contain;
  }

  #radio_avatar_g8.custom-radio .custom-control-input:checked~.custom-control-label::after {

    background-image: unset;
    border: solid 3px #FFD7A6;
  }
  #radio_avatar_g9 .custom-control-label {
    width: 50px;
    height: 50px;
    background-image: url('{{url('/images/avatar_alumno/g9.png')}}');
    background-repeat: no-repeat;
    background-position: center;
    background-size: contain;
  }

  #radio_avatar_g9.custom-radio .custom-control-input:checked~.custom-control-label::after {

    background-image: unset;
    border: solid 3px #FFD7A6;
  }
  #radio_avatar_g10 .custom-control-label {
    width: 50px;
    height: 50px;
    background-image: url('{{url('/images/avatar_alumno/g10.png')}}');
    background-repeat: no-repeat;
    background-position: center;
    background-size: contain;
  }

  #radio_avatar_g10.custom-radio .custom-control-input:checked~.custom-control-label::after {

    background-image: unset;
    border: solid 3px #FFD7A6;
  }

    .custom-radio .custom-control-label::before {
        display: none;
    }

  
</style>
<section id="config_tutor" class="mx-auto">
  <form action="" class="w-100">
    <div class="contenedor_f1">
      <div class="contenedor_f2">
        <div class="contenedor_f4">
          <h2>Selecciona un ícono identificador:</h2>
        </div><br>
        <div class="w-100">
          <div class="wrapper_icons">
            <div class="form-group w-100">
              <div class="custom-control custom-radio " id="radio_avatar_b1">
                <input type="radio" id="customRadioB1" name="customRadio2" class="custom-control-input">
                <label class="custom-control-label" for="customRadioB1"></label>
              </div>
              <div class="custom-control custom-radio" id="radio_avatar_b2">
                <input type="radio" id="customRadioB2" name="customRadio2" class="custom-control-input">
                <label class="custom-control-label" for="customRadioB2"></label>
              </div>
              <div class="custom-control custom-radio " id="radio_avatar_b3">
                <input type="radio" id="customRadioB3" name="customRadio2" class="custom-control-input">
                <label class="custom-control-label" for="customRadioB3"></label>
              </div>
              <div class="custom-control custom-radio " id="radio_avatar_b4">
                <input type="radio" id="customRadioB4" name="customRadio2" class="custom-control-input">
                <label class="custom-control-label" for="customRadioB4"></label>
              </div>
              <div class="custom-control custom-radio " id="radio_avatar_b5">
                <input type="radio" id="customRadioB5" name="customRadio2" class="custom-control-input">
                <label class="custom-control-label" for="customRadioB5"></label>
              </div>
            </div>
            <div class="form-group w-100">
              <div class="custom-control custom-radio " id="radio_avatar_b6">
                <input type="radio" id="customRadioB6" name="customRadio2" class="custom-control-input">
                <label class="custom-control-label" for="customRadioB6"></label>
              </div>
              <div class="custom-control custom-radio" id="radio_avatar_b7">
                <input type="radio" id="customRadioB7" name="customRadio2" class="custom-control-input">
                <label class="custom-control-label" for="customRadioB7"></label>
              </div>
              <div class="custom-control custom-radio " id="radio_avatar_b8">
                <input type="radio" id="customRadioB8" name="customRadio2" class="custom-control-input">
                <label class="custom-control-label" for="customRadioB8"></label>
              </div>
              <div class="custom-control custom-radio " id="radio_avatar_b9">
                <input type="radio" id="customRadioB9" name="customRadio2" class="custom-control-input">
                <label class="custom-control-label" for="customRadioB9"></label>
              </div>
              <div class="custom-control custom-radio " id="radio_avatar_b10">
                <input type="radio" id="customRadioB10" name="customRadio2" class="custom-control-input">
                <label class="custom-control-label" for="customRadioB10"></label>
              </div>
            </div>
            <div class="form-group w-100">
              <div class="custom-control custom-radio " id="radio_avatar_g1">
                <input type="radio" id="customRadioG1" name="customRadio2" class="custom-control-input">
                <label class="custom-control-label" for="customRadioG1"></label>
              </div>
              <div class="custom-control custom-radio" id="radio_avatar_g2">
                <input type="radio" id="customRadioG2" name="customRadio2" class="custom-control-input">
                <label class="custom-control-label" for="customRadioG2"></label>
              </div>
              <div class="custom-control custom-radio " id="radio_avatar_g3">
                <input type="radio" id="customRadioG3" name="customRadio2" class="custom-control-input">
                <label class="custom-control-label" for="customRadioG3"></label>
              </div>
              <div class="custom-control custom-radio " id="radio_avatar_g4">
                <input type="radio" id="customRadioG4" name="customRadio2" class="custom-control-input">
                <label class="custom-control-label" for="customRadioG4"></label>
              </div>
              <div class="custom-control custom-radio " id="radio_avatar_g5">
                <input type="radio" id="customRadioG5" name="customRadio2" class="custom-control-input">
                <label class="custom-control-label" for="customRadioG5"></label>
              </div>
            </div>
            <div class="form-group w-100">
              <div class="custom-control custom-radio " id="radio_avatar_g6">
                <input type="radio" id="customRadioG6" name="customRadio2" class="custom-control-input">
                <label class="custom-control-label" for="customRadioG6"></label>
              </div>
              <div class="custom-control custom-radio" id="radio_avatar_g7">
                <input type="radio" id="customRadioG7" name="customRadio2" class="custom-control-input">
                <label class="custom-control-label" for="customRadioG7"></label>
              </div>
              <div class="custom-control custom-radio " id="radio_avatar_g8">
                <input type="radio" id="customRadioG8" name="customRadio2" class="custom-control-input">
                <label class="custom-control-label" for="customRadioG8"></label>
              </div>
              <div class="custom-control custom-radio " id="radio_avatar_g9">
                <input type="radio" id="customRadioG9" name="customRadio2" class="custom-control-input">
                <label class="custom-control-label" for="customRadioG9"></label>
              </div>
              <div class="custom-control custom-radio " id="radio_avatar_g10">
                <input type="radio" id="customRadioG10" name="customRadio2" class="custom-control-input">
                <label class="custom-control-label" for="customRadioG10"></label>
              </div>
            </div>
          </div>
        </div>
        <div class="contenedor_f6">
          <a href="/home_tutor" type="submit" class="btn button-edit">Guardar</a>
          <a href="/home_tutor" type="submit" class="btn button-cancel">Cancelar</a>
        </div>
      </div>
    </div>   
  </form>
</section>

@stop
