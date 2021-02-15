@extends('layouts.default')

@section('content')

<!-- breadcrumb -->
<div class="black_breadcrumb pd_30">
    <p class="m-0">Read comics online in high quality. Free download high quality comics.</p>
</div>

<div class="banner_container">
    <div class="w-content">
        <img class="main_banner" src="{{url('/images/copia2-banner@2x.png')}}" alt="">
    </div>
</div>


<div class="d-flex-jasc w-content cards_user_dir">
    <div class="card custom_card">
        <p>Regístrate y <br>
            crea un usuario</p>
    </div>
    <div class="card custom_card">
        <p>Sube tus cómics en <br>
            cualquier formato <br>
            (.cbr file, .cbz, .pdf, etc..)</p>
    </div>
    <div class="card custom_card">
        <p>Disfruta y comparte <br>
            sin instalar programas</p>
    </div>
</div>

<div class="w-content">
    <img class="w-100 mt_110" src="{{url('/images/marvel-home-banner@2x.png')}}" alt="">
    <br>
    <h1 class="big_ttl">¡Lo más nuevo!</h1>
    <br>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-md-3"><a href="/comic-view"><img class="cover_comic" src="/images/cover-im-1.jpg"
                                alt=""></a></div>
                    <div class="col-md-3"><a href="/comic-view"><img class="cover_comic" src="/images/cover-sup-1.jpg"
                                alt=""></a></div>

                    <div class="col-md-3"><a href="/comic-view"><img class="cover_comic" src="/images/cover-im-1.jpg"
                                alt=""></a></div>
                    <div class="col-md-3"><a href="/comic-view"><img class="cover_comic" src="/images/cover-sup-1.jpg"
                                alt=""></a></div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col-md-3"><a href="/comic-view"><img class="cover_comic" src="/images/cover-im-1.jpg"
                                alt=""></a></div>

                    <div class="col-md-3"><a href="/comic-view"><img class="cover_comic" src="/images/cover-sup-1.jpg"
                                alt=""></a></div>
                    <div class="col-md-3"><a href="/comic-view"><img class="cover_comic" src="/images/cover-im-1.jpg"
                                alt=""></a></div>
                    <div class="col-md-3"><a href="/comic-view"><img class="cover_comic" src="/images/cover-sup-1.jpg"
                                alt=""></a></div>
                </div>
            </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <br>
    <h1 class="big_ttl">¡Lo más nuevo!</h1>
    <br>
    <div id="carouselExampleControls2" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-md-3"><a href="/comic-view"><img class="cover_comic" src="/images/cover-im-1.jpg"
                                alt=""></a></div>
                    <div class="col-md-3"><a href="/comic-view"><img class="cover_comic" src="/images/cover-sup-1.jpg"
                                alt=""></a></div>
                    <div class="col-md-3"><a href="/comic-view"><img class="cover_comic" src="/images/cover-im-1.jpg"
                                alt=""></a></div>
                    <div class="col-md-3"><a href="/comic-view"><img class="cover_comic" src="/images/cover-sup-1.jpg"
                                alt=""></a></div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col-md-3"><a href="/comic-view"><img class="cover_comic" src="/images/cover-im-1.jpg"
                                alt=""></a></div>
                    <div class="col-md-3"><a href="/comic-view"><img class="cover_comic" src="/images/cover-sup-1.jpg"
                                alt=""></a></div>
                    <div class="col-md-3"><a href="/comic-view"><img class="cover_comic" src="/images/cover-im-1.jpg"
                                alt=""></a></div>
                    <div class="col-md-3"><a href="/comic-view"><img class="cover_comic" src="/images/cover-sup-1.jpg"
                                alt=""></a></div>
                </div>
            </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>


@stop