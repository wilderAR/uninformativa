<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use PHPUnit\Framework\Exception;
use App\usuarios;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios=DB::table('usuario')
        ->select('usuario.idusuario','usuario.usuario','usuario.contraseña','usuario.tipo_usuario','usuario.estado','usuario.correo')->where('usuario.tipo_usuario','=',1)
        ->get();
        return view('administradores.usuarios_administrador',['usuarios'=>$usuarios]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        
        return view('administradores.crear_usuario_administrador');  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //funcion para crear usuario
    public function store(Request $request)
    {
    try {
        $usuarios = new usuarios;
        $usuarios->tipo_usuario=1; 
        $usuarios ->usuario = $request->usuario;
        $usuarios ->contraseña = $request->contraseña;
        $usuarios ->correo = $request->correo;
        $usuarios ->estado = 1;
        if($usuarios ->save()){
            $message="Usuario Registrado con exito";
            $status="alert-success";
        }else{
        $message="Fallo al registrar al cliente";
        $status="alert-danger";
        };
        return redirect('usuarios')->with('status',$status)->with('message',$message);

    } catch (Exception $e) {
        return "Fatal Error -".$e->getMessage();
    }
    }
    

    public function mostrarperfil(){
        $perfil=DB::table('perfil')
        ->select('perfil.idusuario','perfil.edad','perfil.nivel_formacion','perfil.nombre','perfil.apellido')
        ->get();
 
    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idusuario)
    {
        $tipo_usuario=DB::table('tipo_usuario')
        ->select('tipo_usuario.nombret','tipo_usuario.idtipo')
        ->get();     
        $usuarios=usuarios::find($idusuario);
        return view('administradores.modificar_usuario_administrador',['tipo_usuario'=>$tipo_usuario],['usuarios'=>$usuarios]);    
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
        $usuarios=usuarios::find($id);
        $usuarios->tipo_usuario=$request->tipo;
        $usuarios->usuario=$request->usuario;
        $usuarios->contraseña=$request->contraseña;
        $usuarios->save();
        return redirect('usuarios');
    }
    
    public function disable($id){
        $usuarios=usuarios::find($id);
        if ($usuarios->estado==1) {
            $usuarios->estado=2;
            $usuarios->save();
            return redirect('usuarios');
        }else{
            $usuarios->estado=1;
            $usuarios->save();
            return redirect('usuarios');
        }
    }
}
