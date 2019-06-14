<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\Exception;
use App\categorias;

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
        ->select('categoria.idcategoria','categoria.nombrec','categoria.descripcion','categoria.estado')
        ->get();
        return view('administradores.categorias_administrador',['categoria'=>$categorias]);
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
        $categorias = new categorias;
        $categorias->nombrec =$request->nombre;
        $categorias->descripcion= $request->descripcion;
        $categorias->estado = 1;
        $categorias->save();
        return redirect('categoria');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorias=categorias::find($id);   
        return view('administradores.modificar_categoria_administrador',['categorias'=>$categorias]);
    }

     public function disable($id){
       $categorias=categorias::find($id);
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
        $categorias=categorias::find($id);
        $categorias->nombrec=$request->nombrec;
        $categorias->descripcion=$request->descripcion; 
        $categorias->save();
        return redirect('categoria');
    }
}
