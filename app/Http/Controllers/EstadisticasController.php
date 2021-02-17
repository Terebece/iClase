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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estadistica = Estadistica::find($id);
        return view('show')->with('estadistica',$estadistica);
    }


}
