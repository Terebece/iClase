@extends('layouts.default_tutor')

@section('content')
<style>.footer{ position: relative}</style>

<div class="w-100">
    <div class="w-75 mx-auto">
        <h3>¡Buenos días {{$padre->nombre}}, las actividades de tu hij@ programadas para hoy son: </h3>
        <h2 class="text-center">Actividades de {{$alumno->nombre}}</h2>
        <br>
        <div class="contenedor_f6">
            <a class="btn button-tya" href="" type="submit">Todas las actividades</a>
            <a class="btn button-tya" href="/nueva-actividad" type="submit">Agregar actividad</a>
            <a class="btn button-tya" href="" type="submit">Compartir</a>
        </div>
        <br>
        <ul class="nav nav-pills mb-3 " id="pills-week" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-lunes-tab" data-toggle="pill" href="#pills-lunes"
                                role="tab" aria-controls="pills-lunes" aria-selected="true">Lunes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-martes-tab" data-toggle="pill" href="#pills-martes" role="tab"
                                aria-controls="pills-martes" aria-selected="false">Martes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-miercoles-tab" data-toggle="pill" href="#pills-miercoles"
                                role="tab" aria-controls="pills-miercoles" aria-selected="false">Miercóles</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-jueves-tab" data-toggle="pill" href="#pills-jueves" role="tab"
                                aria-controls="pills-jueves" aria-selected="false">Jueves</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-viernes-tab" data-toggle="pill" href="#pills-viernes"
                                role="tab" aria-controls="pills-viernes" aria-selected="false">Viernes</a>
            </li>
        </ul>
        @foreach($actividades as $actividad)
            <div class="tab-content" id="pills-weekContent">
                <div class="tab-pane fade show active" id="pills-lunes" role="tabpanel" aria-labelledby="pills-lunes-tab">
                @if (strpos($actividad->dias, 'L') !== false)
                    <div class="activity_card">
                        <div class="icon_">
                        </div>
                        <div class="info_tx_">
                            <div class="ml-10">
                                <p>{{$actividad->nombre_actividad}}</p>
                                <p>({{$actividad->hora_inicio}} - {{$actividad->hora_fin}})</p>
                                <p>{{$actividad->activa}}</p>
                            </div>
                            <a class="btn button-esquema" data-toggle="modal" data-target="#modal_add_activity_detail" class="btn_details_">Ver</a>
                        </div>            
                    </div>
                 @endif   
                </div>
                <div class="tab-pane fade" id="pills-martes" role="tabpanel" aria-labelledby="pills-martes-tab">
                @if (strpos($actividad->dias, 'M') !== false)
                    <div class="activity_card">
                        <div class="icon_">            
                        </div>
                        <div class="info_tx_">
                            <div class="ml-10">
                            <p>{{$actividad->nombre_actividad}}</p>
                            <p>({{$actividad->hora_inicio}} - {{$actividad->hora_fin}})</p>
                            <p>{{$actividad->activa}}</p>
                            </div>
                            <a class="btn button-esquema" data-toggle="modal" data-target="#modal_add_activity_detail" class="btn_details_">Ver</a>
                        </div>        
                    </div>
                @endif   
                </div>
                <div class="tab-pane fade" id="pills-miercoles" role="tabpanel" aria-labelledby="pills-miercoles-tab">
                @if (strpos($actividad->dias, 'X') !== false)
                    <div class="activity_card">
                        <div class="icon_">                   
                        </div>
                        <div class="info_tx_">
                            <div class="ml-10">
                                <p>{{$actividad->nombre_actividad}}</p>
                                <p>({{$actividad->hora_inicio}} - {{$actividad->hora_fin}})</p>
                                <p>{{$actividad->activa}}</p>
                            </div>
                            <a class="btn button-esquema" data-toggle="modal" data-target="#modal_add_activity_detail" class="btn_details_">Ver</a>
                        </div>                
                    </div>
                @endif   
                </div>
                <div class="tab-pane fade" id="pills-jueves" role="tabpanel" aria-labelledby="pills-jueves-tab">
                @if (strpos($actividad->dias, 'J') !== false)
                    <div class="activity_card">
                        <div class="icon_">             
                        </div>
                        <div class="info_tx_">
                            <div class="ml-10">
                                <p>{{$actividad->nombre_actividad}}</p>
                                <p>({{$actividad->hora_inicio}} - {{$actividad->hora_fin}})</p>
                                <p>{{$actividad->activa}}</p>
                            </div>
                            <a class="btn button-esquema" data-toggle="modal" data-target="#modal_add_activity_detail" class="btn_details_">Ver</a>
                        </div>            
                    </div>
                @endif   
                </div>
                <div class="tab-pane fade" id="pills-viernes" role="tabpanel" aria-labelledby="pills-viernes-tab">
                @if (strpos($actividad->dias, 'V') !== false)
                    <div class="activity_card">
                        <div class="icon_">
                        </div>
                        <div class="info_tx_">
                            <div class="ml-10">
                                <p>{{$actividad->nombre_actividad}}</p>
                                <p>({{$actividad->hora_inicio}} - {{$actividad->hora_fin}})</p>
                                <p>{{$actividad->activa}}</p>
                            </div>
                            <a class="btn button-esquema" data-toggle="modal" data-target="#modal_add_activity_detail" class="btn_details_">Ver</a>
                        </div>
                    </div>
                @endif   
            </div>
            @endforeach           
        </div>
        @endforeach
    </div>
</div>


<div class="modal fade" id="modal_add_activity_detail" tabindex="-1" role="dialog"
    aria-labelledby="modal_add_activity_detailLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_add_activity_detailLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn button-esquema">Save changes</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="modal_add_activity_form" tabindex="-1" role="dialog"
    aria-labelledby="modal_add_activity_detailsLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_add_activity_detailsLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn button-esquema">Save changes</button>
            </div>
        </div>
    </div>
</div>


@stop
