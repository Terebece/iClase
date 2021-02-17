<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Padre;
use App\Http\Controllers\ActividadesController;
use DB;

class PadresController extends Controller
{
    public function index($id)
    {
        
        $padre = Padre::find($id);
        $alumnos = DB::table('alumnos')->where('id_padre', $id)->get();
        $actividades = DB::table('actividades')
                        ->join('alumnos', 'actividades.id_hijo', '=', 'alumnos.id')
                        -> where('id_padre',$id)
                        -> where('desactivado',0)
                        -> where('eliminada',0)
                        ->orderBy('hora_inicio', 'asc')
                        ->get();
        return view('pages.home_tutor_activities')->with('actividades',$actividades)
                                                  -> with('padre',$padre)
                                                  ->with('alumnos',$alumnos);
    }

    /**
     * Guarda a un nuevo padre
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

            $padre = DB::table('padres')->where('correo',$correo)->first();
            return  view('pages.home_tutor')->with('padre', $padre);
            
               
        } else{
            return view('pages.home');

        }

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
        $padre= DB::table('padres')->where('correo',$correo)->first();
        
        if($padre ==null){
            throw ValidationException::withMessages(['correo' => 'Datos invalidos']);
        }
        $contrasena = $request->input('contrasena');
        if (Hash::check($contrasena, $padre->contrasena)) {
            return $this->index($padre->id);
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
        $padre = Padre::find($id);
        return view('pages.home_tutor') -> with('padre',$padre);
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
