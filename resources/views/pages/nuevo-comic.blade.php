@extends('layouts.default')
@section('content')
<div class="w-content">
    <br>
<h1 class="big_ttl">Agrega cómic</h1>
    <br>
    <div class="row margin_top_comics">
        <div class="col-sm-6 col-md-6">
            <div class="gray_add_file">
            <!-- <input type="file" id="myfile" name="myfile"> -->
            <img src="{{url('/images/add-file.svg')}}" alt="">
            </div>
        </div>
        <div class="col-sm-6 col-md-6">
            <form>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Serie</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>Flash</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Título</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tomos</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
               
                <div class="form-group">
                    <label for="exampleInputEmail1">Año</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Dibujo</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Guión</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Editorial</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Resumen</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>



                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
</div>
@stop