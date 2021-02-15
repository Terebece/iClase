@extends('layouts.default')
@section('content')
<div class="w-content">
    <br>
    <h1 class="big_ttl">Capítulo 1</h1>
    <br>

    <div class="row">
        <div class="col-sm-12 col-md-7 ">
            <img class="w-img-comic-view" src="{{url('/images/comic-view.jpg')}}" alt="">
            <br>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn_comic_gallery" data-toggle="modal"
                data-target="#exampleModalLong">
                <i class="icon-witness"></i>
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                       
                    <button type="button" class="close close_modal" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        <div class="modal-body">
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="false">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100"
                                            src="{{url('/images/comic-view.jpg')}}" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100"
                                            src="{{url('/images/comic-view.jpg')}}"
                                            alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100"
                                            src="{{url('/images/comic-view.jpg')}}" alt="Third slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-5">
            <div class="wrapper_description">
                <div class="wrapper_icons">
                    <i class="icon-edit"></i>
                    <i class="icon-delete"></i>
                </div>
                <p>Nombre: The Flash</p>
                <p>Guión: Joshua Williamson</p>
                <p>Dibujo: Joshua Williamson</p>
                <p>Año: 206</p>
                <p>Tomos: 1/6</p>
                <p>Editorial: DC Comics</p>
                <br>
                <hr>
                <br>
                <p>3/24</p>
                <p>Descripción</p>
                <p>"LIGHTNING STRIKES TWICE" Chapter One A new storm brews over Central City and disproves the old adage
                    about lightning never, well...you know. Just as Barry begins to feel overwhelmed fighting crime, a
                    new speedster debuts—but just where did this amazing new friend come from? FLASH FACT: "2016 is the
                    60th anniversary of Barry Allen becoming The Flash, and it's a privilege to be a part of it," says
                    writer Joshua Williamson. "'The Return of Barry Allen' in FLASH #79 [1993] is one of my favorite
                    comics of all time. It's where I became a Flash fan for life."</p>
            </div>


        </div>
    </div>
</div>
@stop