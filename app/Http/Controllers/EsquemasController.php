<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Esquema;
use DB;

class EsquemasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {      
        $esquemas = DB::table('esquemas')->where('eliminado', 0)->get();
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $esquema = Esquema::find($id);
        //return view('edit')->with('comic',$comic);
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
            'nombre' => 'required|max:100',
            'descripcion' => 'required'
           ]);
        DB::table('esquemas')->insert([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion
        ]);
        $esquema = Esquema::find($id);

        return view('show')->with('esquema',$esquema);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $desactivado = 1;
        DB::table('esquemas')->where('id',$id)-> update([
            'desactivado' => $desactivado
        ]);

        return view('home');
    }
}
