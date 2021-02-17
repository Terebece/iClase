<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Padre;
use DB;

class PadresController extends Controller
{

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
        $correo = $request->input('correo');
        $usuario= DB::table('padres')->where('correo',$correo)->first();
        if($usuario ==null){
            $request->validate([
                'nombre' => 'required|max:100',
                'correo' => 'required|max:100',
                'contrasena' => 'required',
            ]);
            $contrasena = $request->input('contrasena');
            $hashed = Hash::make($contrasena);
            $imagen= "/ruta/imagen/default";
    
            DB::table('padres')->insert([
                'nombre' => $request->nombre,
                'correo' => $request->correo,
                'contrasena' => $hashed,
                'ruta_imagen' => $imagen
            ]); 
               
        }
        //return redirect('home')->with('success', 'El comic ha sido creado');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $padre = Padre::find($id);
        //return view('show')->with('comic',$comic);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $padre = Padre::find($id);
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
        $request->validate([
            'nombre' => 'required|max:100',
            'ruta_imagen' => 'required|max:100'
        ]);

        DB::table('padres')->where('id',$id)-> update([
            'nombre' => $request->nombre,
            'ruta_imagen' => $request->ruta_imagen
        ]);


        $padre = Padre::find($id);

        //return view('show')->with('padre',$padre);


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
        DB::table('padres')->where('id',$id)-> update([
            'desactivado' => $desactivado
        ]);

        return view('home');
    }
}
