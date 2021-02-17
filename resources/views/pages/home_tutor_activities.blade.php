@extends('layouts.default_tutor')

@section('content')
<style>.footer{ position: relative}</style>

<div class="w-100">
    <div class="w-75 mx-auto">
        <p class="text-center font-weight-bold">¡Hola Pablo! las actividades para hoy son:</p>
        <br>
        <h2 class="text-center">Actividades de Anita</h2>
        <br>
        <div class="contenedor_f6">
            
            <<a class="btn button-tya" href="/nueva-actividad" type="submit">Agregar actividad</a>
            <a class="btn button-tya" href="/estadisticas" type="submit">Ver estadísticas</a>
            <a class="btn button-tya" href="" type="submit">Compartir</a>
        </div>
        <br>
        <ul class="nav nav-pills mb-3 " id="pills-week" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-lunes-tab" data-toggle="pill" href="#pills-lunes" role="tab" aria-controls="pills-lunes" aria-selected="true">Lunes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-martes-tab" data-toggle="pill" href="#pills-martes" role="tab" aria-controls="pills-martes" aria-selected="false">Martes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-miercoles-tab" data-toggle="pill" href="#pills-miercoles" role="tab" aria-controls="pills-miercoles" aria-selected="false">Miercóles</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-jueves-tab" data-toggle="pill" href="#pills-jueves" role="tab" aria-controls="pills-jueves" aria-selected="false">Jueves</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-viernes-tab" data-toggle="pill" href="#pills-viernes" role="tab" aria-controls="pills-viernes" aria-selected="false">Viernes</a>
            </li>
        </ul>
        <div class="tab-content" id="pills-weekContent">
            <div class="tab-pane fade show active" id="pills-lunes" role="tabpanel" aria-labelledby="pills-lunes-tab">
                <div class="activity_card">
                    <div class="icon_">
                    <img class="w-50" src="{{url('/images/iconos/3.png')}}" alt="">
                    </div>
                    <div class="info_tx_">
                        <div class="ml-10">
                        <p>Tarea de Química</p>
                        <p>De 10:30 am a 11:45 am</p>
                        <p>Pendiente</p>
                        </div>
                        <a class="btn button-esquema" data-toggle="modal" data-target="#modal_add_activity_detail">Ver</a>
                    </div>          
                </div>
                <div class="activity_card">
                    <div class="icon_">
                        <img class="w-50" src="{{url('/images/iconos/1.png')}}" alt="">
                    </div>
                    <div class="info_tx_">
                        <div class="ml-10">
                        <p>Tarea de Química</p>
                        <p>De 10:30 am a 11:45 am</p>
                        <p>Pendiente</p>
                        </div>
                        <a class="btn button-esquema" data-toggle="modal" data-target="#modal_add_activity_detail">Ver</a>
                    </div>          
                </div>
                <div class="activity_card">
                    <div class="icon_">
                    <img class="w-50" src="{{url('/images/iconos/2.png')}}" alt="">
                    </div>
                    <div class="info_tx_">
                        <div class="ml-10">
                        <p>Tarea de Química</p>
                        <p>De 10:30 am a 11:45 am</p>
                        <p>Pendiente</p>
                        </div>
                        <a class="btn button-esquema" data-toggle="modal" data-target="#modal_add_activity_detail">Ver</a>
                    </div>  
                </div>
                <div class="activity_card">
                    <div class="icon_">
                    <img class="w-50" src="{{url('/images/iconos/2.png')}}" alt="">
                    </div>
                    <div class="info_tx_">
                        <div class="ml-10">
                        <p>Tarea de Química</p>
                        <p>De 10:30 am a 11:45 am</p>
                        <p>Pendiente</p>
                        </div>
                        <a class="btn button-esquema" data-toggle="modal" data-target="#modal_add_activity_detail">Ver</a>
                    </div>  
                </div>
            </div>
            <div class="tab-pane fade" id="pills-martes" role="tabpanel" aria-labelledby="pills-martes-tab">
            <div class="activity_card">
                    <div class="icon_">
                    <img class="w-50" src="{{url('/images/iconos/3.png')}}" alt="">
                    </div>
                    <div class="info_tx_">
                        <div class="ml-10">
                        <p>Tarea de Química</p>
                        <p>De 10:30 am a 11:45 am</p>
                        <p>Pendiente</p>
                        </div>
                        <a class="btn button-esquema" data-toggle="modal" data-target="#modal_add_activity_detail">Ver</a>
                    </div>          
                </div>
                <div class="activity_card">
                    <div class="icon_">
                        <img class="w-50" src="{{url('/images/iconos/1.png')}}" alt="">
                    </div>
                    <div class="info_tx_">
                        <div class="ml-10">
                        <p>Tarea de Química</p>
                        <p>De 10:30 am a 11:45 am</p>
                        <p>Pendiente</p>
                        </div>
                        <a class="btn button-esquema" data-toggle="modal" data-target="#modal_add_activity_detail">Ver</a>
                    </div>          
                </div>
                <div class="activity_card">
                    <div class="icon_">
                    <img class="w-50" src="{{url('/images/iconos/2.png')}}" alt="">
                    </div>
                    <div class="info_tx_">
                        <div class="ml-10">
                        <p>Tarea de Química</p>
                        <p>De 10:30 am a 11:45 am</p>
                        <p>Pendiente</p>
                        </div>
                        <a class="btn button-esquema" data-toggle="modal" data-target="#modal_add_activity_detail">Ver</a>
                    </div>  
                </div>
                <div class="activity_card">
                    <div class="icon_">
                    <img class="w-50" src="{{url('/images/iconos/2.png')}}" alt="">
                    </div>
                    <div class="info_tx_">
                        <div class="ml-10">
                        <p>Tarea de Química</p>
                        <p>De 10:30 am a 11:45 am</p>
                        <p>Pendiente</p>
                        </div>
                        <a class="btn button-esquema" data-toggle="modal" data-target="#modal_add_activity_detail">Ver</a>
                    </div>  
                </div>
            </div>
            <div class="tab-pane fade" id="pills-miercoles" role="tabpanel" aria-labelledby="pills-miercoles-tab">
            <div class="activity_card">
                    <div class="icon_">
                    <img class="w-50" src="{{url('/images/iconos/3.png')}}" alt="">
                    </div>
                    <div class="info_tx_">
                        <div class="ml-10">
                        <p>Tarea de Química</p>
                        <p>De 10:30 am a 11:45 am</p>
                        <p>Pendiente</p>
                        </div>
                        <a class="btn button-esquema" data-toggle="modal" data-target="#modal_add_activity_detail">Ver</a>
                    </div>          
                </div>
                <div class="activity_card">
                    <div class="icon_">
                        <img class="w-50" src="{{url('/images/iconos/1.png')}}" alt="">
                    </div>
                    <div class="info_tx_">
                        <div class="ml-10">
                        <p>Tarea de Química</p>
                        <p>De 10:30 am a 11:45 am</p>
                        <p>Pendiente</p>
                        </div>
                        <a class="btn button-esquema" data-toggle="modal" data-target="#modal_add_activity_detail">Ver</a>
                    </div>          
                </div>
                <div class="activity_card">
                    <div class="icon_">
                    <img class="w-50" src="{{url('/images/iconos/2.png')}}" alt="">
                    </div>
                    <div class="info_tx_">
                        <div class="ml-10">
                        <p>Tarea de Química</p>
                        <p>De 10:30 am a 11:45 am</p>
                        <p>Pendiente</p>
                        </div>
                        <a class="btn button-esquema" data-toggle="modal" data-target="#modal_add_activity_detail">Ver</a>
                    </div>  
                </div>
                <div class="activity_card">
                    <div class="icon_">
                    <img class="w-50" src="{{url('/images/iconos/2.png')}}" alt="">
                    </div>
                    <div class="info_tx_">
                        <div class="ml-10">
                        <p>Tarea de Química</p>
                        <p>De 10:30 am a 11:45 am</p>
                        <p>Pendiente</p>
                        </div>
                        <a class="btn button-esquema" data-toggle="modal" data-target="#modal_add_activity_detail">Ver</a>
                    </div>  
                </div>
            </div>
            <div class="tab-pane fade" id="pills-jueves" role="tabpanel" aria-labelledby="pills-jueves-tab">
            <div class="activity_card">
                    <div class="icon_">
                    <img class="w-50" src="{{url('/images/iconos/3.png')}}" alt="">
                    </div>
                    <div class="info_tx_">
                        <div class="ml-10">
                        <p>Tarea de Química</p>
                        <p>De 10:30 am a 11:45 am</p>
                        <p>Pendiente</p>
                        </div>
                        <a class="btn button-esquema" data-toggle="modal" data-target="#modal_add_activity_detail">Ver</a>
                    </div>          
                </div>
                <div class="activity_card">
                    <div class="icon_">
                        <img class="w-50" src="{{url('/images/iconos/1.png')}}" alt="">
                    </div>
                    <div class="info_tx_">
                        <div class="ml-10">
                        <p>Tarea de Química</p>
                        <p>De 10:30 am a 11:45 am</p>
                        <p>Pendiente</p>
                        </div>
                        <a class="btn button-esquema" data-toggle="modal" data-target="#modal_add_activity_detail">Ver</a>
                    </div>          
                </div>
                <div class="activity_card">
                    <div class="icon_">
                    <img class="w-50" src="{{url('/images/iconos/2.png')}}" alt="">
                    </div>
                    <div class="info_tx_">
                        <div class="ml-10">
                        <p>Tarea de Química</p>
                        <p>De 10:30 am a 11:45 am</p>
                        <p>Pendiente</p>
                        </div>
                        <a class="btn button-esquema" data-toggle="modal" data-target="#modal_add_activity_detail">Ver</a>
                    </div>  
                </div>
                <div class="activity_card">
                    <div class="icon_">
                    <img class="w-50" src="{{url('/images/iconos/2.png')}}" alt="">
                    </div>
                    <div class="info_tx_">
                        <div class="ml-10">
                        <p>Tarea de Química</p>
                        <p>De 10:30 am a 11:45 am</p>
                        <p>Pendiente</p>
                        </div>
                        <a class="btn button-esquema" data-toggle="modal" data-target="#modal_add_activity_detail">Ver</a>
                    </div>  
                </div>
            </div>
            <div class="tab-pane fade" id="pills-viernes" role="tabpanel" aria-labelledby="pills-viernes-tab">
            <div class="activity_card">
                    <div class="icon_">
                    <img class="w-50" src="{{url('/images/iconos/3.png')}}" alt="">
                    </div>
                    <div class="info_tx_">
                        <div class="ml-10">
                        <p>Tarea de Química</p>
                        <p>De 10:30 am a 11:45 am</p>
                        <p>Pendiente</p>
                        </div>
                        <a class="btn button-esquema" data-toggle="modal" data-target="#modal_add_activity_detail">Ver</a>
                    </div>          
                </div>
                <div class="activity_card">
                    <div class="icon_">
                        <img class="w-50" src="{{url('/images/iconos/1.png')}}" alt="">
                    </div>
                    <div class="info_tx_">
                        <div class="ml-10">
                        <p>Tarea de Química</p>
                        <p>De 10:30 am a 11:45 am</p>
                        <p>Pendiente</p>
                        </div>
                        <a class="btn button-esquema" data-toggle="modal" data-target="#modal_add_activity_detail">Ver</a>
                    </div>          
                </div>
                <div class="activity_card">
                    <div class="icon_">
                    <img class="w-50" src="{{url('/images/iconos/2.png')}}" alt="">
                    </div>
                    <div class="info_tx_">
                        <div class="ml-10">
                        <p>Tarea de Química</p>
                        <p>De 10:30 am a 11:45 am</p>
                        <p>Pendiente</p>
                        </div>
                        <a class="btn button-esquema" data-toggle="modal" data-target="#modal_add_activity_detail">Ver</a>
                    </div>  
                </div>
                <div class="activity_card">
                    <div class="icon_">
                    <img class="w-50" src="{{url('/images/iconos/2.png')}}" alt="">
                    </div>
                    <div class="info_tx_">
                        <div class="ml-10">
                        <p>Tarea de Química</p>
                        <p>De 10:30 am a 11:45 am</p>
                        <p>Pendiente</p>
                        </div>
                        <a class="btn button-esquema" data-toggle="modal" data-target="#modal_add_activity_detail">Ver</a>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal_add_activity_detail" tabindex="-1" role="dialog"
    aria-labelledby="modal_add_activity_detailLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_add_activity_detailsLabel">Detalle de actividad</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body mx-auto w-75">
                <h3 id="ttl_activity" class="text-center">Clase de mátematicas</h3>
                <p id="activity_description">Video clase para repasar la sección 8.</p>
                <p id="type_activity">Clase</p>
                <p id="time_activity">11:00 am</p>
                <p id="date_activity">22/02/2021 </p>
                <img src="{{url('/images/iconos/9.png')}}" alt="" id="icon_activity" class="w-50 mx-auto d-block">
            </div>
            <div class="modal-footer">
               
                <a class="btn button-modal" href="/actualiza_actividad">Editar</a>
                <a class="btn button-modal-cancel" href="/home_tutor_activities">Cerrar</a>
            </div>
        </div>
    </div>
</div>

@stop
