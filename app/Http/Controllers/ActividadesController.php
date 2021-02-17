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
            'nombre_actividad' => 'required|max:100',
            'descripcion' => 'required',
            'hora_inicio' => 'required',
            'hora_fin' => 'required',
            'imagen_actividad' => 'required',
            'color' => 'required',
            'dias' => 'required',
        ]);

        DB::table('comics')->insert([
            'id_hijo'=> $id
            'nombre_actividad' => $request->nombre_actividad,
            'descripcion' => $request->descripcion,
            'hora_inicio' => $request-> hora_inicio,
            'hora_fin' => $request-> hora_fin,
            'imagen_actividad' => $request->imagen_actividad
            'color' => $request->color,
            'dias' => $request->dias,
        ]);
        
        return redirect('home_tutor_actividades');

    }

}
