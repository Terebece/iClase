<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estadistica;
use DB;

class EstadisticasController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {      

        $estadisticas = DB::table('estadisticas')->where('id_actividad', $id)->get();
        //return view('home')->with('esquemas',$esquemas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('nuevo-comic');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:100',
            'descripcion' => 'required'
           ]);
        DB::table('esquemas')->insert([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion
        ]); 

        //return redirect('home');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $esquema = Esquema::find($id);
        return view('show')->with('esquema',$esquema);
    }


}
