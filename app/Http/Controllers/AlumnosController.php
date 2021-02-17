<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;
use App\Models\Padre;
use DB;

class AlumnosController extends Controller
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
    public function store(Request $request, $id)
    {
        $correo = $request->input('correo');
        $usuario= DB::table('alumnos')->where('correo',$correo)->first();
        if($usuario ==null){
            $request->validate([
                'nombre' => 'required|max:100',
                'correo' => 'required|max:100',
                'contrasena' => 'required',
            ]);
            $contrasena = $request->input('contrasena');
            $hashed = Hash::make($contrasena);
            $imagen= "/ruta/imagen/default";
    
            DB::table('alumnos')->insert([
                'id_padre' => $id,
                'nombre' => $request->nombre,
                'correo' => $request->correo,
                'contrasena' => $hashed,
                'ruta_imagen' => $imagen
            ]); 
               
        }    
        $padre = Padre::find($id);
        return view('pages.home_tutor')->with('padre',$padre);
        
    }

    /**
     * Revisa si los datos de inicio de sesión son correctos
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function iniciaSesion(Request $request)
    {
        
        $correo = $request->input('correo');
        $usuario= DB::table('padres')->where('correo',$correo)->first();
        
        if($usuario ==null){
            throw ValidationException::withMessages(['correo' => 'Datos invalidos']);
        }
        $contrasena = $request->input('contrasena');
        if (Hash::check($contrasena, $usuario->contrasena)) {
            return view('pages.home_tutor')->with('padre',$usuario);
        }else{
            throw ValidationException::withMessages(['contrasena' => 'Datos invalidos']);
        }
        

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alumno = Alumno::find($id);
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
        $alumno = Alumno::find($id);
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

        DB::table('alumnos')->where('id',$id)-> update([
            'nombre' => $request->nombre,
            'ruta_imagen' => $request->ruta_imagen
        ]);


        $alumno = Alumno::find($id);

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
        DB::table('alumnos')->where('id',$id)-> update([
            'desactivado' => $desactivado
        ]);

        return view('home');
    }
}
