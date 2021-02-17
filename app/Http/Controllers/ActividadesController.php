<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Padre;
use App\Models\Alumno;
use App\Models\Actividad;
use DB;


class ActividadesController extends Controller
{
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function index($id)
    {
        $padre = Padre::find($id);
        $actividades = DB::table('actividades')
                        ->join('alumnos', 'actividades.id_hijo', '=', 'alumnos.id')
                        -> where('id_padre',$id)->get();
        return view('pages.home_tutor_activities')->with('actividades',$actividades)-> with('padre',$padre);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|max:100',
            'descripcion' => 'required',
            'año' => 'required|numeric',
            'hora_inicio' => 'required|max:64',
            'duracion' => 'required|max:64',
        ]);

        DB::table('comics')->insert([
            'serie' => $request->serie,
            'titulo' => $request->titulo,
            'tomos' => $request->tomos,
            'año' => $request->año,
            'dibujo' => $request->dibujo,
            'guion' => $request->guion,
            'editorial' => $request->editorial,
            'resumen' => $request->resumen,
            'ruta_imagen' => $request->ruta_imagen
        ]);
        
        return redirect('home')->with('success', 'El comic ha sido creado');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::find($id);
        return view('show')->with('comic',$comic);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $comic = Comic::find($id);
         return view('edit')->with('comic',$comic);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        // Con validación
        $request->validate([
            'serie' => 'required|max:64',
            'titulo' => 'required|max:64',
            'tomos' => 'required|max:64',
            'año' => 'required|numeric',
            'dibujo' => 'required|max:64',
            'guion' => 'required|max:64',
            'editorial' => 'required|max:64',
            'resumen' => 'required',
            'ruta_imagen' => 'required'
        ]);

        DB::table('comics')-> where('id',$id)-> update([
            'serie' => $request->serie,
            'titulo' => $request->titulo,
            'tomos' => $request->tomos,
            'año' => $request->año,
            'dibujo' => $request->dibujo,
            'guion' => $request->guion,
            'editorial' => $request->editorial,
            'resumen' => $request->resumen,
            'ruta_imagen' => $request->ruta_imagen
        ]);
        $comic = Comic::find($id);

        return view('show')->with('comic',$comic);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('comics')->where('id',$id)->delete();
        
        $comics = DB::table('comics')->get();
        return view('home')->with('comics',$comics);
    }}
