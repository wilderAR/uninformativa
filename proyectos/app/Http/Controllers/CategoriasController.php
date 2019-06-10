<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\Exception;
use App\categorias;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias=DB::table('categoria')
        ->join('usuario','usuario.idusuario','=','categoria.idusuario')
        ->select('categoria.idcategoria','usuario.usuario','categoria.nombrec','categoria.descripcion','categoria.estado')
        ->get();
        return view('administradores.categorias_administrador',['categorias'=>$categorias]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('administradores.crear_categoria_administrador');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
       $fields= request()->validate([
               //se agregan los campos requeridos del formulario
               //'nombrec' => 'required', 
        ]);
        // $categorias = new categoria;
        // // $categorias->idusuario = 1;
        // $categorias->nombrec =strtoupper($request->nombre);
        // $categorias->estado = 1;
        // $categorias->save();
        // return redirect('categoria');
        Project::create( $fields);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorias=categoria::find($id);   
        return view('administradores.modificar_categoria_administrador',['categorias'=>$categorias]);
    }

     public function disable($id){
       $categorias=categoria::find($id);
       if($categorias->estado==1){
          $categorias->estado=2;
          $categorias->save();
          return redirect('categoria');
       }else{
           $categorias->estado=1;
           $categorias->save();
           return redirect('categoria');
       }  
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
        $categorias=categoria::find($id);
        $categorias->nombrec=strtoupper($request->nombrec);
        $categorias->save();
        return redirect('categoria');
    }
}
