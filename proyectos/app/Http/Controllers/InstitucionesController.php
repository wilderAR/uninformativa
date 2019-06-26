<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\instituciones;
use App\usuarios;
use Illuminate\Database\QueryException;

class InstitucionesController extends Controller
{
    public function index()
    {
        $instituciones=DB::table('usuario')
        ->select('usuario.idusuario','usuario.usuario','usuario.contraseña','usuario.estado','usuario.correo')->where('usuario.tipo_usuario','=',2)
        ->get();
        return view('administradores.instituciones_administrador',['instituciones'=>$instituciones]);
    }
   
    public function list(){
        $instituciones = DB::table('institucion')
        ->join('usuario','usuario.idusuario','=','institucion.idusuario')
        ->select('institucion.idinstitucion','institucion.pagina','institucion.usuarioi')
        ->get();
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $instituciones=new usuarios;
            $instituciones->usuario = $request ->usuario;
            $instituciones->tipo_usuario = 2;
            $instituciones->contraseña =bcrypt($request->password);
            $instituciones->correo= $request->correo;
            $instituciones->estado=1;
            if ($instituciones ->save()) {
                $message = "institucion guardado con éxito";
                $status = "alert-success";
            }else{
               $message = "Fallo al registrar el institucion";
               $status = "alert-danger";
            }
            return redirect('institucion')->with('status',$status)->with('message',$message);
        } catch (Exception $e) {
            
            return "fatal Error -".$e->getMessage();

        }
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $instituciones=usuarios::find($id);
       return view('administradores.modificar_institucion_administrador',['instituciones'=> $instituciones]);
    }

     public function registro($id, Request $request){
           $instituciones= instituciones::find($id);
           $instituciones->nombrei =$request->nombrei;
           $instituciones->pagina =  $request->pagina;
           $instituciones->direccion = $request->direccion;
        //    $instituciones->idinstitucion = ;
           $instituciones->save();
           redirect('');
     }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function disable($id){
        $instituciones=usuarios::find($id);
        if ($instituciones->estado==1) {
            $instituciones->estado=2;
            $instituciones->save();
            return redirect('institucion');
        }else{
            $instituciones->estado=1;
            $instituciones->save();
            return redirect('institucion');
        }
    }
}
