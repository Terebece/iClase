@extends('layouts.default_tutor')

@section('content')

<div class="text-center">
    <p class="text-center">Aún no haz registrado a ningún alumno,
        ¡Registra uno para comenzar a organizar su horario!</p>


    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#registro_alumno">
        Registra a tu hijo aquí
    </button>

    <!-- Modal -->
    <div class="modal fade" id="registro_alumno" tabindex="-1" aria-labelledby="registro_alumnoLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registro_alumnoLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Nombre del alumno</label>
                            <input type="text" class="form-control" id="student_name" placeholder="Anita">
                        </div>
                        <div class="form-group">
                            <label for="student_grade">Grado</label>
                            <select id="student_grade" class="form-control">
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
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="anita_2010">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="******">
                    </div>

                    <button type="submit" class="btn btn-primary" data-dismiss="modal">Submit</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
                <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
            </div>
        </div>
    </div>
</div>

@stop